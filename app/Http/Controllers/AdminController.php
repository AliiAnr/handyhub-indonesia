<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\admin;
use App\Models\kategori;
use App\Models\pengguna;
use App\Models\pesanan;
use App\Models\tukang;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function cslist(){
        return view('admin-customer',[
            'user' => pengguna::all()
        ]);
    }
    public function plist(){
        return view('pelayanan',[
            'pelayanan' => kategori::all()
        ]);
    }
    public function rlist(){
        $pesanan = pesanan::join('kategoris', 'pesanans.id_kategori', '=', 'kategoris.id')
        ->join('penggunas', 'pesanans.id_customer', '=', 'penggunas.id')
        ->select('pesanans.*', 'kategoris.Kategori as jenis', 'penggunas.name as namap','penggunas.Alamat as alamat', 'kategoris.JenisPelayanan as jenisp')
        ->get();
        
        return view('admin-riwayat',[
            'pesanan' => $pesanan
        ]);
    }
    public function tklist(){
        $users = tukang::all();
        foreach ($users as $user) {
            if ($user->tgl_lahir !== null) {
                $user->age = $user->tgl_lahir->age;
            } else {
                $user->age = null; 
            }
        }
        return view('admin-tukang',[
            'user' => $users
        ]);
    }
    public function tambahcs(){
        return view('tambah_customer');
    }
    public function tambahtk(){
        return view('tambah_tukang');
    }
    public function pelayananbaru(Request $request){
        $validatedData = $request->validate([
            'image' => 'image',
            'JenisPelayanan' => 'required',
            'Kategori' => 'required'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('fotopelayanan');
        }
        // dd($validatedData);
        $newrow = kategori::create($validatedData);
        $newrow->update(['Foto' => $validatedData['image']]);
        return redirect('pelayanan');
    }
    public function tukangbaru(Request $request){
        $validatedData = $request->validate([
            'image' => 'image',
            'jalan' => 'required',
            'tgl_lahir' => 'required',
            'kodepos' => 'required',
            'Alamat' => 'required',
            'kecamatan' => 'required',
            'provinsi' => 'required',
            'No_Hp' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:penggunas',
            'password'=> 'required|min:6'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('fotoprofil');

        }
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        $newrow = tukang::create($validatedData);
        $newrow->update(['ProfilPic' => $validatedData['image']]);
        return redirect('admin-tukang');
    }
    public function customerbaru(Request $request){
        $validatedData = $request->validate([
            'image' => 'image',
            'jalan' => 'required',
            'kodepos' => 'required',
            'Alamat' => 'required',
            'kecamatan' => 'required',
            'provinsi' => 'required',
            'No_Hp' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:penggunas',
            'password'=> 'required|min:6'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('fotoprofil');

        }
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        $newrow = pengguna::create($validatedData);
        $newrow->update(['ProfilPic' => $validatedData['image']]);
        return redirect('admin-customer');
    }
    public function deletecs($id_customer){
        pengguna::where('id', $id_customer)->delete();
        return redirect('admin-customer');
    }
    public function deletetk($id_tukang){
        tukang::where('id', $id_tukang)->delete();
        return redirect('admin-tukang');
    }
    public function deleter($id_riwayat){
        pesanan::where('id', $id_riwayat)->delete();
        return redirect('admin-riwayat');
    }
    public function deletep($id_pelayanan){
        kategori::where('id', $id_pelayanan)->delete();
        return redirect('pelayanan');
    }
    public function ubahcs($id_customer){
        return view('ubah_customer',[
            'id' =>$id_customer
        ]);
    }
    public function ubahtk($id_tukang){
        return view('ubah_tukang',[
            'id' =>$id_tukang
        ]);
    }
    public function ubahp($id_pelayanan){
        return view('ubah_pelayanan',[
            'id' =>$id_pelayanan
        ]);
    }
    public function changed($id_customer,Request $request){
        $validatedData = $request->validate([
            'image' => 'nullable',
            'jalan' => 'nullable',
            'kodepos' => 'nullable',
            'Alamat' => 'nullable',
            'kecamatan' => 'nullable',
            'provinsi' => 'nullable',
            'No_Hp' => 'nullable',
            'name' => 'nullable',
            'email' => 'nullable',
            'password'=> 'nullable'
        ]);
        
        if ($validatedData['password'] !== null) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }
        $pengguna = pengguna::find($id_customer);
        $pengguna->update(array_filter($validatedData));
        if($validatedData['image']!== null){
            if($request->file('image')){
                $validatedData['image'] = $request->file('image')->store('fotoprofil');
            }
            $pengguna->update(['ProfilPic' => $validatedData['image']]);
        }
        return redirect('admin-customer');
    }
    public function changedtk($id_tukang,Request $request){
        $validatedData = $request->validate([
            'image' => 'nullable',
            'jalan' => 'nullable',
            'kodepos' => 'nullable',
            'tgl_lahir' => 'nullable',
            'Alamat' => 'nullable',
            'kecamatan' => 'nullable',
            'provinsi' => 'nullable',
            'No_Hp' => 'nullable',
            'name' => 'nullable',
            'email' => 'nullable',
            'password'=> 'nullable'
        ]);
        // dd($validatedData);
        if ($validatedData['password'] !== null) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }
        $tukang = tukang::find($id_tukang);
        $tukang->update(array_filter($validatedData));
        if(array_key_exists('image', $validatedData)){
            if($request->file('image')){
                $validatedData['image'] = $request->file('image')->store('fotoprofil');
            }
            $tukang->update(['ProfilPic' => $validatedData['image']]);
        }
        return redirect('admin-tukang');
    }
    public function changedp($id_pelayanan,Request $request){
        $validatedData = $request->validate([
            'image' => 'nullable',
            'Kategori' => 'nullable',
            'JenisPelayanan' => 'nullable'
        ]);
        $kategori = kategori::find($id_pelayanan);
        $kategori->update(array_filter($validatedData));
        if(array_key_exists('image', $validatedData)){
            if($request->file('image')){
                $validatedData['image'] = $request->file('image')->store('fotoprofil');
            }
            $kategori->update(['Foto' => $validatedData['image']]);
        }
        return redirect('pelayanan');
        }
}
