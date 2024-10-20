<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Layanan - Konselor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		/* Basic styles for service boxes */
		.service-box {
			border: 1px solid #ddd;
			padding: 20px;
			transition: transform 0.5s ease, opacity 0.5s ease;
			display: flex;
			flex-direction: column;
			justify-content: justify-center;
			min-height: 300px;
		}

		.service-box:hover {
			box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
		}

		.service-icon img {
			width: 80px;
			height: auto;
		}

		.service-title {
			font-size: 1.5rem;
			font-weight: 600;
			margin-top: 15px;
		}

		.service-description {
			font-size: 1rem;
			color: #666;
		}

		/* Responsive adjustments */
		@media (max-width: 768px) {

			/* Hide the grid view on small screens */
			.grid-view {
				display: none;
			}

			/* Carousel styles for mobile */
			.carousel-item {
				display: flex;
				justify-content: center;
			}

			.carousel-inner {
				padding: 20px;
			}
		}

		@media (min-width: 769px) {

			/* Hide carousel on larger screens */
			.carousel {
				display: none;
			}

			/* Grid view for larger screens */
			.grid-view {
				display: flex;
				justify-content: center;
				flex-wrap: wrap;
			}
		}

		/* Transition for the layout change between grid and carousel */
		.grid-view .service-box {
			transition: transform 0.5s ease, opacity 0.5s ease;
		}

		/* Add a scaling effect during transitions */
		.service-box {
			transform: scale(1);
			opacity: 1;
		}

		@media (max-width: 768px) {
			.service-box {
				transform: scale(1);
				opacity: 1;
			}
		}
	</style>
</head>

<body>
	<div class="container text-center mt-5">
		<h3 class="text-primary">LAYANAN</h3>
		<h1>PILIH LAYANAN</h1>
		<p>Beragam layanan psikologis yang dapat anda ikuti di KONSELOR</p>

		<!-- Carousel for mobile view -->
		<div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<!-- Service 1: Psikotes -->
				<a href="/service/psikotes">
					<div class="carousel-item active">
						<div class="service-box">
							<div class="service-icon">
								<img src="https://assets.nsd.co.id/images/logo/konselor/produk/4f884b02-eb6f-4f79-835d-4a6ce716094b.jpg" alt="Psikotes Icon">
							</div>
							<div class="service-title mt-3">PSIKOTES</div>
							<div class="service-description">
								Tes MMPI, Tes Inteligensi, Tes Minat Bakat, Tes Kejiwaan Online, Identifikasi Kepribadian dan Tes Kepemimpinan
							</div>
						</div>
					</div>
				</a>

				<!-- Service 2: Kesehatan Mental -->
				<div class="carousel-item">
					<div class="service-box">
						<div class="service-icon">
							<img src="https://assets.nsd.co.id/images/logo/konselor/produk/4f884b02-eb6f-4f79-835d-4a6ce716094b.jpg" alt="Kesehatan Mental Icon">
						</div>
						<div class="service-title mt-3">KESEHATAN MENTAL</div>
						<div class="service-description">
							Konseling Anak, Konseling Remaja, Konseling Keluarga, Life Support, Emosi, Kecemasan, Stress, Hubungan Sosial dan Seksualitas
						</div>
					</div>
				</div>

				<!-- Service 3: Bimbingan Karir -->
				<div class="carousel-item">
					<div class="service-box">
						<div class="service-icon">
							<img src="https://assets.nsd.co.id/images/logo/konselor/produk/4f884b02-eb6f-4f79-835d-4a6ce716094b.jpg" alt="Bimbingan Karir Icon">
						</div>
						<div class="service-title mt-3">BIMBINGAN KARIR</div>
						<div class="service-description">
							Pendidikan, Pekerjaan dan Pengembangan Diri
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

		<!-- Grid view for larger screens -->
		<div class="grid-view row mt-5">
			<!-- Service 1: Psikotes -->


			<div class="col-md-4 mb-4 d-flex align-items-stretch">
				<a href="<?php echo base_url('service/psikotes'); ?>">
					<div class="service-box">
						<div class="service-icon">
							<img src="https://assets.nsd.co.id/images/logo/konselor/produk/4f884b02-eb6f-4f79-835d-4a6ce716094b.jpg" alt="Psikotes Icon">
						</div>
						<div class="service-title mt-3">PSIKOTES</div>
						<div class="service-description">
							Tes MMPI, Tes Inteligensi, Tes Minat Bakat, Tes Kejiwaan Online, Identifikasi Kepribadian dan Tes Kepemimpinan
						</div>
					</div>
				</a>
			</div>

			<!-- Service 2: Kesehatan Mental -->
			<div class="col-md-4 mb-4 d-flex align-items-stretch">
				<a href="<?php echo base_url('service/psikotes'); ?>">
					<div class="service-box">
						<div class="service-icon">
							<img src="https://assets.nsd.co.id/images/logo/konselor/produk/4f884b02-eb6f-4f79-835d-4a6ce716094b.jpg" alt="Kesehatan Mental Icon">
						</div>
						<div class="service-title mt-3">KESEHATAN MENTAL</div>
						<div class="service-description">
							Konseling Anak, Konseling Remaja, Konseling Keluarga, Life Support, Emosi, Kecemasan, Stress, Hubungan Sosial dan Seksualitas
						</div>
					</div>
				</a>
			</div>

			<!-- Service 3: Bimbingan Karir -->
			<div class="col-md-4 mb-4 d-flex align-items-stretch">
				<div class="service-box">
					<div class="service-icon">
						<img src="https://assets.nsd.co.id/images/logo/konselor/produk/4f884b02-eb6f-4f79-835d-4a6ce716094b.jpg" alt="Bimbingan Karir Icon">
					</div>
					<div class="service-title mt-3">BIMBINGAN KARIR</div>
					<div class="service-description">
						Pendidikan, Pekerjaan dan Pengembangan Diri
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		$(document).ready(function() {
			if ($(window).width() <= 768) {
				$('.owl-carousel').owlCarousel({
					items: 1,
					loop: true,
					margin: 10,
					nav: true,
					dots: true,
					autoplay: true,
					autoplayTimeout: 3000,
					autoplayHoverPause: true
				});
			} else {
				$('.owl-carousel').removeClass('owl-carousel owl-theme');
				$('.item').unwrap();
			}
		});
	</script>

</body>

</html>
