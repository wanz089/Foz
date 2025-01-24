<?php
include "setting.php";
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="G-Code">
    <title>✨WEB BY FORXZZ ⚡</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            color: white;
        }
        .bg-image {
            /* The image used */
            background-color: #FFC0CB; /* Warna pink */
            
            /* Full height */
            height: 100%; 
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .menu-container {
            display: flex;
            justify-content: center; /* Memposisikan elemen secara merata di tengah */
            align-items: center;
            height: 100%;
            padding-top: 3rem; /* Sesuaikan dengan kebutuhan Anda */
        }
        .menu-container > div {
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }
        .menu-container a {
            text-decoration: none; /* Hapus underline dari link */
            color: white; /* Warna teks */
            margin-top: 10px; /* Jarak antara link */
        }
        
   </style>
	<audio autoplay>
	<source src="audio/login.mp3" type="audio/mp3"/>
</audio>

    </style>
</head>
<body>
    <!-- The fullscreen background image -->
    <div class="bg-image">
        <div class="container">
            <div class="menu-container">
                <div>
                    <a href="login2.php" class="menu btn btn-primary" type="submit">
                        <i class="fa-solid fa-book fa-fade"></i> © 𝗞𝗛𝗨𝗦𝗨S FORXZZ
                    </a>
                    <a href="login1.php" class="menu btn btn-danger" type="submit">
                        <i class="fa-solid fa-book fa-fade"></i> 𝗞𝗛𝗨𝗦𝗨𝗦 𝗠𝗘𝗠𝗕𝗘𝗥 FORXZZ
                    </a>
 <a href="login3.php" class="menu btn btn-danger" type="submit">
                        <i class="fa-solid fa-book fa-fade"></i> 𝗞𝗛𝗨𝗦𝗨𝗦 FORXZZ👑
                       
                    </a>     
                </div>
            </div>
        </div>
    </div>
</body>
</html>
