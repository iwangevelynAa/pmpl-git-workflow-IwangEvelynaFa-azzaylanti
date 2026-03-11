<?php
// Git Workflow Simulation
// File ini digunakan untuk simulasi perubahan dalam praktikum Git.

$title = "Git Workflow Simulation";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1><?php echo $title; ?></h1>

    <p>Selamat datang di praktikum Git Workflow.</p>

    <section>
    <h2>Kontributor</h2>
    <ul>
        <li>Iwang Evelyna</li>
        <li>Aghnian Maela Darissa'adah</li>
        <li>Amalia Rizqi Kurniawati</li>
    </ul>
</section>

   <section>
            <h2>Tujuan Project Akhir</h2>
            <p>
                Proyek ini bertujuan untuk memahami alur kerja Git seperti commit,
                branch, dan pull request dalam pengembangan perangkat lunak tim.
            </p>
        </section>

        <section>
    <h2>Aktivitas Project</h2>
    <ul>
        <li>Membuat repository GitHub</li>
        <li>Melakukan commit perubahan</li>
        <li>Menggabungkan kode melalui pull request</li>
    </ul>
</section>


    <button onclick="showMessage()">Klik Saya</button>

    <script src="script.js"></script>
</body>
</html>