@extends("layouts.admin-layout")
@section("content")

<main class="main-content position-relative border-radius-lg ">
    @include("components.navbar")
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah User</p>
                                    <h5 class="font-weight-bolder">
                                        120
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Guru</p>
                                    <h5 class="font-weight-bolder">
                                        300
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Siswa</p>
                                    <h5 class="font-weight-bolder">
                                        100
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Pengunjung</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% lebih pengunjung</span> pada 2022
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-carousel overflow-hidden h-100 p-0">
                    <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner border-radius-lg h-100">
                            <div class="carousel-item h-100 active" style="background-image: url('https://velog.velcdn.com/images%2Fjha0402%2Fpost%2F60607cfd-80e8-42c9-a8de-ae44a8001fea%2F39%20of%20the%20best%20JavaScript%20libraries%20and%20frameworks%20to%20try%20in%C2%A02020.jpeg');
      background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-camera-compact text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Belajar Pemrograman Javascript untuk Pemula</h5>
                                    <p>Javascript adalah bahasa universal yang bisa digunakan untuk membuat aplikasi web, server, desktop, mobile, game, IoT, dsb.</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/645/96/47/python-programming-programming-programming-language-code-hd-wallpaper-preview.jpg');
      background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Tutorial Baca Tulis File dengan Python</h5>
                                    <p>Pada tutorial ini, kita akan belajar membaca dan menulis File dengan Python. Mulai dari File Teks, JSON, XML, CSV, dan sebagainya..</p>
                                </div>
                            </div>
                            <div class="carousel-item h-100" style="background-image: url('https://wallpaperaccess.com/full/3909236.png');
      background-size: cover;">
                                <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                        <i class="ni ni-trophy text-dark opacity-10"></i>
                                    </div>
                                    <h5 class="text-white mb-1">Tutorial Nodejs untuk Pemula</h5>
                                    <p>Pelajari dasar-dasar Nodejs agar bisa membuat aplikasi berbasis Javascript seperti apikasi CLI, GUI, Game, Backend Web, IoT, dan sebagainya.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Sebelumnya</span>
                        </button>
                        <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Selanjutnya</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Komentar Terbaru</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center ">
                            <tbody>
                                <tr>
                                    <td class="w-30">
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div class="ms-4">
                                                <p class="text-xs font-weight-bold mb-0">Komentar:</p>
                                                <h6 class="text-sm mb-0">Ada yang tahu kenapa erorr?</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Postingan:</p>
                                            <h6 class="text-sm mb-0">Tutorial Nodejs untuk Pemula</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Tanggal Komentar:</p>
                                            <h6 class="text-sm mb-0">19 Nov 2022</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-30">
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div class="ms-4">
                                                <p class="text-xs font-weight-bold mb-0">Komentar:</p>
                                                <h6 class="text-sm mb-0">Aku tulis kok malah salah ya?</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Postingan:</p>
                                            <h6 class="text-sm mb-0">Tutorial Nodejs untuk Pemula</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Tanggal Komentar:</p>
                                            <h6 class="text-sm mb-0">17 Nov 2022</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-30">
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div class="ms-4">
                                                <p class="text-xs font-weight-bold mb-0">Komentar:</p>
                                                <h6 class="text-sm mb-0">Aku tulis kok malah salah ya?</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Postingan:</p>
                                            <h6 class="text-sm mb-0">Tutorial Nodejs untuk Pemula</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Tanggal Komentar:</p>
                                            <h6 class="text-sm mb-0">17 Nov 2022</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-30">
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div class="ms-4">
                                                <p class="text-xs font-weight-bold mb-0">Komentar:</p>
                                                <h6 class="text-sm mb-0">Aku tulis kok malah salah ya?</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Postingan:</p>
                                            <h6 class="text-sm mb-0">Tutorial Nodejs untuk Pemula</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-left">
                                            <p class="text-xs font-weight-bold mb-0">Tanggal Komentar:</p>
                                            <h6 class="text-sm mb-0">17 Nov 2022</h6>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Kategori Terbaru</h6>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-mobile-button text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Programming</h6>
                                        <span class="font-weight-bold text-xs">10 Postingan</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-tag text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">UI/UX</h6>
                                        <span class="font-weight-bold text-xs">15 Postingan</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-box-2 text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Machine Learning</h6>
                                        <span class="font-weight-bold text-xs">21 Postingan</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                        <i class="ni ni-satisfied text-white opacity-10"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark text-sm">Data Sience</h6>
                                        <span class="font-weight-bold text-xs">10 Postingan</span>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())

                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Sincan Maulana</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
@endsection
