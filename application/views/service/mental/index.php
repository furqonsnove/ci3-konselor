<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Layanan Mental</title>
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

	<style>
		body {
			background-color: #F4F4F4;
		}

		.container-fluid {
			padding: 20px 30px;
		}

		.position-relative {
			position: relative;
		}

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
			/* Ensure the card stretches to its container height */
		}

		.card-body {
			flex-grow: 1;
			/* Allow the body to expand to fill the available space */
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}

		.line-clamp {
			display: -webkit-box;
			-webkit-line-clamp: 2;
			/* Max number of lines for the description */
			-webkit-box-orient: vertical;
			overflow: hidden;
		}

		.card-title {
			-webkit-line-clamp: 1;
			/* Max 1 line for title */
			display: -webkit-box;
			-webkit-box-orient: vertical;
			overflow: hidden;
			text-overflow: ellipsis;
		}

		.card-text {
			flex-grow: 1;
			/* Let the text take up space */
			overflow: hidden;
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
			padding: 6px 20px;
			/* Adjust padding for a comfortable button size */
			border-radius: 25px;
			font-size: 16px;
			font-weight: bold;
			display: inline-block;
			/* Allow setting a width */
			width: 100%;
			/* Control button width to fit well within the card */
			text-align: center;
			transition: all 0.3s ease;
			margin: 0 auto;
			/* Center the button horizontally */
		}

		.btn-detail:hover {
			background: linear-gradient(180deg, #FFB800 0%, #EDAB00 100%);
			color: black;
			text-decoration: none;
		}


		.accordion-button {
			font-size: 16px;
			text-align: left;
		}

		.label-accordion {
			padding-left: 5px;
		}

		.radio-service {
			float: right;
		}

		#sticky-icon {
			display: none;
		}

		.box-sidebar {
			border-radius: 15px;
			border: 1px solid #ddd;
			padding: 20px;
			background-color: white;
			transition: transform 0.6s ease;
			position: sticky;
			top: 10px;
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

		/* Display the icon only on mobile view */
		@media (max-width: 768px) and (max-width: 991px) {
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

			#sticky-icon:hover {
				transform: scale(1.1);
			}

			#sidebar {
				display: none;
			}

			#mobile-shortcut {
				display: block;
			}

			.col-md-9 {
				width: 100%;
				flex: 0 0 100%;
				max-width: 100%;
			}

			h3 {
				font-size: 26px;
			}

			.accordion-button {
				font-size: 15px;
			}

			.card-title {
				font-size: 17px;
			}

			.card-text {
				font-size: 12px;
				overflow: hidden;
			}

			.btn-detail {
				font-size: 13px;
			}
		}

		@media (min-width: 769px) {
			#mobile-shortcut {
				display: none;
			}
		}

		/* Transition effect for modal */
		.modal.fade .modal-dialog {
			transition: transform 0.3s ease-out;
		}
	</style>
</head>

