    // Notifikasi update dari detail akun
    if (window.location.search.includes('updated=1')) {
      document.getElementById('notif-update').style.display = 'block';
      setTimeout(() => {
        document.getElementById('notif-update').style.display = 'none';
      }, 2000);
    }

    // Ambil data user dari localStorage
    let currentUser = JSON.parse(localStorage.getItem('currentUser'));

    if (!currentUser) {
      window.location.href = '../3 - halamanlogin/login.html';
    } else {
      document.getElementById('fullname').textContent = currentUser.name;
      document.getElementById('useremail').textContent = currentUser.email;
      document.getElementById('shortname').textContent = currentUser.name;
      // Jika ada avatar custom
      if(currentUser.avatarUrl){
        document.getElementById('avatar-img').src = currentUser.avatarUrl;
      }
    }

    // Ganti foto profil
    document.getElementById('avatar-input').addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(evt) {
          document.getElementById('avatar-img').src = evt.target.result;
          // Simpan ke localStorage
          currentUser.avatarUrl = evt.target.result;
          localStorage.setItem('currentUser', JSON.stringify(currentUser));
          // Update juga di array users jika ada
          let users = JSON.parse(localStorage.getItem('users')) || [];
          users = users.map(u => u.email === currentUser.email ? {...u, avatarUrl: evt.target.result} : u);
          localStorage.setItem('users', JSON.stringify(users));
        };
        reader.readAsDataURL(file);
      }
    });

    function logout() {
      if (confirm('Yakin ingin keluar?')) {
        localStorage.removeItem('currentUser');
        window.location.href = '../3 - halamanlogin/login.html';
      }
    }

    function deleteAccount() {
      if (confirm('Apakah kamu yakin ingin menghapus akun? Tindakan ini tidak bisa dibatalkan.')) {
        let users = JSON.parse(localStorage.getItem('users')) || [];
        users = users.filter(user => user.email !== currentUser.email);
        localStorage.setItem('users', JSON.stringify(users));
        localStorage.removeItem('currentUser');
        alert('Akun kamu telah dihapus.');
        window.location.href = '../3 - halamanlogin/login.html';
      }
    }

    // Dark mode toggle
    document.getElementById('darkmode-toggle').onclick = function() {
      document.body.classList.toggle('darkmode');
      localStorage.setItem('darkmode', document.body.classList.contains('darkmode'));
    };
    if (localStorage.getItem('darkmode') === 'true') {
      document.body.classList.add('darkmode');
    }