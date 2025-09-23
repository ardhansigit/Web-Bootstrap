<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "stats";


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    
    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        
        $stmt = $conn->prepare("INSERT INTO pesan (nama, email, pesan) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $pesan);

        if ($stmt->execute()) {
            echo "<script>
                alert('Pesan berhasil dikirim! Terima kasih, $nama.');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "Terjadi kesalahan: " . $stmt->error;
        }

        $stmt->close();
    } else {
        
        header("Location: index.php?error=1");
        exit;
    }
}

$conn->close();
?>
