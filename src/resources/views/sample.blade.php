<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Web</title>
    <style>
        body {
            padding: 40px;
            margin: 12px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Selamat Datang di Pemrograman Web</h1>
    </header>

    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
    </nav>

    <div id = "home">
        <h2>Hello World</h2>
        <p>Ini adalah halaman selamat datang.</p>
    </div>

    <div id = "about">
        <h2>Tentang Kami</h2>
        <p>Kami adalah pengembang web yang berdedikasi untuk membuat aplikasi web yang luar biasa.</p>
    </div>

    <div id = "contact"></div>
        <h2>Kontak Kami</h2>
        <form action="/submit" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <input type="submit" value="Kirim">
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Pemrograman Web. All rights reserved.</p>
    </footer>
</body>
</html>