const formOpenBtn = document.querySelector("#form-open");
const home = document.querySelector(".home");
const formContainer = document.querySelector(".form_container");
const formCloseBtn = document.querySelector(".form_close");
const signupBtn = document.querySelector("#signup");
const loginBtn = document.querySelector("#login");
const pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

pwShowHide.forEach((icon) => {
  const pwInput = icon.parentElement.querySelector("input");

  icon.addEventListener("click", () => {
    if (pwInput.type === "password") {
      pwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    } else {
      pwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
  
  pwInput.addEventListener("blur", () => {
    icon.classList.remove("uil-eye");
    icon.classList.add("uil-eye-slash");
  });
});

signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});

loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});
