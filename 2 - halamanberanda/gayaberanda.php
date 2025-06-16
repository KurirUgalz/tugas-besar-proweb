   <?php
    header("Content-Type: text/css");
    ?>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }
    body {
      background: url('1.jpg') no-repeat center center fixed;
      background-size: cover;
      color: white;
    }
    header {
      background-color: #687b60;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 50px 40px;
      position: sticky;
      top: 1;
      z-index: 1000;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .nav-search {
      display: flex;
      align-items: center;
      background-color: #5b6a4d;
      border-radius: 10px;
      padding: 5px;
      transition: transform 0.3s ease;
    }
    .nav-search:hover {
      transform: scale(1.05);
    }
    .nav-search input {
      padding: 5px;
      border: none;
      background-color: transparent;
      color: white;
      outline: none;
    }
    .nav-search button {
      background-color: transparent;
      color: white;
      border: none;
      cursor: pointer;
    }
    header img {
      height: 100px;
      width: 200px;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    .user-link {
      color:rgb(194, 182, 160) !important;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.2s;
      font-family: garamond;
      font-size: 18px;
    }
    .user-link:hover {
      color:rgb(66, 82, 72) !important;
    }
    .header-right {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    .nav-auth {
      color: white;
      font-size: 14px;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .nav-auth:hover {
      color: #a8d5ba;
    }
    nav {
      background-color: #b2aa9a;
      display: flex;
      justify-content: center;
      padding: 10px 20px;
      margin-top: 0px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .nav-left {
      display: flex;
      gap: 250px;
    }
    .nav-left > div {
      position: relative;
    }
    .nav-left span {
      font-weight: bold;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    .nav-left span:hover {
      color: #5b6a4d;
    }
    .dropdown {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #5b6a4d;
      padding: 10px 0;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      opacity: 0;
      transform: translateY(-10px);
      transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .nav-left > div:hover .dropdown {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }
    
    .dropdown a {
      display: block;
      padding: 15px 20px;
      color: white;
      text-decoration: none;
      font-size: 15px;
      transition: background-color 0.3s ease;
    }
    .dropdown a:hover {
      background-color: #687b60;
    }
    .hero {
      text-align: center;
      padding: 60px 0;
      position: relative;
    }
    .hero-img-wrapper {
      position: relative;
      width: 400px;
      height: 400px;
      margin: 0 auto;
    }
    .hero-img {
      position: absolute;
      top: 0; left: 0;
      width: 400px;
      height: 400px;
      object-fit: cover;
      border-radius: 50%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      opacity: 0;
      transition: opacity 1s;
      z-index: 1;
    }
    .hero-img.active {
      opacity: 1;
      z-index: 2;
    }
    .hero-img:hover {
      transform: scale(1.1);
    }
    .background-text {
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      font-size: 100px;
      color: rgba(255, 255, 255, 0.05);
      font-weight: bold;
      z-index: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      pointer-events: none;
      font-family: 'Playfair Display', serif;
    }
    .hero-content {
      position: relative;
      z-index: 1;
    }
    footer {
      background-color: #1c2b1a;
      padding: 20px;
      text-align: center;
    }
    .footer-content {
      max-width: 1000px;
      margin: auto;
    }
    .footer-content h3 {
      margin-bottom: 10px;
    }
    .footer-content p {
      font-size: 14px;
      color: #ccc;
    }
    ::placeholder {
      color: #ccc;
      
    }
    .card-search {
      margin-bottom: 12px;
      max-width: 350px;
    }
    .card-img-top {
      object-fit: cover;
      height: 160px;
    }
    .search-result-container {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }
    .search-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      width: calc(33.333% - 8px);
      box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.1);
    }
    .search-img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }
    .search-info {
      padding: 8px;
    }
    .search-harga {
      color: #d9534f;
      font-weight: bold;
    }

    #search-result {
      position: absolute;
      top: 40px;
      left: 0;
      width: 350px;
      background: #fff;
      color: #333;
      border-radius: 8px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.12);
      z-index: 999;
      max-height: 400px;
      overflow-y: auto;
      font-size: 15px;
    }
    .search-card:hover {
      background: #f5f5f5;
    }