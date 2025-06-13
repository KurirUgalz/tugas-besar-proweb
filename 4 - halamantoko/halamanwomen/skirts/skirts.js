function filterProducts(category) {
      const cards = document.querySelectorAll('.product-card');
      cards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    }

    function toggleDropdown() {
      const dropdown = document.getElementById('filterDropdown');
      dropdown.style.display = dropdown.style.display === 'none' || dropdown.style.display === '' ? 'block' : 'none';
    }

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
      const btn = document.getElementById('filterDropdownBtn');
      const dropdown = document.getElementById('filterDropdown');
      if (!btn.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.style.display = 'none';
      }
    });

    // Keranjang sederhana
    let cart = [];
    let cartCount = 0;
    let lastModalProduct = null;

    // Show product description modal
    function showDescModal(title, price, desc, imgSrc) {
      document.getElementById('modalTitle').textContent = title;
      document.getElementById('modalPrice').textContent = price;
      document.getElementById('modalDesc').textContent = desc;
      document.getElementById('modalImg').src = imgSrc;
      document.getElementById('descModal').style.display = 'flex';
      lastModalProduct = { title, price, desc, imgSrc };
    }
    function closeDescModal() {
      document.getElementById('descModal').style.display = 'none';
    }

    // Add to cart from modal
    function addToCartFromModal() {
      if (lastModalProduct) {
        addToCart(lastModalProduct.title, parseInt(lastModalProduct.price.replace(/\D/g,'')), lastModalProduct.imgSrc);
        closeDescModal();
      }
    }

    // Tambahkan ke keranjang
    function addToCart(title, price, imgSrc) {
      let found = cart.find(item => item.title === title);
      if (found) {
        found.qty += 1;
      } else {
        cart.push({ title, price, qty: 1, imgSrc });
      }
      cartCount++;
      document.getElementById('cartCount').textContent = cartCount;
    }

    // Modal keranjang
    function openCartModal() {
      let cartItemsDiv = document.getElementById('cartItems');
      cartItemsDiv.innerHTML = '';
      let total = 0;
      if (cart.length === 0) {
        cartItemsDiv.innerHTML = '<p>Keranjang kosong.</p>';
      } else {
        cart.forEach(item => {
          total += item.price * item.qty;
          cartItemsDiv.innerHTML += `
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px;">
              <img src="${item.imgSrc || ''}" alt="" style="width:48px;height:48px;object-fit:cover;border-radius:8px;">
              <div style="flex:1;">
                <div style="font-weight:600;">${item.title}</div>
                <div style="font-size:0.95rem;">Rp ${item.price.toLocaleString('id-ID')} x ${item.qty}</div>
              </div>
              <button onclick="removeFromCart('${item.title}')" style="background:none;border:none;color:#c00;font-size:1.2rem;cursor:pointer;">&times;</button>
            </div>
          `;
        });
      }
      document.getElementById('cartTotal').textContent = 'Total: Rp ' + total.toLocaleString('id-ID');
      document.getElementById('cartModal').style.display = 'flex';
    }
    function closeCartModal() {
      document.getElementById('cartModal').style.display = 'none';
    }

    // Hapus item dari keranjang
    function removeFromCart(title) {
      let idx = cart.findIndex(item => item.title === title);
      if (idx > -1) {
        cartCount -= cart[idx].qty;
        cart.splice(idx, 1);
        document.getElementById('cartCount').textContent = cartCount;
        openCartModal();
      }
    }

    // Checkout
    function checkoutCart() {
      if (cart.length === 0) {
        alert('Keranjang kosong!');
        return;
      }
      alert('Checkout berhasil!\nTerima kasih sudah berbelanja.');
      cart = [];
      cartCount = 0;
      document.getElementById('cartCount').textContent = cartCount;
      closeCartModal();
    }

    // Buka modal keranjang saat klik icon keranjang
    document.getElementById('cartBtn').onclick = openCartModal;