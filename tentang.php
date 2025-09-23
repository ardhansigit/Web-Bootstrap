<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stats";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM stats LIMIT 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<section id="tentang">
    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-lg-3 text-center mb-4 mb-lg-0">
                <img src="aset/bgprofil.png" alt="Foto Profil" class="img-fluid " style="max-height: 250px;">
            </div>

            <div class="col-lg-5 text-center text-lg-start mb-4 mb-lg-0">
                <h2 class="fw-bold">Tentang Saya</h2>
                <p class="text-muted"><?php echo $row['deskripsi']; ?></p>
                <ul class="list-unstyled text-start mx-auto mx-lg-0" style="max-width: 400px;">
                    <li><strong>Nama:</strong> <?php echo $row['nama']; ?></li>
                    <li><strong>Tanggal Lahir:</strong> <?php echo date("F d, Y", strtotime($row['tanggal_lahir'])); ?></li>
                    <li><strong>Alamat:</strong> <?php echo $row['alamat']; ?></li>
                    <li><strong>Kode Pos:</strong> <?php echo $row['kode_pos']; ?></li>
                    <li><strong>Email:</strong> <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></li>
                    <li><strong>Telepon:</strong> <?php echo $row['telepon']; ?></li>
                </ul>
                <div class="d-flex gap-3 mt-3 justify-content-center justify-content-lg-start">
                    <div class="text-center"><i class="bi bi-music-note-beamed fs-3 text-secondary"></i><br><small>Musik</small></div>
                    <div class="text-center"><i class="bi bi-geo-alt fs-3 text-secondary"></i><br><small>Travel</small></div>
                    <div class="text-center"><i class="bi bi-film fs-3 text-secondary"></i><br><small>Movie</small></div>
                    <div class="text-center"><i class="bi bi-tools fs-3 text-secondary"></i><br><small>Tinkering</small></div>
                    <div class="text-center"><i class="bi bi-controller fs-3 text-secondary"></i><br><small>Game</small></div>
                </div>
            </div>

            <div class="col-lg-4">
                <h2 class="fw-bold text-center mb-4">Win Rate Per-Map</h2>
                <div class="card p-3 shadow-lg">
                    <canvas id="wrChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
} else {
    echo "<p class='text-center'>Data tidak ditemukan.</p>";
}

$conn->close();
?>
