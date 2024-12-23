document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("signin-form");
  const usernameInput = document.getElementById("username");
  const passwordInput = document.getElementById("password");

  // Event 1: blur, akan menampilkan pesan error yang berasal dari element span dengan class username-erorr
  usernameInput.addEventListener("blur", () => {
    const error = document.getElementById("username-error");
    if (!usernameInput.value.trim()) {
      error.style.display = "block";
    } else {
      error.style.display = "none";
    }
  });

  // Event 2: blur ,akan menampilkan pesan error yang berasal dari element span dengan class password-erorr
  passwordInput.addEventListener("blur", () => {
    const error = document.getElementById("password-error");
    if (!passwordInput.value.trim()) {
      error.style.display = "block";
    } else {
      error.style.display = "none";
    }
  });

  // Event 3: untuk validasi input username dan password
  form.addEventListener("submit", (event) => {
    const usernameError = document.getElementById("username-error");
    const passwordError = document.getElementById("password-error");

    if (!usernameInput.value.trim()) {
      usernameError.style.display = "block";
      event.preventDefault();
    }
    if (!passwordInput.value.trim()) {
      passwordError.style.display = "block";
      event.preventDefault();
    }
  });
});
