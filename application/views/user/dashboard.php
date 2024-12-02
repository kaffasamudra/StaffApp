<!DOCTYPE html>																
<html>
<head>
    <link rel="icon" href="<?= base_url("assets/img/logo.png") ?>" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StaffApp</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="<?= base_url("assets/") ?>css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- icon font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="hero_area">
        <div class="bg-box image-overlay">
            <img src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img,w_768/https://bankbantul.co.id/wp-content/uploads/2021/06/gedung_baru-768x443.jpeg" class="img-fluid w-100">
            <div class="overlay"></div>
        </div>
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0 pt-2">
                    <h1 class="heading"><img src="<?= base_url("assets/img/d199db6c-03df-41a8-b1f8-d3c5bb0263a9.png") ?>">StaffApp</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                    <!-- mode mobile -->
                    <div class="d-block d-lg-none my-2">
                        <?php if ($this->session->userdata('username')): ?>
                            <?php foreach($users as $image): ?>
                            <img src="<?= base_url('uploads/'.$image->avatar) ?>" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; height: 40px; border-radius: 50%;">
                            <div class="dropdown-menu dropdown-menu-end card-body" aria-labelledby="dropdownMenuButton1">
                                <h5 class="card-title"><?php echo $this->session->userdata('username'); ?></h5> 
                                <h5 class="card-title">(<?php echo $this->session->userdata('bagian'); ?>)</h5>
                                <p class="card-text"><?php echo $this->session->userdata('role'); ?></p>
                                <a href="<?= base_url('profile/edit'); ?>" class="btn btn-primary">Edit Profil</a>
                                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-secondary">Logout</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Menampilkan tombol login jika user belum login -->
                            <a href="<?= base_url("userlogin") ?>" class="btn rounded-pill d-inline-flex flex-shrink-0 py-2 px-4" style="background-color: #00d084; color: white;">Log In</a>
                        <?php endif; ?>
                    </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= base_url("dashboard") ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?= base_url("todolist") ?>" class="nav-item nav-link">To Do List</a>
                        <a href="<?= base_url("tiketing") ?>" class="nav-item nav-link">Tiketing</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                            <ul class="dropdown-menu m-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Program</a></li>
                            </ul>
                        </div>
                        <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#contactModal">Contact</a>


                    </div>
                    <!-- mode desktop -->
                    <div class="d-none d-lg-block">
                        <?php if ($this->session->userdata('username')): ?>
                            <?php foreach($users as $image): ?>
                            <img src="<?= base_url('uploads/'.$image->avatar) ?>" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; height: 40px; border-radius: 50%;">
                            <div class="dropdown-menu dropdown-menu-end card-body" aria-labelledby="dropdownMenuButton1">
                                <img src="<?= base_url('uploads/'.$image->avatar) ?>" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; height: 40px; border-radius: 50%;">
                                <h5 class="card-title"><?php echo $this->session->userdata('username'); ?></h5> 
                                <h5 class="card-title">(<?php echo $this->session->userdata('bagian'); ?>)</h5>
                                <p class="card-text"><?php echo $this->session->userdata('role'); ?></p>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editpp">Edit Profil</a>
                                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-secondary">Logout</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Menampilkan tombol login jika user belum login -->
                            <a href="<?= base_url("userlogin") ?>" class="btn rounded-pill d-inline-flex flex-shrink-0 py-2 px-4" style="background-color: #00d084; color: white;">Log In</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            <!-- program -->
            <div class="container pt-5">
                <section class="slider_section">
                    <div id="customCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="transition: transform 1.5s ease-in-out;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="detail-box">
                                                <h1 class="animate__animated" data-animation="animate__slideInRight" style="animation-duration: 1s;">To Do List</h1>
                                                <p class="animate__animated" data-animation="animate__slideInRight" style="animation-duration: 1.2s;">
                                                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde.
                                                </p>
                                                <div class="animate__animated" data-animation="animate__slideInRight" style="animation-duration: 1.4s;">
                                                    <a href="<?= base_url("todolist") ?>">Buka</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item"  style="transition: transform 1.5s ease-in-out;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="detail-box">
                                                <h1>Tiketing</h1>
                                                <p>
                                                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde.
                                                </p>
                                                <div>
                                                    <a href="<?= base_url("tiketing") ?>">Buka</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="transition: transform 1.5s ease-in-out;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="detail-box">
                                                <h1>Coming soon</h1>
                                                <p>
                                                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde.
                                                </p>
                                                <div>
                                                    <a href="#">Buka</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="container pt-0">
                            <style>
                                .carousel-indicators {
                                    list-style: none; /* Menghilangkan marker */
                                    padding-left: 0;  /* Menghapus padding default */
                                }
                            </style>
                            <ol class="carousel-indicators animate__animated" data-animation="animate__fadeInRight" style="animation-duration: 1.6s;">
                                <li data-bs-target="#customCarousel1" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#customCarousel1" data-bs-slide-to="1"></li>
                                <li data-bs-target="#customCarousel1" data-bs-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- marque -->
    <div class="container my-5">
        <div class="marquee-container">
            <span class="marquee-text">PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL   PT BPR BANK BANTUL</span>
        </div>
    </div>
    <!-- Ulangi elemen dengan kelas animate__animated animate__slideInLeft atau animate__slideInRight sesuai kebutuhan -->
    <!-- menu unggulan -->
    <div class="container-fluid unggulan bg-light overflow-hidden py-5">
        <div class="container  py-5">
            <div class="text-center mx-auto pb-5 animate__animated" data-animation="animate__slideInDown" style="max-width: 800px;">
                <h4 class="text-uppercase text-info">Home</h4>
                <h1 class="display-3 text-capitalize mb-3">PT BPR Bank Bantul</h1>
            </div>
            <div class="row gx-0 gy-4 align-items-center">
                <div class="col-lg-6 col-xl-4">
                    <div class="unggulan-item rounded p-4 mb-4 animate__animated" data-animation="animate__slideInLeft" style="animation-duration: 2s;">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="unggulan-content text-end slide-in-left ">
                                        <a href="" class="h4 d-inline-block md-3">Tentang Bank Bantul</a>
                                        <p class="mb-0 small">PT BPR Bank Bantul (Perseroda) adalah bank daerah yang melayani masyarakat Bantul dengan produk perbankan dan kredit untuk mendukung UMKM dan pertumbuhan ekonomi lokal.</p>
                                    </div>
                                    <div class="ps-4">
                                        <img src="<?= base_url("assets/img/d199db6c-03df-41a8-b1f8-d3c5bb0263a9.png") ?>" alt="Icon" class="unggulan-btn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="unggulan-item rounded p-4 mb-4 animate__animated" data-animation="animate__slideInLeft" style="animation-duration: 1.5s;">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="unggulan-content text-end">
                                        <a href="" class="h4 d-inline-block mb-3">Penghargaan</a>
                                        <p class="mb-0 small">Bank Bantul telah menerima berbagai penghargaan atas kontribusinya dalam mendukung perekonomian daerah serta keuangan inklusif di Bantul.</p>
                                    </div>
                                    <div class="ps-4">
                                        <div class="unggulan-btn"><i class="bi bi-award-fill text-white fs-1"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="unggulan-item rounded p-4 mb-4 animate__animated" data-animation="animate__slideInLeft" style="animation-duration: 1s;">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="unggulan-content text-end">
                                        <a href="#" class="h4 d-inline-block mb-3">Acara Besar</a>
                                        <p class="mb-0 small">Bank Bantul secara rutin mengadakan acara undian berhadiah untuk nasabah setia, seperti undian Tabungan Tamansari, dengan hadiah besar berupa mobil dan sepeda motor. Acara ini bertujuan untuk meningkatkan loyalitas nasabah.</p>
                                    </div>
                                    <div>
                                        <div class="unggulan-btn"><i class="bi bi-calendar-check text-white fs-1"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
				    <div class="bg-transparent d-flex justify-content-center animate__animated" data-animation="animate__slideInUp">
					    <img src="<?= base_url("assets/img/") ?>bank.png" class="img-fluid w-100 rounded" alt="">
				    </div>
				</div>  
                <div class="col-lg-6 col-xl-4">
                    <div class="unggulan-item rounded p-4 mb-4 animate__animated" data-animation="animate__fadeInRight" style="animation-duration: 2s;">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="unggulan-btn"><i class="bi bi-heart-fill text-white fs-1"></i></div>
                                    </div>
                                    <div class="unggulan-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Program Sosial</a>
                                        <p class="mb-0 small">Sebagai bentuk kepedulian terhadap masyarakat, Bank Bantul juga aktif dalam program sosial dan edukasi keuangan kepada masyarakat, terutama kalangan pelajar dan mahasiswa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="unggulan-item rounded p-4 mb-4 animate__animated" data-animation="animate__fadeInRight" style="animation-duration: 1.5s;">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="unggulan-btn"><i class="bi bi-phone-fill text-white fs-1"></i></div>
                                    </div>
                                    <div class="unggulan-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Inovasi Digital</a>
                                        <p class="mb-0 small">Bank Bantul selalu berusaha untuk berinovasi dengan menghadirkan layanan digital terbaru, seperti mobile banking dan internet banking untuk kemudahan nasabah.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="unggulan-item rounded p-4 mb-4 animate__animated" data-animation="animate__fadeInRight" style="animation-duration: 1s;">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="unggulan-btn"><i class="bi bi-trophy-fill text-white fs-1"></i></div>
                                    </div>
                                    <div class="unggulan-content">
                                        <a href="#" class="h4 d-inline-block mb-3">Kegiatan Olahraga</a>
                                        <p class="mb-0 small">Bank Bantul juga aktif dalam mendukung kegiatan olahraga, seperti sponsoring turnamen sepakbola dan kegiatan lainnya untuk mempromosikan gaya hidup sehat di masyarakat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Contact</h1>
                    <p>Hubungi kami melalui form berikut</p>
                    <form action="<?php site_url('Dashboard/contact'); ?>" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="your name" value="<?php echo $this->session->userdata('username'); ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="your email address" required />
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label><br>
                            <textarea name="message" class="form-control" cols="30" rows="5" placeholder="write your message" required></textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary"  value="Kirim">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editpp" tabindex="-1" role="dialog" aria-labelledby="editppLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editppLabel">Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('user/dashboard/update/' . $image->id) ?>" method="post" enctype="multipart/form-data">
                        <h1>Edit Avatar</h1>
                        <div class="form-group">
                            <p>Gambar Sekarang:</p>
                            <img src="<?= base_url('uploads/' . $image->avatar) ?>" width="200">
                        </div>
                        <div class="form-group">   
                            <label for="avatar">Ganti Gambar:</label>
                            <input type="file" name="avatar" class="form-control" cols="30" row="5" id="avatar" placeholder="chose file" required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer mobile -->
    <footer class="footer_section d-block d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            StaffApp
                        </a>
                        <p>
                            Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde.
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Working Hours
                    </h4>
                    <p>
                        Monday-Friday
                    </p>
                    <p>
                        07.30 Am -16.30 Pm
                    </p>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href=""></a><br><br>
                    &copy; <span id="displayYear"></span> Distributed By
                    <a href="" target="_blank"></a>
                </p>
            </div>
        </div>
    </footer>

    <!-- footer desktop -->
    <footer class="footer_section d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            StaffApp
                        </a>
                        <p>
                            Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde.
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Working Hours
                    </h4>
                    <p>
                        Monday-Friday
                    </p>
                    <p>
                        07.30 Am -16.30 Pm
                    </p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/"></a><br><br>
                    &copy; <span id="displayYear"></span> Distributed By
                    <a href="https://themewagon.com/" target="_blank"></a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-success btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?= base_url("assets/") ?>js/script.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Menambahkan atau menghapus class "scrolled" berdasarkan posisi scroll
        $(window).scroll(function () {
            var navbar = $('.navbar');
            if ($(window).scrollTop() > 50) {
                navbar.addClass('scrolled');
            } else {
                navbar.removeClass('scrolled');
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Buat observer untuk memantau elemen saat masuk ke viewport
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Tambahkan kelas animasi saat elemen terlihat
                        const animation = entry.target.getAttribute("data-animation");
                        entry.target.classList.add(animation);
                    }
                });
            }, {
                threshold: 0.1 // Hanya jalankan ketika 10% elemen terlihat
            });

            // Ambil semua elemen yang akan dianimasikan
            const elementsToAnimate = document.querySelectorAll(".animate__animated");

            elementsToAnimate.forEach((el) => {
                observer.observe(el); // Pantau setiap elemen
            });
        });
    </script>
    <script>
        function deleteConfirm(event){
            Swal.fire({
                title: 'Delete Confirmation!',
                text: 'Are you sure to delete the item?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'No',
                confirmButtonText: 'Yes Delete',
                confirmButtonColor: 'red'
            }).then(dialog => {
                if(dialog.isConfirmed){
                    window.location.assign(event.dataset.deleteUrl);
                }
            });
        }
    </script>

    <?php if($this->session->flashdata('message')): ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '<?= $this->session->flashdata('message') ?>'
            })
        </script>
    <?php endif; ?>
</body>
</html>
