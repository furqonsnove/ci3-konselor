<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Profil Dokter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: #ECEFF1;
			font-family: 'Poppins', sans-serif;
		}

		.container {
			max-width: 30%;
			margin: auto;
		}

		.card {
			border-radius: 10px;
			overflow: hidden;
		}

		.profile-header {
			position: relative;
		}

		.profile-header img {
			width: 100%;
			height: 250px;
			object-fit: cover;
		}

		.profile-info {
			position: absolute;
			top: 20px;
			left: 20px;
			color: white;
		}

		.profile-name {
			font-family: "Lato", sans-serif;
			font-size: 30px;
			font-weight: 700;
			text-align: left;
		}

		.profile-jobdesc {
			font-family: Lato;
			font-size: 16px;
			font-weight: 600;
			line-height: 13.21px;
			text-align: left;
			color: #666666;

		}

		.status-online {
			position: absolute;
			top: 20px;
			right: 20px;
			background: #28a745;
			color: white;
			padding: 5px 15px;
			border-radius: 20px;
			font-size: 12px;
		}

		.share-button {
			position: absolute;
			top: 200px;
			right: 20px;
			background: rgba(0, 0, 0, 0.5);
			color: white;
			padding: 5px 8px;
			border-radius: 50%;
			cursor: pointer;
		}

		.profile-body {
			padding: 20px;
		}

		.price {
			color: red;
			text-decoration: line-through;
		}

		.price-discount {
			color: green;
			font-size: 24px;
			font-weight: bold;
		}

		.badge-custom {
			display: inline-block;
			padding: 5px 10px;
			border-radius: 10px;
			font-size: 14px;
		}

		.badge-yellow {
			background-color: #FFC107;
			color: black;
		}

		.badge-pink {
			background-color: #FFCDD2;
			color: black;
		}

		@media (max-width: 768px) {
			.profile-body {
				padding: 10px;
			}

			.profile-header img {
				height: 150px;
			}

			.share-button {
				top: 120px;
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="card">
			<div class="profile-header">
				<img src="https://via.placeholder.com/900x300" alt="Profile Picture">
				<div class="profile-info">
					<span class="badge bg-dark">Psikolog</span>
				</div>
				<div class="status-online">Online</div>
				<div class="share-button">
					<i class="bi bi-share"></i>
				</div>
			</div>

			<div class="profile-body">
				<p> <span class="profile-name">Dr. Andi Pratama, M.Psi.</span></p>
				<p> <span class="profile-jobdesc">Psikolog Klinis</span></p>
				<div>
					<span class="badge-custom badge-yellow">
						<i class="bi bi-briefcase-fill"></i> 16 Tahun
					</span>
					<span class="badge-custom badge-pink">
						<i class="bi bi-star-fill"></i> 90%
					</span>
				</div>
				<p class="price">Rp250.000</p>
				<p class="price-discount">Rp115.000</p>
			</div>
		</div>
	</div>
</body>

</html>
