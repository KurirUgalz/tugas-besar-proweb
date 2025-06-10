<?php
// loafers.php
header("Content-Type: text/css");

$primaryGreen = "#5e7c5a";
$bgSoft = "#f4f4f4";
$fontMain = "'Inter', sans-serif";
?>


:root {
      --primary-green: #5e7c5a;
      --secondary-green: #a3b18a;
      --accent-green: #dbead7;
      --hover-green: #eaf4ea;
      --deep-green: #000000;
    }

    body {
      margin: 0;
      font-family: 'Poppins', Arial, sans-serif;
      background: linear-gradient(120deg, var(--accent-green) 60%, #e8e3d9 100%);
      min-height: 100vh;
    }

    header {
      background: rgba(255,255,255,0.97);
      padding: 32px 0 16px 0;
      box-shadow: 0 2px 12px rgba(94,124,90,0.08);
      position: sticky;
      top: 0;
      z-index: 1000;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary-green);
      letter-spacing: 2px;
      text-shadow: 0 2px 8px rgba(94,124,90,0.18), 0 6px 24px rgba(94,124,90,0.10); 
    }

    .container {
      max-width: 1200px;
      margin: 48px auto 0 auto;
      padding: 0 24px 48px 24px;
      background: rgba(255,255,255,0.90);
      border-radius: 24px;
      box-shadow: 0 8px 32px rgba(94,124,90,0.07);
    }

    .filters {
      margin-bottom: 32px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      justify-content: flex-end;
    }

    .dropdown {
      position: relative;
    }

    .filter-btn {
      background: var(--accent-green);
      border: 1.5px solid var(--secondary-green);
      padding: 10px 18px;
      border-radius: 50px;
      cursor: pointer;
      transition: background 0.3s, box-shadow 0.3s, border-color 0.3s;
      box-shadow: 0 2px 8px rgba(94,124,90,0.04);
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .filter-btn:hover, .filter-btn:focus {
      background: var(--hover-green);
      box-shadow: 0 4px 16px rgba(94,124,90,0.10);
      border-color: var(--primary-green);
      outline: none;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background: #fff;
      box-shadow: 0 8px 32px rgba(94,124,90,0.13);
      border-radius: 18px;
      margin-top: 12px;
      min-width: 200px;
      z-index: 10;
      padding: 22px 20px 18px 20px;
      animation: fadeIn 0.2s;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px);}
      to { opacity: 1; transform: translateY(0);}
    }

    .dropdown-content label {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
      cursor: pointer;
      font-size: 1rem;
      color: var(--deep-green);
      transition: color 0.2s;
    }
    .dropdown-content label:last-child { margin-bottom: 0; }
    .dropdown-content label:hover span { color: var(--primary-green); }

    .dropdown-content input[type="radio"] {
      accent-color: var(--primary-green);
      width: 18px;
      height: 18px;
    }

    .dropdown-content .dropdown-title {
      font-size: 15px;
      margin-bottom: 16px;
      color: var(--primary-green);
      font-weight: 600;
      letter-spacing: 1px;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 48px 32px;
      padding-bottom: 24px;
    }

    .product-card {
      background: #fff;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 4px 24px rgba(94,124,90,0.10);
      transition: transform 0.25s cubic-bezier(.4,2,.6,1), box-shadow 0.25s;
      display: flex;
      flex-direction: column;
      min-height: 420px;
      border: 1.5px solid var(--accent-green);
    }

    .product-card:hover {
      transform: translateY(-10px) scale(1.025);
      box-shadow: 0 12px 36px rgba(94,124,90,0.16);
      border-color: var(--primary-green);
    }

    .product-card:hover .product-image {
      filter: brightness(0.93) saturate(1.1);
      box-shadow: 0 8px 32px rgba(91,106,77,0.13);
      transform: scale(1.06) rotate(-1deg);
      transition: 0.3s;
    }

    .product-image {
      width: 100%;
      height: 320px;
      object-fit: cover;
      display: block;
      background: var(--accent-green);
      border-bottom: 1px solid var(--secondary-green);
    }

    .product-info {
      padding: 22px 18px 18px 18px;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      position: relative;
    }

    .product-title {
      font-size: 1.13rem;
      margin: 0 0 10px;
      color: var(--deep-green);
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .product-price {
      color: var(--primary-green);
      font-weight: 600;
      font-size: 1.05rem;
      margin-top: auto;
      letter-spacing: 0.5px;
    }

    .add-to-cart-btn {
      background: var(--accent-green);
      border: 1.5px solid var(--secondary-green);
      border-radius: 50%;
      width: 44px;
      height: 44px;
      cursor: pointer;
      font-size: 1.25rem;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      bottom: 18px;
      right: 18px;
      box-shadow: 0 2px 8px rgba(94,124,90,0.08);
      transition: background 0.2s, box-shadow 0.2s, border-color 0.2s;
    }

    .add-to-cart-btn:hover, .add-to-cart-btn:focus {
      background: var(--hover-green);
      border-color: var(--primary-green);
      box-shadow: 0 4px 16px rgba(94,124,90,0.13);
      outline: none;
    }

    /* Green color swatch list */
    .color-list {
      display: flex;
      gap: 10px;
      margin-bottom: 32px;
      align-items: center;
    }
    .color-sample {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      border: 2px solid #fff;
      box-shadow: 0 2px 8px rgba(94,124,90,0.08);
      display: inline-block;
    }
    .color1 { background: var(--primary-green);}
    .color2 { background: var(--secondary-green);}
    .color3 { background: var(--accent-green);}
    .color4 { background: var(--hover-green);}
    .color5 { background: var(--deep-green);}

    @media (max-width: 900px) {
      .products-grid {
        gap: 36px 18px;
      }
      .container {
        padding: 0 8px 32px 8px;
      }
    }

    @media (max-width: 600px) {
      .container {
        margin: 18px 0 0 0;
        border-radius: 0;
        padding: 0 2vw 32px 2vw;
      }
      .products-grid {
        grid-template-columns: 1fr;
        gap: 28px;
      }
      .product-image {
        height: 200px;
      }
      .color-list {
        gap: 6px;
      }
      .color-sample {
        width: 24px;
        height: 24px;
      }
      .add-to-cart-btn {
        width: 36px;
        height: 36px;
        font-size: 1rem;
        bottom: 12px;
        right: 12px;
      }
    }

    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1001;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.8);
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background-color: #fff;
      margin: 20px;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.2);
      max-width: 500px;
      width: 100%;
      position: relative;
    }
    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      color: #aaa;
      font-size: 1.5rem;
      cursor: pointer;
    }
    .close:hover {
      color: #fff;
    }
    .shop-nav {
  background: var(--accent-green);
  border-bottom: 1.5px solid var(--secondary-green);
  box-shadow: 0 2px 8px rgba(91,106,77,0.04);
  position: sticky;
  top: 0;
  z-index: 900;
}
.shop-nav ul {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0;
  list-style: none;
  margin: 0;
  padding: 0;
}
.shop-nav-link {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 16px 32px;
  color: var(--primary-green);
  font-weight: 600;
  text-decoration: none;
  font-family: 'Segoe UI', Arial, sans-serif;
  font-size: 1.08rem;
  position: relative;
  background: none;
  border: none;
  transition: 
    background 0.22s cubic-bezier(.4,2,.6,1),
    color 0.18s,
    box-shadow 0.18s;
  border-bottom: 2.5px solid transparent;
  overflow: hidden;
}
.shop-nav-link span {
  font-size: 1.2em;
  transition: transform 0.18s;
}
.shop-nav-link:hover, .shop-nav-link.active {
  background: linear-gradient(90deg, var(--hover-green) 60%, #eaf4ea 100%);
  color: var(--deep-green);
  border-bottom: 2.5px solid var(--primary-green);
  box-shadow: 0 4px 16px rgba(91,106,77,0.10);
}
.shop-nav-link:hover span, .shop-nav-link.active span {
  transform: scale(1.2) rotate(-8deg);
}
.shop-nav-link::after {
  content: '';
  display: block;
  position: absolute;
  left: 30%;
  bottom: 7px;
  width: 40%;
  height: 3px;
  background: linear-gradient(90deg, var(--primary-green), var(--secondary-green));
  border-radius: 2px;
  opacity: 0;
  transform: scaleX(0);
  transition: opacity 0.18s, transform 0.18s;
}
.shop-nav-link:hover::after, .shop-nav-link.active::after {
  opacity: 1;
  transform: scaleX(1);
}
@media (max-width: 900px) {
  .shop-nav-link { padding: 12px 10px; font-size: 0.98rem; }
}
@media (max-width: 600px) {
  .shop-nav ul { flex-wrap: wrap; }
  .shop-nav-link { padding: 10px 6vw; font-size: 0.96rem; }
}
.back-btn {
  position: absolute;
  top: 28px;
  left: 32px;
  background: var(--accent-green);
  color: var(--primary-green);
  font-weight: 600;
  font-size: 1rem;
  padding: 4px 12px 4px 7px;
  border-radius: 20px;
  text-decoration: none;
  box-shadow: 0 2px 8px rgba(91,106,77,0.07);
  border: 1.5px solid var(--secondary-green);
  transition: background 0.18s, color 0.18s, box-shadow 0.18s;
  z-index: 1002;
  display: inline-block;
}
.back-btn:hover {
  background: var(--primary-green);
  color: #fff;
  box-shadow: 0 4px 16px rgba(91,106,77,0.13);
  border-color: var(--primary-green);
}
@media (max-width: 600px) {
  .back-btn { top: 16px; left: 10px; padding: 7px 12px 7px 10px; font-size: 0.95rem; }
}
.product-badge {
  position: absolute;
  top: 18px;
  left: 18px;
  background: var(--primary-green);
  color: #fff;
  font-size: 0.85rem;
  padding: 4px 14px;
  border-radius: 16px;
  font-weight: 600;
  letter-spacing: 1px;
  box-shadow: 0 2px 8px rgba(91,106,77,0.10);
  z-index: 2;
}
