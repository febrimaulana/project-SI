<body>
	<div class="page login-page">
		<div class="container d-flex align-items-center">
			<div class="form-holder has-shadow">
				<div class="row">
					<!-- Logo & Information Panel-->
					<div class="col-lg-6">
						<div class="info d-flex align-items-center">
							<div class="content">
								<div class="logo">
									<h1>E-Report TA/KP</h1>
								</div>
								<p>Universitas Persada Indonesia.</p>
							</div>
						</div>
					</div>
					<!-- Form Panel    -->
					<div class="col-lg-6 bg-white">
						<div class="form d-flex align-items-center">
							<div class="content">
								<h3 class="mb-3 text-center">LOGIN MAHASISWA / DOSEN</h3>
								<form action="<?= base_url('auth/login') ?>" method="get" class="form-validate">
									<div class="form-group">
										<input id="login-username" type="text" name="username" required autocomplete="off" data-msg="Username tidak boleh kosong" class="input-material">
										<label for="login-username" class="label-material">Username</label>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-sm btn-block">Login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyrights text-center">
			<p>Copyrights Sistem Informasi <?= date('Y') ?></p>
		</div>
	</div>