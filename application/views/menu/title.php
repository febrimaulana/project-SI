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
									<th>Nama Title</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($menu as $data) : ?>
									<tr>
										<th scope="row"><?= $no++; ?></th>
										<td><?= $data['nama_title_menu'] ?></td>
										<td>
											<button data-toggle="modal" data-target="#UbahTitle" class="btn btn-primary UbahTitleMenu" data-id="<?= $data['id_title_menu'] ?>" data-nama="<?= $data['nama_title_menu'] ?>">Ubah</button>
											<a href="<?= base_url('menu/title/hapus/') . $data['id_title_menu'] ?>" class="btn btn-danger hapus">Hapus</a>
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
			<form action="<?= base_url('menu/title/tambah') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="title">Nama Title</label>
						<input type="text" name="nama" id="title" class="form-control" autofocus autocomplete="off">
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
<div class="modal fade" id="UbahTitle" role="dialog" aria-labelledby="UbahTitleTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="UbahTitleTitle">Ubah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('menu/title/ubah') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="FormTitleNama">Nama Title</label>
						<input type="hidden" name="id" id="FormTitleId">
						<input type="text" name="nama" class="form-control" id="FormTitleNama" autofocus autocomplete="off">
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
