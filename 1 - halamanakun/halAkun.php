<?php
      // halAkun.php
      header("Content-Type: text/css");

      $primaryGreen = "#5e7c5a";
      $bgSoft = "#f7fafc";
      $fontMain = "'Segoe UI', Arial, sans-serif";
      ?>

    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: <?= $fontMain ?>;
      background: linear-gradient(135deg,rgb(255, 255, 255) 0%, #f0f4f8 60%);
      color: #222;
      min-height: 100vh;
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 24px 40px;
      background: #687b60;
      box-shadow: 0 2px 12px rgba(30,66,45,0.07);
      position: sticky;
      top: 1;
      z-index: 10;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .logo img {
      height: 90px;
      border-radius: 10px;
    }
    .user-short {
      display: flex;
      align-items: center;
      gap: 16px;
      font-size: 15px;
      color: #1e422d;
    }
    .user-short strong { font-weight: 600; }
    .container {
      max-width: 420px;
      margin: 48px auto 0 auto;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 4px 24px rgba(30,66,45,0.09);
      padding: 36px 32px 28px 32px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 28px;
    }
    .avatar-wrapper {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .avatar {
      width: 84px;
      height: 84px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #e0f2e9;
      box-shadow: 0 2px 8px rgba(30,66,45,0.07);
      margin-bottom: 8px;
      background: #f7fafc;
    }
    .edit-avatar-btn {
      position: absolute;
      bottom: 8px;
      right: 8px;
      background: #e0f2e9;
      border: none;
      border-radius: 50%;
      padding: 6px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.2s;
    }
    .edit-avatar-btn:hover {
      background: #b2dfdb;
    }
    .username {
      font-size: 22px;
      font-weight: 700;
      color: #1e422d;
      margin-bottom: 2px;
      text-align: center;
    }
    .user-email {
      font-size: 14px;
      color: #6b7280;
      margin-bottom: 12px;
      text-align: center;
    }
    .menu-list {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-bottom: 10px;
      align-items: center; /* Tambahkan ini agar menu center */
    }
    .menu-list a {
      display: flex;
      align-items: center;
      justify-content: center; /* Tambahkan ini agar teks di tengah */
      gap: 12px;
      padding: 13px 18px;
      border-radius: 10px;
      background: #f7fafc;
      color: #1e422d;
      font-weight: 500;
      text-decoration: none;
      font-size: 15px;
      transition: background 0.2s, color 0.2s, transform 0.2s;
      width: 220px; /* Tambahkan agar semua tombol sama lebar dan center */
      text-align: center; /* Tambahkan agar teks di tengah */
    }
    .menu-list a:hover {
      background: #e0f2e9;
      color: #2f5f47;
      transform: translateX(6px) scale(1.03);
    }
    .logout-btn {
      width: 220px;
      display: block;
      margin: 18px auto 0 auto;
      padding: 13px 0;
      border: none;
      border-radius: 10px;
      background: linear-gradient(90deg, #1e422d 60%, #2f5f47 100%);
      color: #fff;
      font-weight: 600;
      font-size: 15px;
      cursor: pointer;
      transition: background 0.2s, transform 0.2s;
      text-align: center;
    }
    .logout-btn:hover {
      background: #26322b;
      transform: scale(1.03);
    }
    .delete-link {
      margin-top: 18px;
      font-size: 13px;
      color: #b91c1c;
      text-align: center;
      text-decoration: underline;
      cursor: pointer;
      display: block;
      transition: color 0.2s;
    }
    .delete-link:hover { color: #7f1d1d; }
    #notif-update {
      display:none;
      background:#d1fae5;
      color:#065f46;
      padding:10px 0;
      text-align:center;
      font-size:15px;
      margin-bottom:10px;
      border-radius: 8px;
      max-width: 420px;
      margin-left: auto;
      margin-right: auto;
    }
    /* Dark mode */
    body.darkmode {
      background: linear-gradient(135deg, #232526 0%, #414345 100%);
      color: #f3f3f3;
    }
    body.darkmode .container, body.darkmode header {
      background: #232526;
      color: #f3f3f3;
    }
    body.darkmode .menu-list a {
      background: #2d2d2d;
      color: #f3f3f3;
    }
    body.darkmode .menu-list a:hover {
      background: #333;
      color: #a7ffeb;
    }
    @media (max-width: 600px) {
      .container {
        max-width: 98vw;
        padding: 20px 6vw 18px 6vw;
      }
      header {
        flex-direction: column;
        gap: 10px;
        padding: 18px 8vw;
      }
      #notif-update {
        max-width: 98vw;
      }
    }