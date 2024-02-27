<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Galeri</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1><a href="{{ route('galeri.command') }}">Langkah-langkah untuk Menggunakan Web Galeri</a></h1>
    <h2>Versi Sederhana</h2>
    <ol>
        <li>git clone https://github.com/KeyLaFleurr/Simple-Web-Galeri.git</li>
        <li>COMPOSER INSTALL</li>
        <li>PERBAIKI KONEKSI DB</li>
        <li>DONE</li>
    </ol>

    <h2>Versi Sendiri</h2>
    <ol>
        <li>git clone https://github.com/KeyLaFleurr/Web-Galeri.git</li>
        <li>COMPOSER INSTALL</li>
        <li>PERBAIKI KONEKSI DB</li>
        <li>
            <p>npm install -g vite
            <br>npm install vite --save-dev</p>
        </li>
        <li>
            TAMBAH FOLDER DI STORAGE/APP/PUBLIC/IMAGES/POSTS/FEATURED-IMAGES
        </li>
        <li>php artisan storage:link</li>
        <li>DONE</li>
    </ol>

    <h2>Versi Sederhana KALKULATOR</h2>
    <ol>
        <li>git clone https://github.com/KeyLaFleurr/Simple-Kalkulator.git</li>
        <li>UNDUH DI HTDOCS</li>
        <li>DONE</li>
    </ol>

    <h1><a href="{{ url('/') }}">back</a></h1>

    </table>
</body>
</html>
