document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("signup-form");
  const usernameInput = document.getElementById("username");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirm-password");

  // Event 1: validasi input minimal 5 karakter
  usernameInput.addEventListener("input", () => {
    const error = document.getElementById("username-error");
    if (usernameInput.value.length < 5) {
      error.style.display = "block";
    } else {
      error.style.display = "none";
    }
  });

  // Event 2: Validasi input dengan minimal 8 karakter dan minimal 1 angka
  passwordInput.addEventListener("blur", () => {
    const error = document.getElementById("password-error");
    const passwordRegex = /^(?=.*\d).{8,}$/;
    if (!passwordRegex.test(passwordInput.value)) {
      error.style.display = "block";
    } else {
      error.style.display = "none";
    }
  });

  // Event 3: validasi password dan confirm password memiliki value yang sama
  form.addEventListener("submit", (event) => {
    const error = document.getElementById("confirm-password-error");
    if (passwordInput.value !== confirmPasswordInput.value) {
      error.style.display = "block";
      event.preventDefault();
    } else {
      error.style.display = "none";
      alert("Selamat : Akun berhasil dibuat");
      event.preventDefault();

      form.submit();
    }
  });
});
