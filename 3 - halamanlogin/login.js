    const form = document.getElementById('form');
    const emailInput = document.getElementById('email-input');
    const passwordInput = document.getElementById('password-input');
    const errorMsg = document.getElementById('error-message');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const email = emailInput.value.trim();
      const password = passwordInput.value;

      if (!email || !password) {
        errorMsg.textContent = 'Email dan sandi wajib diisi.';
        return;
      }

      let users = JSON.parse(localStorage.getItem('users')) || [];

      const user = users.find(user => user.email === email && user.password === password);

      if (user) {
        localStorage.setItem('currentUser', JSON.stringify(user));
        window.location.href = '../1 - halamanakun/halamanakun.php';
      } else {
        errorMsg.textContent = 'Email atau kata sandi salah.';
      }
    });