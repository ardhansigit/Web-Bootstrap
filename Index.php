<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-PHP</title>
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>


<body>
    <div class="container-fluid justify-content-center py-0 ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-5 my-4 start-0 end-0 mx-5 fixed-top ">
            <div class="container-md">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="aset/Profillogo.png" alt="Logo" width="30" />
                    <span>Player Stats</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center gap-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#hero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">About Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#statistik">Stats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section id="hero" class="py-5" style="
        background: url('aset/bghero.png');
        background-position: center;
        background-size: cover;
        min-height: 100vh;
    ">
        <div class=" container-fluid banner d-flex align-items-center">
            <div class="container d-flex justify-content-between align-items-center text-center text-white p-5">

                <div class="w-30" style="width: 25%;">
                    <h2 class="fw-bold">Hi There</h2>
                    <h2 class="fw-bold">Saya, Ardhan</h2>
                </div>

                <div style="width: 50%;"></div>

                <div class="w-30 text-end" style="width: 25%;">
                    <h2 class="fw-bold">Ini Adalah Statistik Saya</h2>
                </div>


            </div>

        </div>
    </section>


    <section id="tentang">
        <?php include 'tentang.php'; ?>

    </section>


    <section id="statistik" class="py-5 bg-dark text-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Statistik Saya</h2>
            <div id="statsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#statsCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#statsCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#statsCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active cs-bg">
                        <a href="https://csstats.gg/player/76561198417068276" target="_blank"
                            class="text-decoration-none text-white">
                            <div class="d-flex justify-content-center align-items-center flex-column text-center p-5">
                                <img src="aset/cs2v2.png" alt="Counter Strike" class="img-fluid">
                                <h3 class="fw-bold">Counter Strike</h3>
                                <p class="fs-5">Game yang paling ku nikmati dengan teman, hanya internet tidak mendukung
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="carousel-item warthunder-bg">
                        <a href="https://warthunder.com/en/community/userinfo/?nick=Tactical_Radio" target="_blank"
                            class="text-decoration-none text-white">
                            <div class="d-flex justify-content-center align-items-center flex-column text-center p-5">
                                <img src="aset/wtv2.png" alt="War Thunder" class="img-fluid">
                                <h3 class="fw-bold">War Thunder</h3>
                                <p class="fs-5">Game ketika lagi ingin santai dan ketika internet busuk</p>
                            </div>
                        </a>
                    </div>

                    <div class="carousel-item komunitas-bg">
                        <a href="https://example.com/komunitas" target="_blank" class="text-decoration-none text-white">
                            <div class="d-flex justify-content-center align-items-center flex-column text-center p-5">
                                <img src="aset/comingsoon.png" alt="Soon" class="img-fluid">
                                <h3 class="fw-bold">Coming Soon</h3>
                                <p class="fs-5">hemm...</p>
                            </div>
                        </a>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#statsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#statsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>



    <section id="kontak" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Hubungi Saya</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p class="lead mb-4">Temukan saya di platform berikut:</p>
                    <div class="d-flex justify-content-center gap-4">
                        <a href="https://github.com/ardhansigit" target="_blank" class="text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" alt="GitHub" height="30"
                                fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/sigit-a-7930b6153/" target="_blank"
                            class="text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                            </svg>
                        </a>
                        <a href="mailto:ardhan.sigit@gmail.com" class="text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-envelope-at" viewBox="0 0 16 16">
                                <path
                                    d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                <path
                                    d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                            </svg>
                        </a>
                    </div>
                    <form action="koneksi.php" method="post">
                        <div class="mb-3 text-start">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>

    <footer>
        <p>&copy; 2077 Portofolio Saya. Semua Hak Cipta Dilindungi Tuhan, Bukan Pemerintah.</p>
    </footer>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        fetch('get_chart_data.php')
            .then(response => response.json())
            .then(chartData => {
                const ctx = document.getElementById('wrChart').getContext('2d');
                ctx.canvas.height = 300;

                const wrChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: chartData.labels,
                        datasets: [{
                            label: 'WR% (Win Rate)',
                            data: chartData.data,
                            backgroundColor: 'rgba(54, 162, 235, 0.7)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            borderRadius: 4
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100,
                                ticks: {
                                    callback: function (value) {
                                        return value + '%';
                                    }
                                },
                                title: {
                                    display: true,
                                    text: 'Persentase WR%'
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Map'
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top'
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (context) {
                                        return context.parsed.y + '%';
                                    }
                                }
                            }
                        }
                    }
                });
            });
    </script>

</body>

</html>