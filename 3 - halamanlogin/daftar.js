    const form = document.getElementById('form');
    const firstnameInput = document.getElementById('firstname-input');
    const emailInput = document.getElementById('email-input');
    const passwordInput = document.getElementById('password-input');
    const repeatPasswordInput = document.getElementById('repeat-password-input');
    const errorMsg = document.getElementById('error-message');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const name = firstnameInput.value.trim();
      const email = emailInput.value.trim();
      const password = passwordInput.value;
      const repeatPassword = repeatPasswordInput.value;

      if (!name || !email || !password || !repeatPassword) {
        errorMsg.textContent = 'Semua kolom wajib diisi.';
        return;
      }

      if (password !== repeatPassword) {
        errorMsg.textContent = 'Kata sandi tidak cocok.';
        return;
      }

      let users = JSON.parse(localStorage.getItem('users')) || [];

      const userExists = users.some(user => user.email === email);
      if (userExists) {
        errorMsg.textContent = 'Email sudah terdaftar, gunakan email lain.';
        return;
      }

      users.push({ name, email, password });
      localStorage.setItem('users', JSON.stringify(users));

      alert('Pendaftaran berhasil! Silakan masuk.');
      window.location.href = 'login.php';
    });