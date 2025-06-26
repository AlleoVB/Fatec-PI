const showSignup = document.getElementById("showSignup");
const showLogin = document.getElementById("showLogin");
const loginArea = document.querySelector(".login-area");
const signupArea = document.querySelector(".signup-area");

showSignup.addEventListener("click", (e) => {
  e.preventDefault();
  loginArea.classList.add("d-none");
  signupArea.classList.remove("d-none");
});

showLogin.addEventListener("click", (e) => {
  e.preventDefault();
  signupArea.classList.add("d-none");
  loginArea.classList.remove("d-none");
});
