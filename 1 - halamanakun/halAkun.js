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
    } else {
      document.getElementById('fullname').textContent = currentUser.name;
      document.getElementById('useremail').textContent = currentUser.email;
      document.getElementById('shortname').textContent = currentUser.name;
      // Jika ada avatar custom
      if(currentUser.avatarUrl){
        document.getElementById('avatar-img').src = currentUser.avatarUrl;
      }
    }

    // Ganti foto profil (hanya preview, tidak simpan ke server)
    document.getElementById('avatar-input').addEventListener('change', function(e) {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(evt) {
          document.getElementById('avatar-img').src = evt.target.result;
        };
        reader.readAsDataURL(file);
      }
    });


    // Dark mode toggle
    document.getElementById('darkmode-toggle').onclick = function() {
      document.body.classList.toggle('darkmode');
      localStorage.setItem('darkmode', document.body.classList.contains('darkmode'));
    };
    if (localStorage.getItem('darkmode') === 'true') {
      document.body.classList.add('darkmode');
    }