<!DOCTYPE html>                                                             
<html>
<head>
	<link rel="icon" href="<?= base_url("assets/img/logo.png") ?>" type="image/png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>StaffApp</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="<?= base_url("assets/") ?>css/style.css" rel="stylesheet">
	<!-- icon font -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<style>
		.bg-breadcrumb {
			position: relative;
			overflow: hidden;
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url('assets/img/bank-bantul1.jpg'); ?>');
			background-position: center top;
			background-repeat: no-repeat;
			background-size: cover;
			padding: 120px 0 60px 0;
			transition: 0.5s;
		}
	</style>
</head>
<body>
	<div class="hero_area">
		<div class="bg-box">
			<!-- <img src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img,w_768/https://bankbantul.co.id/wp-content/uploads/2021/06/gedung_baru-768x443.jpeg" class="img-fluid w-100"> -->
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
                            <!-- Menampilkan avatar jika user sudah login, dan membuka modal profil -->
                            <img src="https://e7.pngegg.com/pngimages/527/663/png-clipart-logo-person-user-person-icon-rectangle-photography.png" alt="" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; height: 40px; border-radius: 50%;">
                            <div class="dropdown-menu dropdown-menu-end card-body" aria-labelledby="dropdownMenuButton1">
                                <h5 class="card-title"><?php echo $this->session->userdata('username'); ?></h5> 
                                <h5 class="card-title">(<?php echo $this->session->userdata('bagian'); ?>)</h5>
                                <p class="card-text"><?php echo $this->session->userdata('role'); ?></p>
                                <a href="<?= base_url('profile/edit'); ?>" class="btn btn-primary">Edit Profil</a>
                                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-secondary">Logout</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        <?php else: ?>
                            <!-- Menampilkan tombol login jika user belum login -->
                            <a href="<?= base_url("userlogin") ?>" class="btn rounded-pill d-inline-flex flex-shrink-0 py-2 px-4" style="background-color: #00d084; color: white;">Log In</a>
                        <?php endif; ?>
                    </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?= base_url("staffapp") ?>" class="nav-item nav-link">Home</a>
                        <a href="<?= base_url("todolist") ?>" class="nav-item nav-link">To Do List</a>
                        <a href="<?= base_url("tiketing") ?>" class="nav-item nav-link active">Tiketing</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                            <ul class="dropdown-menu m-0" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Program</a></li>
                            </ul>
                        </div>
                        <a href="" class="nav-item nav-link">Contact</a>
                    </div>
                    <!-- mode desktop -->
                    <div class="d-none d-lg-block">
                        <?php if ($this->session->userdata('username')): ?>
                            <!-- Menampilkan avatar jika user sudah login, dan membuka modal profil -->
                            <img src="https://e7.pngegg.com/pngimages/527/663/png-clipart-logo-person-user-person-icon-rectangle-photography.png" alt="" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; height: 40px; border-radius: 50%;">
                            <div class="dropdown-menu dropdown-menu-end card-body" aria-labelledby="dropdownMenuButton1">
                                <h5 class="card-title"><?php echo $this->session->userdata('username'); ?></h5> 
                                <h5 class="card-title">(<?php echo $this->session->userdata('bagian'); ?>)</h5>
                                <p class="card-text"><?php echo $this->session->userdata('role'); ?></p>
                                <a href="<?= base_url('profile/edit'); ?>" class="btn btn-primary">Edit Profil</a>
                                <a href="<?= base_url('auth/logout'); ?>" class="btn btn-secondary">Logout</a>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        <?php else: ?>
                            <!-- Menampilkan tombol login jika user belum login -->
                            <a href="<?= base_url("userlogin") ?>" class="btn rounded-pill d-inline-flex flex-shrink-0 py-2 px-4" style="background-color: #00d084; color: white;">Log In</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav> 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	
			<!-- program -->
			<!-- Header Start -->
			<div class="container-fluid bg-breadcrumb">
				<div class="container text-center py-5" style="max-width: 900px;">
					<h4 class="text-white display-4 mb-4 animate__animated" data-animation="animate__fadeInDown">Tiketing</h4>
					<ol class="breadcrumb d-flex justify-content-center mb-0 animate__animated" data-animation="animate__fadeInDown">
						<li class="breadcrumb-item"><a href="<?= base_url("staffapp") ?>">Home</a></li>
						<li class="breadcrumb-item active text-primary">Tiketing</li>
					</ol>    
				</div>
			</div>
		</div>
	</div>
	<div class="card border-0">
		<div class="card-header">
            <h5 class="card-title text-center">
                Daftar Tiket
            </h5>
            <h6 class="card-subtitle text-muted">
                <a type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahTiketModal">Ajukan Masalah</a>
            </h6>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-striped ov" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tipe Request</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Prioritas</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($tiket as $ticket): ?>
                    <tr>
                        <td><?= $ticket->id ?></td>
                        <td><?= $ticket->tipe_request ?></td>
                        <td><?= $ticket->detail ?></td>
                        <td><?= $ticket->prioritas ?></td>
                        <td><?= $ticket->status ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahTiketModal" tabindex="-1" aria-labelledby="tambahTiketLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahTiketLabel">Tambah Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form di dalam Modal -->
                    <form action="<?= site_url('tiketing/save') ?>" method="post">
                        <div class="mb-3">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $this->session->userdata('username'); ?>" required />
                        </div>

                        <div class="mb-3">
                            <label>Bagian:</label>
                            <input type="text" class="form-control" name="bagian" value="<?php echo $this->session->userdata('bagian'); ?>" required />
                        </div>

                        <div class="mb-3">
                            <label>Tipe Request:</label>
                            <input type="text" name="tipe_request" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Detail:</label>
                            <textarea name="detail" class="form-control" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Prioritas:</label>
                            <select name="prioritas" class="form-select">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
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
    <script src="<?= base_url("assets/") ?>js/script.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script type="text/javascript">
        DataTable('#myTable');
    </script>
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
</body>
</html>
