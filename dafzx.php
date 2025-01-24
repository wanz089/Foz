<?php
// Function to sanitize and validate folder name
function sanitizeAndValidateFolder($folder) {
    return preg_match('/^[a-zA-Z0-9_]+$/', $folder) ? $folder : '';
}

// Get folder parameter from GET request and sanitize it
$folder = isset($_GET['folder']) ? sanitizeAndValidateFolder($_GET['folder']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Web</title>
    <style>
        body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background: linear-gradient(to right, #6a11cb, #2575fc);
    transition: background 1s ease, background-color 1s ease; /* Add background-color for smooth transition */
    color: #ffffff;
    text-align: center;
  }

  .slider {
    width: 80%;
    height: 145px;
    margin: 20px 0;
    overflow: hidden;
    border-radius: 10px;
    position: relative;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    background-color: #ddd;
  }

  .slides {
    display: flex;
    transition: transform 0.5s ease;
  }

  .slide {
    min-width: 100%;
    height: 100%;
  }

  .slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
  }

  .image-grid {
    display: grid;
    grid-template-columns: repeat(3, 120px);
    grid-template-rows: repeat(4, 120px);
    gap: 20px;
    margin-bottom: 20px;
  }

   .image-item {
    cursor: pointer;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s, box-shadow 0.3s;
    position: relative;
  }

  .image-item:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
  }

  .image-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .game-title {
    font-size: 0.9em;
    margin-top: 5px;
    color: #ffffff;
    font-weight: bold;
    position: absolute;
    bottom: 5px;
    left: 5px;
    background: rgba(0, 0, 0, 0.5);
    padding: 5px 10px;
    border-radius: 5px;
  }

  .copyright {
    font-size: 12px;
    color: #ffffff;
    text-align: center;
    margin-top: auto;
    padding: 20px;
    background: rgba(0, 0, 0, 0.6);
    width: 100%;
    box-sizing: border-box;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
  }
    </style>
</head>
<body>
    <div class="slider">
        <div class="slides">
            <div class="slide"><img src="img/bg21.jpg" alt="Gambar 1"></div>
            <div class="slide"><img src="img/dafzx.jpg" alt="Gambar 2"></div>
            <div class="slide"><img src="img/dafzx.jpg" alt="Gambar 3"></div>
        </div>
    </div>
    <div class="image-grid">
        <?php
        $images = [
            ["src" => "asset/dafzx.jpg", "title" => "PANEL JASTEB ATUR MENIT"],
            ["src" => "asset/dafzx.jpg", "title" => "PANEL JASTEB ATUR RESS"], 
      
            ];
        foreach ($images as $index => $image) {
            echo '<div class="image-item" onclick="submitForm('.($index + 1).')">';
            echo '<img src="'.$image['src'].'" alt="Option '.($index + 1).'">';
            echo '<div class="game-title">'.$image['title'].'</div></div>';
        }
        ?>
    </div>
    <div class="copyright">
        &copy; <a href="https://chat.whatsapp.com/BZ91knDkAXjFZVh0gEcmxI" target="_blank">TUTORIAL NEBAR</a>
    </div>
    <script>
        function submitForm(nomor) {
            if (Number.isInteger(nomor) && nomor > 0 && nomor <= 12) {
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = 'memek.php';
                form.style.display = 'none';

                var nomorInput = document.createElement('input');
                nomorInput.name = 'nomor';
                nomorInput.value = nomor;
                form.appendChild(nomorInput);

                var buatwebInput = document.createElement('input');
                buatwebInput.name = 'buatweb';
                buatwebInput.value = true;
                form.appendChild(buatwebInput);

                document.body.appendChild(form);
                form.submit();
            } else {
                console.error("Nomor tidak valid");
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            let index = 0;
            const slides = document.querySelector('.slides');
            const slideCount = document.querySelectorAll('.slide').length;
            const colors = [
                'linear-gradient(to right, #6a11cb, #2575fc)',
                'linear-gradient(to right, #fbc2eb, #a6c1ee)',
                'linear-gradient(to right, #ffafbd, #ffc3a0)',
                'linear-gradient(to right, #84fab0, #8fd3f4)',
                'linear-gradient(to right, #00c6ff, #0072ff)',
            ];

            function updateSlider() {
                const slideWidth = document.querySelector('.slide').offsetWidth;
                slides.style.transform = `translateX(-${index * slideWidth}px)`;
                document.body.style.background = colors[index % colors.length];
            }

            function slideShow() {
                index = (index < slideCount - 1) ? index + 1 : 0;
                updateSlider();
            }

            setInterval(slideShow, 3000); // Auto slide setiap 3 detik

            updateSlider(); // Inisialisasi slider sekali pada saat halaman dimuat
        });
    </script>
</body>
</html>
