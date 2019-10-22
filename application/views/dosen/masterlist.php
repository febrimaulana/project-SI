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
									<th>NID</th>
									<th>Nama Dosen</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($dosen as $data) : ?>
									<tr>
										<th scope="row"><?= $no++; ?></th>
										<td><?= $data['id_dosen'] ?></td>
										<td><?= $data['nama_dosen'] ?></td>
										<td>
											<button data-toggle="modal" data-target="#UbahDosen" class="btn btn-primary UbahDosen" data-id="<?= $data['id_dosen'] ?>" data-nama="<?= $data['nama_dosen'] ?>">Ubah</button>
											<a href="<?= base_url('dosen/list/hapus/') . $data['id_dosen'] ?>" class="btn btn-danger hapus">Hapus</a>
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
				<h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data Dosen</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('dosen/list/tambah') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="id">NID</label>
						<input type="text" name="id" id="id" class="form-control" autofocus autocomplete="off">
					</div>
					<div class="form-group">
						<label for="title">Nama Dosen</label>
						<input type="text" name="nama" id="title" class="form-control" autocomplete="off">
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
<div class="modal fade" id="UbahDosen" role="dialog" aria-labelledby="UbahDosenTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="UbahDosenTitle">Ubah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('dosen/list/ubah') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="FormDosenId">NID</label>
						<input type="text" name="id" class="form-control" id="FormDosenId" disabled>
					</div>
					<div class="form-group">
						<label for="FormDosenNama">Nama Dosen</label>
						<input type="text" name="nama" class="form-control" id="FormDosenNama" autofocus autocomplete="off">
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