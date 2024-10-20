<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Layanan Psikotes</title>
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

	<style>
		/* Custom styles for responsiveness */
		@media (max-width: 768px) {
			#sidebar {
				display: none;
			}

			#mobile-shortcut {
				display: block;
			}
		}

		@media (min-width: 769px) {
			#mobile-shortcut {
				display: none;
			}
		}

		/* Hide the button on desktop view */
		#sticky-icon {
			display: none;
		}

		.card-radius {
			border-radius: 20px;
			overflow: hidden;
		}

		.card-radius .card-img-top {
			border-radius: 20px 20px 0 0;
		}


		/* Display the icon only on mobile view */
		@media (max-width: 768px) {
			#sticky-icon {
				display: block;
				position: fixed;
				bottom: 20px;
				right: 20px;
				width: 50px;
				height: 50px;
				background-color: #007bff;
				border-radius: 50%;
				text-align: center;
				line-height: 50px;
				color: white;
				font-size: 24px;
				cursor: pointer;
				box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
				transition: transform 0.3s ease;
			}

			/* Scale up the icon when hovered */
			#sticky-icon:hover {
				transform: scale(1.1);
			}
		}

		/* Transition effect for modal */
		.modal.fade .modal-dialog {
			transition: transform 0.3s ease-out;
		}

		/* Content card body */
		.line-clamp {
			display: -webkit-box;
			-webkit-line-clamp: 2;
			-webkit-box-orient: vertical;
			overflow: hidden;
		}

		.position-relative {
			position: relative;
		}

		.card-img-top {
			height: 200px;
			object-fit: cover;
		}

		.discount-badge {
			position: absolute;
			top: 30px;
			left: 0px;
			background-color: red;
			padding: 5px 10px;
			font-size: 12px;
			font-weight: bold;
			color: white;
			border-radius: 0 25px 25px 0;
			width: 60px;
		}

		.new-badge {
			position: absolute;
			top: 60px;
			left: 0px;
			/* Adjust this value to position the "NEW" badge properly */
			background-color: yellow;
			padding: 5px 10px;
			font-size: 12px;
			font-weight: bold;
			color: black;
			border-radius: 0 25px 25px 0;
			width: 60px;
		}

		.card-overlay {
			position: absolute;
			bottom: 10px;
			left: 10px;
			background-color: rgba(0, 0, 0, 0.5);
			/* Transparent black background */
			color: white;
			padding: 5px 10px;
			border-radius: 10px;
		}
	</style>
</head>

<body>

	<div class="container-fluid mt-4">
		<!-- Title Section -->
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-9">
				<h3 class="mb-4 ">Pilih Layanan Psikotes</h3>
			</div>
		</div>

		<div class="row">
			<!-- Sidebar for larger screens -->
			<div class="col-md-3" id="sidebar">
				<h5 class="mb-3">Pilih Jenis Layanan</h5>
				<ul class="list-group">
					<li class="list-group-item">
						<input class="form-check-input me-1" type="radio" name="serviceOptions" id="all" value="all" checked>
						<label class="form-check-label" for="all">All</label>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						TES MMPI
						<i class="bi bi-chevron-right"></i>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						TES Intellegensi
						<i class="bi bi-chevron-right"></i>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						TES Minat Bakat
						<i class="bi bi-chevron-right"></i>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						TES Kejiwaan Online
						<i class="bi bi-chevron-right"></i>
					</li>
					<li class="list-group-item">
						<h6>Tes Kejiwaan Online</h6>
						<ul class="list-unstyled ps-3">
							<li>
								<input class="form-check-input me-1" type="radio" name="kejiwaanOptions" id="mmpi2" value="mmpi2">
								<label class="form-check-label" for="mmpi2">TES MMPI 2</label>
							</li>
							<li>
								<input class="form-check-input me-1" type="radio" name="kejiwaanOptions" id="mmpi3" value="mmpi3">
								<label class="form-check-label" for="mmpi3">TES MMPI 3</label>
							</li>
							<li>
								<input class="form-check-input me-1" type="radio" name="kejiwaanOptions" id="mmpi4" value="mmpi4">
								<label class="form-check-label" for="mmpi4">TES MMPI 4</label>
							</li>
						</ul>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Identifikasi Kepribadian
						<i class="bi bi-chevron-right"></i>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Identifikasi Kepemimpinan
						<i class="bi bi-chevron-right"></i>
					</li>
				</ul>
			</div>

			<!-- Main content -->
			<div class="col-md-9">
				<div class="row">

					<!-- Loop through services (dummy content) -->
					<?php for ($i = 0; $i < 8; $i++): ?>
						<div class="col-lg-3 col-md-4 mb-4">
							<div class="card card-radius">
								<div class="position-relative">
									<img src="https://via.placeholder.com/300x200" class="card-img-top " alt="Layanan Image">
									<!-- Discount Badge -->
									<span class="badge bg-danger discount-badge">5% OFF</span>
									<!-- New Badge -->
									<span class="badge bg-warning new-badge">NEW!</span>
								</div>
								<div class="card-body">
									<h5 class="card-title mt-2">Tes MMPI-<?= $i + 1 ?></h5>
									<p class="card-text line-clamp" style="max-height: 250px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									<div class="row justify-content-center px-5 ">
										<a href="/" class="btn-detail rounded-pill">
											<div class="p-1">
												Lihat Detail
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Sticky icon for mobile view -->
	<div id="sticky-icon" class="sticky-icon" onclick="openModal()">
		<i class="bi bi-list"></i> <!-- Bootstrap icon (list icon) -->
	</div>

	<!-- Modal for mobile view -->
	<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="serviceModalLabel">Pilih Jenis Layanan</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul class="list-group">
						<li class="list-group-item">All</li>
						<li class="list-group-item">TES MMPI</li>
						<li class="list-group-item">TES Intellegensi</li>
						<li class="list-group-item">TES Minat Bakat</li>
						<li class="list-group-item">TES Kejiwaan Online</li>
						<li class="list-group-item">Identifikasi Kepribadian</li>
						<li class="list-group-item">Identifikasi Kepemimpinan</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap 5 and JS dependencies -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		function openModal() {
			var myModal = new bootstrap.Modal(document.getElementById('serviceModal'));
			myModal.show();
		}
	</script>

</body>

</html>
