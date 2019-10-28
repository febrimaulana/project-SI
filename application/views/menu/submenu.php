<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<?php if (validation_errors()) { ?>
				<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
					<strong>Gagal Input!</strong> Cek Kembali Form Input.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } ?>
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
									<th>Nama Sub Menu</th>
									<th>URL</th>
									<th>Icon</th>
									<th>Status Menu</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($submenu as $data) : ?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $data['nama_title_menu'] ?></td>
										<td><?= $data['nama_sub_menu'] ?></td>
										<td><?= $data['url_sub_menu'] ?></td>
										<td><?= $data['icon_sub_menu'] ?></td>
										<td>
											<?php
												if ($data['status_sub_menu'] == 1) {
													echo "Aktif";
												} else {
													echo "Tidak Aktif";
												}
												?>
										</td>
										<td>
											<a href="<?= base_url('menu/submenu/ubah/') . $data['id_sub_menu'] ?>" class="btn btn-primary btn-sm">Ubah</a>
											<a href="<?= base_url('menu/submenu/hapus/') . $data['id_sub_menu'] ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
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
			<form action="<?= base_url('menu/submenu') ?>" method="post" id="formsubmenu">
				<div class="modal-body">
					<div class="form-group">
						<label for="title">Nama Title</label>
						<select name="title" id="title" class="form-control">
							<?php foreach ($titlemenu as $data) : ?>
								<option value="<?= $data['id_title_menu'] ?>"><?= $data['nama_title_menu'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="submenu">Nama Sub Menu</label>
						<input type="text" name="submenu" class="form-control" id="submenu" value="<?= set_value('submenu') ?>" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="url">URL</label>
						<input type="text" name="url" class="form-control" id="url" value="<?= set_value('url') ?>" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="icon">Icon</label>
						<input type="text" name="icon" class="form-control" id="icon" value="<?= set_value('icon') ?>" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="icon">Status Menu</label>
						<div class="i-checks">
							<input id="radio1" type="radio" checked value="1" name="status" class="radio-template">
							<label for="radio1">Aktif</label>
							<input id="radio2" type="radio" value="0" name="status" class="radio-template ml-3">
							<label for="radio2">Tidak Aktif</label>
						</div>
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