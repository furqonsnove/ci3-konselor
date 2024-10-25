<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Konseling Game</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<style>
		body {
			background: #f4f4f4;
			font-family: 'Lato', sans-serif;
		}

		.banner-section {
			position: relative;
			background-image: url('<?= base_url('public/assets/images/mental/konseling-anak.svg'); ?>');
			background-size: cover;
			background-position: center center;
			min-height: 60vh;
			display: flex;
			justify-content: center;
			align-items: flex-start;
			padding: 20px 20px;
		}

		.banner-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.6);
			z-index: 1;
		}

		.container-custom {
			width: 90%;
			max-width: 1600px;
			z-index: 2;
			display: flex;
			flex-direction: column;
			padding: 20px;
			min-height: 50vh;
			justify-content: space-between;
			gap: 30px;
		}

		.header-section {
			display: flex;
			justify-content: space-between;
			align-items: center;
			width: 100%;
			margin-bottom: 20px;
		}

		.content-section {
			display: flex;
			justify-content: space-between;
			align-items: flex-start;
			gap: 20px;
		}


		.btn-back {
			background: linear-gradient(90deg, #D23E80 0%, #97357B 100%);
			color: white;
			border: none;
			padding: 8px 24px;
			border-radius: 50px;
			font-weight: 600;
		}

		.small-image {
			width: auto;
			height: auto;
			border-radius: 15px;
			border: 1.5px solid #FFFFFF;
			overflow: hidden;
		}

		.small-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}

		.text-section {
			flex-grow: 1;
		}

		.title {
			font-size: 49px;
			font-weight: 700;
			line-height: 59px;
			text-align: left;
			color: white;
			margin-bottom: 20px;
		}

		.description {
			font-size: 18px;
			font-weight: 400;
			line-height: 30px;
			text-align: left;
			color: white;
		}

		.badge-custom {
			background: linear-gradient(180deg, #FFB800 0%, #E7A700 100%);
			color: black;
			padding: 8px 24px;
			border-radius: 50px;
			font-weight: bold;
		}

		/* List psikolog dan konselor style */

		.card-radius .card-img-top {
			border-radius: 15px 15px 0 0;
		}

		.card-radius {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			border-radius: 15px;
			overflow: hidden;
			height: 100%;
		}

		.card-body {
			flex-grow: 1;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}

		.d-grid {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: auto;
			width: 100%;
		}

		.discount-badge {
			position: absolute;
			top: 25px;
			left: 0px;
			gap: 0px;
			background-color: red;
			padding: 5px 10px;
			font-size: 12px;
			font-weight: bold;
			color: white;
			border-radius: 0px 12.39px 12.39px 0px;
			width: Fixed (42.71px)px;
		}

		.new-badge {
			position: absolute;
			top: 60px;
			left: 0px;
			background-color: yellow;
			padding: 5px 10px;
			font-size: 12px;
			font-weight: bold;
			color: black;
			border-radius: 0 25px 25px 0;
			width: 60px;
		}

		.btn-detail {
			background: linear-gradient(180deg, #006764 0%, #015C59 100%);
			color: white;
			text-decoration: none;
			padding: 6px 25px;
			border-radius: 25px;
			font-size: 14px;
			font-weight: 600;
			display: inline-block;
			width: 100%;
			max-width: 200px;
			text-align: center;
			transition: all 0.3s ease;
			margin: 0 auto;
		}

		.btn-detail:hover {
			background: linear-gradient(180deg, #FFB800 0%, #EDAB00 100%);
			color: black;
			text-decoration: none;
		}

		.custom-label {
			position: absolute;
			bottom: 12px;
			left: 15px;
			background: #00000080;
			color: #fff;
			border-radius: 20px;
			padding: 5px 15px 5px 15px;
			font-size: 12px;
			font-weight: 500;
			opacity: 1;
			z-index: 2;
		}

		@media (max-width: 768px) {
			.banner-section {
				height: auto;
				padding: 40px 0;
			}

			.container-custom {
				width: 100%;
			}

			.title {
				font-size: 32px;
				line-height: 40px;
				text-align: center;
			}

			.description {
				font-size: 16px;
				line-height: 24px;
				text-align: center;
			}

			.btn-back,
			.badge-custom {
				padding: 10px 20px;
				font-size: 14px;
			}

			.small-image {
				width: 120px;
				height: 120px;
				margin: 0 auto;
			}

			.header-section,
			.content-section {
				flex-direction: column;
				align-items: center;
			}

			.text-section {
				text-align: center;
				margin-top: 20px;
			}
		}
	</style>
</head>

<body>

	<div class="banner-section">
		<div class="banner-overlay"></div>
		<div class="container-custom">
			<!-- Top Section -->
			<div class="header-section">
				<button class="btn-back">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
					</svg>
					Kembali
				</button>
				<span class="badge-custom">Konseling Anak</span>
			</div>

			<!-- Bottom Section -->
			<div class="content-section">
				<div class="small-image">
					<img src="<?= base_url('public/assets/images/mental/konseling-anak.svg'); ?>" alt="Konseling Image">
				</div>
				<div class="text-section">
					<h1 class="title">Ketergantungan Game</h1>
					<p class="description">
						Kecanduan game pada anak semakin menjadi perhatian serius di era digital ini. Bermain game memang
						bisa menjadi hiburan yang menyenangkan dan bermanfaat untuk mengasah keterampilan tertentu, namun
						ketika aktivitas ini tak terkendali, dampaknya bisa sangat merugikan.
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- List Psikolog dan Konselor -->
	<div class="container mt-5">
		<h2 class="text-center mb-4">Pilih Psikolog & Konselor</h2>
		<div class="row justify-content-center">
			<?php foreach ($services as $service): ?>
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="card card-radius">
						<div class="position-relative">
							<img src="<?= $service['img_src']; ?>" class="card-img-top" alt="Layanan Image">
							<div class="custom-label"><?= $service['label']; ?></div>
						</div>
						<div class="card-body">
							<h5 class="card-title mt-2"><?= $service['title']; ?></h5>
							<p class="card-text line-clamp"><?= $service['description']; ?></p>
							<div class="d-grid">
								<a href="<?= base_url('user/detail'); ?>" class="btn-detail rounded-pill">Lihat Detail</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>


	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
