<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>My Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: #ECEFF1;
			font-family: 'Poppins', sans-serif;
		}

		.profile-container {
			max-width: 80%;
			margin: 20px auto;
			padding: 20px 30px;
		}

		.col-md-3,
		.col-md-9 {
			padding: 0 15px;
		}

		.profile-pic {
			width: 100%;
			height: auto;
			object-fit: cover;
			margin-bottom: 20px;
		}

		.btn-edit,
		.btn-password {
			width: 100%;
			margin-top: 10px;
			border-radius: 40px;
		}

		.btn-edit:hover,
		.btn-password:hover {
			filter: brightness(1.1);
			box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
			transition: all 0.3s ease;
		}

		.btn-edit {
			background: linear-gradient(90deg, #D23E80 0%, #97357B 100%);
			font-size: 14px;
			font-weight: 600;
			line-height: 16.8px;
			text-align: center;
			color: white;
		}

		.btn-password {
			background: linear-gradient(90deg, #006764 0%, #018D89 100%);
			font-size: 14px;
			font-weight: 600;
			line-height: 16.8px;
			text-align: center;
			color: white;
		}

		.table {
			width: 100%;
			border-top: 3px solid #dc3545;
		}

		.table th,
		.table td {
			padding: 10px;
			vertical-align: middle;
		}

		.table th {
			font-family: "Poppins", sans-serif;
			width: 25%;
			text-align: left;
			font-weight: 400;
		}

		.table td {
			text-align: left;
			font-weight: 600;
		}

		.table td span {
			font-weight: 600;
		}

		tr:nth-child(even) {
			background-color: #ECECEC;
		}

		tr:nth-child(odd) {
			background-color: #FFFFFF;
		}

		.text-description {
			font-family: "Poppins";
			font-size: 16px;
			font-weight: 400;
			line-height: 24px;
			letter-spacing: 0.02em;
			text-align: left;
			color: #00000080;
		}

		.text-my {
			font-family: "Poppins", sans-serif;
			font-size: 36px;
			font-weight: 700;
			line-height: 55px;
			letter-spacing: 0.02em;
			text-align: left;
		}

		.text-profile {
			font-family: "Poppins";
			font-size: 36.67px;
			font-weight: 400;
			line-height: 55px;
			letter-spacing: 0.02em;
			text-align: left;
		}


		/* Media Queries */
		@media (max-width: 576px) {

			/* For Small screens and below */
			.text-my,
			.text-profile {
				font-size: 28px;
				line-height: 40px;
			}

			.text-description {
				font-size: 14px;
				line-height: 20px;
			}

			.btn-edit,
			.btn-password {
				font-size: 12px;
			}

			.table th,
			.table td {
				padding: 8px;
				font-size: 12px;
			}
		}

		@media (min-width: 577px) and (max-width: 768px) {

			/* For Medium screens */
			.text-my,
			.text-profile {
				font-size: 32px;
				line-height: 45px;
			}

			.text-description {
				font-size: 15px;
				line-height: 22px;
			}

			.btn-edit,
			.btn-password {
				font-size: 13px;
			}

			.table th,
			.table td {
				padding: 9px;
				font-size: 14px;
			}
		}

		@media (min-width: 769px) and (max-width: 992px) {

			/* For Large screens */
			.profile-container {
				margin: auto;
				padding: 0;
			}

			.text-my,
			.text-profile {
				font-size: 34px;
				line-height: 50px;
			}

			.text-description {
				font-size: 16px;
				line-height: 24px;
			}

			.btn-edit,
			.btn-password {
				font-size: 14px;
			}

			.table th,
			.table td {
				padding: 10px;
				font-size: 15px;
			}
		}
	</style>
</head>

<body>
	<div class="container profile-container">
		<div class="row">
			<div class="col-sm-12 col-md-3 text-center">
				<div class="pic-section">
					<img src="<?= base_url('public/assets/images/user/sampleprofile.svg'); ?>" alt="Profile Picture" class="profile-pic">
					<button class="btn btn-edit">Edit Profil</button>
					<button class="btn btn-password">Ganti Password</button>
				</div>
			</div>
			<div class="col-sm-12 col-md-9">
				<p><span class="text-my">My </span> <span class="text-profile">Profile</span></p>
				<p class="text-description">Profil Anda boleh di update jika terdapat perubahan!</p>
				<table class="table">
					<tr>
						<th>Nama Lengkap</th>
						<td><span>:</span> Siti Rohmania</td>
					</tr>
					<tr>
						<th>Email</th>
						<td><span>:</span> psikologimania@gmail.com</td>
					</tr>
					<tr>
						<th>Telepon</th>
						<td><span>:</span> 09834383748</td>
					</tr>
					<tr>
						<th>Gender</th>
						<td><span>:</span> Perempuan</td>
					</tr>
					<tr>
						<th>Tempat & Tanggal Lahir</th>
						<td><span>:</span> Makassar 1999</td>
					</tr>
					<tr>
						<th>Pekerjaan</th>
						<td><span>:</span> Manager/Asisten Manager</td>
					</tr>
					<tr>
						<th>Pendidikan Terakhir</th>
						<td><span>:</span> S2</td>
					</tr>
					<tr>
						<th>Jurusan / Program Studi</th>
						<td><span>:</span> Psikologi</td>
					</tr>
					<tr>
						<th>Status</th>
						<td><span>:</span> Single</td>
					</tr>
					<tr>
						<th>Alamat Domisili</th>
						<td><span>:</span> Utan Kayu Selatan, No. 29</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>

</html>
