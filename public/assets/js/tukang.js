function openPopup() {
   var popup = document.getElementById("popup");
   popup.classList.add("open");
}
 
function closePopup() {
   var popup = document.getElementById("popup");
   popup.classList.remove("open");
}

const activationButton = document.getElementById("activationButton");

activationButton.addEventListener("click", function () {
  if (activationButton.classList.contains("unactive")) {
    activationButton.innerText = "Aktivasi";
    activationButton.classList.remove("unactive");
    activationButton.classList.add("active");
  } else {
    activationButton.innerText = "Aktivasi";
    activationButton.classList.remove("active");
    activationButton.classList.add("unactive");
  }
});
