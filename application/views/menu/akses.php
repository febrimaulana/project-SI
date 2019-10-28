<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card p-3">
				<div class="card-close">
					<button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i></button>
				</div>
				<div class="card-header d-flex align-items-center">
					<h3 class="h4">Table <?= $title; ?></h3>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table text-center" id="example">
							<thead>
								<tr>
									<th>No</th>
									<th>Aktor</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($aktor as $data) : ?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $data['nama_aktor'] ?></td>
										<td>
											<button data-toggle="modal" data-target="#UbahAktor" class="btn btn-primary btn-sm TombolUbahAktor" data-id="<?= $data['id_aktor'] ?>" data-nama="<?= $data['nama_aktor'] ?>">Ubah</button>
											<a href="<?= base_url('menu/aktor/hapus/') . $data['id_aktor'] ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
											<a href="<?= base_url('menu/akses/data/') . $data['id_aktor'] ?>" class="btn btn-warning btn-sm">Akses</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal tambah -->
<div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('menu/aktor/tambah') ?>" method="post" id="formaktor">
				<div class="modal-body">
					<div class="form-group">
						<label for="aktor">Nama Aktor</label>
						<input type="text" name="nama" id="aktor" class="form-control" autofocus autocomplete="off">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal Ubah-->
<div class="modal fade" id="UbahAktor" role="dialog" aria-labelledby="UbahAktorTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="UbahAktorTitle">Ubah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('menu/aktor/ubah') ?>" method="post" id="formubahaktor">
				<div class="modal-body">
					<div class="form-group">
						<label for="FormAktorNama">Nama Title</label>
						<input type="hidden" name="id" id="FormIdAktor">
						<input type="text" name="nama" class="form-control" id="FormAktorNama" autofocus autocomplete="off">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Ubah</button>
				</div>
			</form>
		</div>
	</div>
</div>