<body>

	<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-9">
				<h3 class="mb-4">Pilih Layanan Kesehatan Mental</h3>
			</div>
		</div>
		<div class="row">
			<!-- Sidebar Accordion -->
			<!-- <div class="col-lg-1">
			</div> -->
			<div class="col-lg-3 col-md-3 col-sm-0" id="sidebar">
				<div class="box-sidebar">
					<span>
						<p class="mb-3 fw-bold">Pilih Jenis Layanan</p>
					</span>

					<div class="px-3">
						<label class="form-check-label" style="padding-left: 5px;" for="all">All</label>
						<input class="form-check-input me-1 radio-service" type="radio" name="service_options" id="all" value="all">
					</div>
					<div class="accordion-flush" id="accordionLayanan">
						<?php foreach ($accordionItems as $index => $item) : ?>
							<div class="accordion-item">
								<h2 class="accordion-header" id="<?= $item['id']; ?>">
									<button class="accordion-button <?= !$item['expanded'] ? 'collapsed' : ''; ?>"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#<?= $item['target']; ?>"
										aria-expanded="<?= $item['expanded'] ? 'true' : 'false'; ?>"
										aria-controls="<?= $item['target']; ?>">
										<?= $item['title']; ?>
									</button>
								</h2>
								<div id="<?= $item['target']; ?>"
									class="accordion-collapse collapse <?= $item['expanded'] ? 'show' : ''; ?>"
									aria-labelledby="<?= $item['id']; ?>"
									data-bs-parent="#accordionLayanan">
									<div class="accordion-body justify-content-end">
										<?php if (is_array($item['content'])): ?>
											<ul class="list-unstyled">
												<?php foreach ($item['content'] as $content): ?>
													<li>
														<label class="form-check-label label-accordion" for="<?= $content['id']; ?>">
															<?= $content['label']; ?>
														</label>
														<input class="form-check-input me-1 radio-service"
															type="radio"
															name="service_options"
															id="<?= $content['id']; ?>"
															value="<?= $content['value']; ?>">
													</li>
												<?php endforeach; ?>
											</ul>
										<?php else: ?>
											<?= $item['content']; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<!-- Main content -->
			<div class="col-md-9">
				<div class="row">
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
										<a href="<?= base_url('service/psikotes/detail'); ?>" class="btn-detail rounded-pill">Lihat Detail</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Sticky icon for mobile view -->
	<div id="sticky-icon" class="sticky-icon" onclick="openModal()">
		<i class="bi bi-list"></i>
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
					<div class="box-sidebar">

						<label class="form-check-label" style="padding-left: 20px;" for="all">All</label>
						<input class="form-check-input me-1 radio-service pr-2" type="radio" name="service_options" id="all" value="all">
						<div class="accordion-flush" id="accordionLayanan">
							<?php foreach ($accordionItems as $index => $item) : ?>
								<div class="accordion-item">
									<h2 class="accordion-header" id="<?= $item['id']; ?>">
										<button class="accordion-button <?= !$item['expanded'] ? 'collapsed' : ''; ?>"
											type="button"
											data-bs-toggle="collapse"
											data-bs-target="#<?= $item['target']; ?>"
											aria-expanded="<?= $item['expanded'] ? 'true' : 'false'; ?>"
											aria-controls="<?= $item['target']; ?>">
											<?= $item['title']; ?>
										</button>
									</h2>
									<div id="<?= $item['target']; ?>"
										class="accordion-collapse collapse <?= $item['expanded'] ? 'show' : ''; ?>"
										aria-labelledby="<?= $item['id']; ?>"
										data-bs-parent="#accordionLayanan">
										<div class="accordion-body justify-content-end">
											<?php if (is_array($item['content'])): ?>
												<ul class="list-unstyled">
													<?php foreach ($item['content'] as $content): ?>
														<li>
															<label class="form-check-label label-accordion" for="<?= $content['id']; ?>">
																<?= $content['label']; ?>
															</label>
															<input class="form-check-input me-1 radio-service"
																type="radio"
																name="service_options"
																id="<?= $content['id']; ?>"
																value="<?= $content['value']; ?>">
														</li>
													<?php endforeach; ?>
												</ul>
											<?php else: ?>
												<?= $item['content']; ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
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
		document.addEventListener('DOMContentLoaded', function() {
			const cards = document.querySelectorAll('.card-body');

			cards.forEach(card => {
				const title = card.querySelector('.card-title');
				const text = card.querySelector('.card-text');

				const titleHeight = title.scrollHeight;
				const textHeight = text.scrollHeight;
				const totalHeight = titleHeight + textHeight;

				const maxTotalHeight = parseInt(getComputedStyle(title).lineHeight) * 3;

				if (totalHeight > maxTotalHeight) {
					text.style.webkitLineClamp = '1';
				}
			});
		});
	</script>

</body>

</html>
