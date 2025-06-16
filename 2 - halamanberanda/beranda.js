    // Dropdown
    document.querySelectorAll('.nav-left > div').forEach((menu) => {
      menu.addEventListener('mouseenter', () => {
        const dropdown = menu.querySelector('.dropdown');
        if (dropdown) {
          dropdown.style.display = 'block';
          dropdown.style.opacity = '1';
          dropdown.style.transform = 'translateY(0)';
        }
      });
      menu.addEventListener('mouseleave', () => {
        const dropdown = menu.querySelector('.dropdown');
        if (dropdown) {
          dropdown.style.opacity = '0';
          dropdown.style.transform = 'translateY(-10px)';
          setTimeout(() => {
            dropdown.style.display = 'none';
          }, 300);
        }
      });
    });

    // Scroll shadow
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
      header.style.boxShadow = window.scrollY > 50
        ? '0 8px 12px rgba(0, 0, 0, 0.2)'
        : '0 4px 6px rgba(0, 0, 0, 0.1)';
    });

    // Hero Image toggle
    setInterval(() => {
      document.getElementById('img1').classList.toggle('active');
      document.getElementById('img2').classList.toggle('active');
    }, 3000);

    // Hover effect
    document.querySelectorAll('.hero-img').forEach(img => {
      img.addEventListener('mouseenter', () => {
        img.style.transform = 'scale(1.1)';
        img.style.transition = 'transform 0.5s ease';
      });
      img.addEventListener('mouseleave', () => {
        img.style.transform = 'scale(1)';
      });
    });

    // Ganti login/daftar jadi nama akun
    const authLinks = document.getElementById('auth-links');
    const username = localStorage.getItem('username');
    if (username) {
      authLinks.innerHTML = `
        <span style="color:white;">Halo, ${username}</span>
        <a href="#" id="logout" style="color: #ffcccc; margin-left: 15px;">Keluar</a>
      `;
      document.getElementById('logout').addEventListener('click', (e) => {
        e.preventDefault();
        localStorage.removeItem('username');
        location.reload();
      });
    }

    // Live search produk
    const searchInput = document.getElementById('search');
    const searchResult = document.getElementById('search-result');

    if (searchInput && searchResult) {
      searchInput.addEventListener('keyup', function() {
        const keyword = this.value;
        if (keyword.length > 0) {
          const xhr = new XMLHttpRequest();
          xhr.open('GET', 'search_produk.php?keyword=' + encodeURIComponent(keyword), true);
          xhr.onload = function() {
            if (xhr.status === 200) {
              searchResult.innerHTML = xhr.responseText;
            }
          };
          xhr.send();
        } else {
          searchResult.innerHTML = '';
        }
      });
    }