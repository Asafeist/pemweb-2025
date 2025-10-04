<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        <h1>Si Hitam dan si putih</h1>
        <img src="assets/beruang.png">
        <p><i>Kisah ini menceritakan pertarungan sengit antara beruang hitam dengan seorang pria kulit putih</i></p>
        <br>
        <h2>Karakter cerita:</h2>
        <ul>
            <li>Mark</li>
            <li>Hitam</li>
            <li>Lebah Ganteng</li>
        </ul>
        <br>
        <h2>Alur cerita:</h2>
        <ol>
            <li>Pengenalan Karakter</li>
            <li>Pertemuan Awal</li>
            <li>Konflik Utama</li>
            <li>Perpisahan</li>
            <li>Real Story</li>
        </ol>
        <footer style="padding:24px">
            <form>
            <h2>Subscribe email untuk mendapatkan update komik</h2>
            <form onsubmit="handleSubmit(event)">
                <label for="email" style="display:inline-block; width:100px;">Email: </label>
                <input type="email" id="email" name="email" rows="4" required><br>
                
                <label for="message" style="display:inline-block; width:100px;">Message:</label>
                <textarea id="message" name="message" rows="4"></textarea><br>
                <button type="submit">Berlangganan</button>
            </form>
        </footer>
    </div>
</body>
</html>