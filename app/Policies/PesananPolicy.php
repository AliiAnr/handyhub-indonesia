<?php

namespace App\Policies;

use App\Models\pengguna;
use App\Models\pesanan;
use Illuminate\Auth\Access\Response;

class PesananPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(pengguna $pengguna, pesanan $pesanan): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(pengguna $pengguna): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(pengguna $pengguna, pesanan $pesanan): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(pengguna $pengguna, pesanan $pesanan): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(pengguna $pengguna, pesanan $pesanan): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(pengguna $pengguna, pesanan $pesanan): bool
    {
        //
    }
}
