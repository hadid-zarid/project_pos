<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #f5f7fa;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header */
        header {
            background: white;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .logo {
            display: flex;
            align-items: center;
        }

        header .logo img {
            height: 50px;
            margin-right: 10px;
            border-radius: 50%;
        }

        header .login-btn {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            transition: transform 0.3s, background-color 0.3s;
        }

        header .login-btn:hover {
            background-color: #e68a00;
            transform: scale(1.1);
        }

        /* Hero Section */
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 50px 20px;
            text-align: left;
            background: linear-gradient(to bottom right, #1e88e5, #42a5f5);
            color: white;
            gap: 20px;
            border-radius: 0px 0px 20px 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .content .text {
            max-width: 600px;
            animation: fadeInDown 1.5s ease;
        }

        .content .text h1 {
            font-size: 3.5rem;
            margin: 0 0 20px;
            font-weight: 600;
            line-height: 1.2;
        }

        .content .text p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .content .text .cta-btn {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 1.2rem;
            transition: transform 0.3s, background-color 0.3s;
        }

        .content .text .cta-btn:hover {
            background-color: #e68a00;
            transform: translateY(-5px);
        }

        .content .image img {
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            animation: zoomIn 1.5s ease;
        }

        /* Features */
        .features {
            background: #ffffff;
            padding: 50px 20px;
            text-align: center;
        }

        .features h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #1e88e5;
        }

        .features .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .features .feature-item {
            background: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .features .feature-item:hover {
            transform: translateY(-10px);
        }

        .features .feature-item img {
            height: 80px;
            margin-bottom: 15px;
        }

        .features .feature-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #1e88e5;
        }

        .features .feature-item p {
            font-size: 1rem;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer a {
            color: #ff9800;
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .content .text {
                max-width: 100%;
            }

            .content .image img {
                max-width: 80%;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="/images/logo5.png" alt="Program12 Logo">
            <span>Program12</span>
        </div>
        <a href="/login" class="login-btn">LOGIN</a>
    </header>

    <!-- Hero Section -->
    <section class="content">
        <div class="text">
            <h1>Sistem Point of Sales</h1>
            <p>Sistem inovatif untuk mendukung bisnis Anda.</p>
            <a href="#features" class="cta-btn">Apa saja fitur-nya?</a>
        </div>
        <div class="image">
            <img src="/images/logo4.png" alt="Cash Register">
        </div>
    </section>

    <!-- Features -->
    <section class="features" id="features">
        <h2>Fitur Utama</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <img src="/images/logo6.png" alt="Manajemen Penjualan">
                <h3>Manajemen Penjualan</h3>
                <p>Lakukan transaksi penjualan dengan mudah dan cepat.</p>
            </div>
            <div class="feature-item">
                <img src="/images/logo7.png" alt="Manajemen Stok">
                <h3>Manajemen Stok</h3>
                <p>Monitor dan kelola stok produk dengan akurat.</p>
            </div>
            <div class="feature-item">
                <img src="/images/logo8.png" alt="Laporan Penjualan">
                <h3>Laporan Penjualan</h3>
                <p>Dapatkan laporan penjualan lengkap dan detail.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Program12. All rights reserved. <a href="#">Privacy Policy</a></p>
    </footer>
</body>

</html>
