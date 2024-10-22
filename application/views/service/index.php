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
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: #F4F4F4;
		}

		.text-custom-header {
			font-family: 'Lato', serif;
			font-weight: 500;
			text-align: center;
			line-height: 1.2;
			letter-spacing: 2.5px;
			text-align: center;
		}

		.text-custom-subheader {
			font-family: 'Playfair Display';
			font-weight: 700;
			text-align: center;
			line-height: 1.2;
		}

		.text-custom-detail {
			font-family: 'Playfair Display';
			font-weight: 400;
			text-align: center;
			line-height: 1;
			color: #777777;
		}

		.service-box {
			border: 1px solid #ddd;
			padding: 20px;
			transition: transform 0.5s ease, opacity 0.5s ease;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			min-height: 240px;
			height: 100%;
			background-color: white;
		}

		.grid-view .col-md-4 {
			display: flex;
			flex-direction: column;
		}

		.service-box:hover {
			box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
		}

		.service-icon img {
			width: 80px;
			height: 80px;
			object-fit: contain;
			margin: 0 auto;
		}

		.service-content {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}

		.service-title {
			font-size: 1.5rem;
			font-weight: 600;
			margin-top: 15px;
			margin-bottom: 5px;
			color: black;
		}

		.service-description {
			font-size: 1rem;
			color: #666;
			font-family: 'Lato';
			line-height: 1.4;
			text-align: center;
		}

		/* Responsive adjustments */
		@media (max-width: 576px) {
			.text-custom-header {
				font-size: 14px;
			}

			.text-custom-subheader {
				font-size: 24px;
			}

			.text-custom-detail {
				font-size: 16px;
			}

			.service-title {
				font-size: 1.2rem;
			}

			.service-description {
				font-size: 0.9rem;
			}
		}

		@media (min-width: 577px) and (max-width: 768px) {
			.text-custom-header {
				font-size: 16px;
			}

			.text-custom-subheader {
				font-size: 28px;
			}

			.text-custom-detail {
				font-size: 18px;
			}

			.service-title {
				font-size: 1.3rem;
			}

			.service-description {
				font-size: 0.95rem;
			}
		}

		@media (min-width: 769px) {
			.text-custom-header {
				font-size: 18px;
			}

			.text-custom-subheader {
				font-size: 35px;
			}

			.text-custom-detail {
				font-size: 19px;
			}

			.service-title {
				font-size: 1.5rem;
			}

			.service-description {
				font-size: 1rem;
			}
		}
	</style>
</head>

<body>
    <div class="container text-center mt-5">
        <span class="text-custom-header">LAYANAN</span>
        <div class="text-custom-subheader">
            <p>PILIH LAYANAN</p>
        </div>
        <div class="text-custom-detail">
            <p>Beragam layanan psikologis yang dapat anda ikuti di KONSELOR</p>
        </div>

        <!-- Carousel for small screens -->
        <div id="serviceCarousel" class="carousel slide d-md-none mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($services as $index => $service): ?>
                    <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                        <a href="<?= $service['link']; ?>" class="service-box text-decoration-none">
                            <div class="service-icon">
                                <img src="<?= $service['img_src']; ?>" alt="<?= $service['title']; ?> Icon">
                            </div>
                            <div class="service-content">
                                <div class="service-title"><?= $service['title']; ?></div>
                                <div class="service-description">
                                    <?= $service['description']; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark text-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark text-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Grid view for large screens -->
        <div class="grid-view row mt-5 g-3 d-none d-md-flex">
            <?php foreach ($services as $service): ?>
                <div class="col-sm-12 col-md-4 mb-4 d-flex align-items-stretch">
                    <a href="<?= $service['link']; ?>" class="service-box text-decoration-none">
                        <div class="service-icon">
                            <img src="<?= $service['img_src']; ?>" alt="<?= $service['title']; ?> Icon">
                        </div>
                        <div class="service-content">
                            <div class="service-title"><?= $service['title']; ?></div>
                            <div class="service-description">
                                <?= $service['description']; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
