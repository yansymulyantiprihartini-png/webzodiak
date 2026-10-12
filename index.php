<?php 
session_start();
include 'fungsi.php';
if (isset($_GET['logout'])) { session_destroy(); header("Location: index.php"); exit; }
if (isset($_POST['login'])) { $_SESSION['nama'] = $_POST['nama']; header("Location: index.php"); exit; }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zodiak App</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="app">

<?php if (!isset($_SESSION['nama'])) { ?>
    <div class="header"><h2>🔮 ZODIAK APP 🔮</h2><p>Login dulu bestie</p></div>
    <form method="post">
        <h3>Masukin Nama Lo:</h3>
        <input type="text" name="nama" placeholder="Contoh: Alya" required>
        <button type="submit" name="login">Masuk ke App</button>
    </form>
<?php } else { ?>
    <div class="header">
        <h3>Halo, <?php echo $_SESSION['nama']; ?>! ✨</h3>
        <a href="?logout=1" style="color:white; font-size:12px;">Logout</a>
    </div>
    <form method="post">
        <h3>Cek Zodiak Lo:</h3>
        <input type="date" name="tgl" required>
        <button type="submit" name="cek">Cek Sekarang</button>
    </form>
    <?php
    if (isset($_POST['cek'])) {
        $hasil = cekZodiak($_POST['tgl']);
        echo "<div class='hasil'><h2>$hasil</h2><p>Hai ".$_SESSION['nama'].", ramalan cinta lo: bakal ada yang chat duluan! 😳</p></div>";
    }
    ?>
<?php } ?>

</div>
</body>
</html>
