<div class="container">
	<h3 class="ml-4">Form Ubah Data</h3>
	<div class="row">
		<div class="col-md-12">
			<form action="<?= base_url('menu/submenu/ubah/') . $submenu['id_sub_menu'] ?>" method="post">
				<div class="form-group">
					<label for="title">Nama Title</label>
					<select name="title" id="title" class="form-control">
						<?php foreach ($titlemenu as $data) : ?>
							<?php if ($data['id_title_menu'] == $submenu['title_menu_id']) { ?>
								<option value="<?= $data['id_title_menu'] ?>" selected><?= $data['nama_title_menu'] ?></option>
							<?php } else { ?>
								<option value="<?= $data['id_title_menu'] ?>"><?= $data['nama_title_menu'] ?></option>
							<?php } ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group has-danger">
					<?php if (form_error('submenu')) { ?>
						<label for="submenu">Sub Menu</label>
						<input type="text" name="submenu" class="form-control is-invalid" id="submenu">
						<div class="invalid-feedback"><?= form_error('submenu') ?></div>
					<?php } else { ?>
						<label for="submenu">Sub Menu</label>
						<input type="text" name="submenu" class="form-control" id="submenu" value="<?= $submenu['nama_sub_menu'] ?>">
					<?php } ?>
				</div>
				<div class="form-group">
					<?php if (form_error('url')) { ?>
						<label for="url">URL</label>
						<input type="text" name="url" class="form-control is-invalid" id="url">
						<div class="invalid-feedback"><?= form_error('url') ?></div>
					<?php } else { ?>
						<label for="url">URL</label>
						<input type="text" name="url" class="form-control" id="url" value="<?= $submenu['url_sub_menu'] ?>">
					<?php } ?>
				</div>
				<div class="form-group">
					<?php if (form_error('icon')) { ?>
						<label for="icon">Icon</label>
						<input type="text" name="icon" class="form-control is-invalid" id="icon">
						<div class="invalid-feedback"><?= form_error('icon') ?></div>
					<?php } else { ?>
						<label for="icon">Icon</label>
						<input type="text" name="icon" class="form-control" id="icon" value="<?= $submenu['icon_sub_menu'] ?>">
					<?php } ?>
				</div>
				<div class="form-group">
					<label for="icon">Status Menu</label>
					<div class="i-checks">
						<input id="radio1" type="radio" value="1" name="status" class="radio-template" <?php if ($submenu['status_sub_menu'] == 1) echo "checked" ?>>
						<label for="radio1">Aktif</label>
						<input id="radio2" type="radio" value="0" name="status" class="radio-template ml-3" <?php if ($submenu['status_sub_menu'] == 0) echo "checked" ?>>
						<label for="radio2">Tidak Aktif</label>
					</div>
				</div>
				<div class="form-group float-right">
					<button type="submit" class="btn btn-primary">Ubah</button>
					<a href="<?= base_url('menu/submenu') ?>" class="btn btn-warning">Batal</a>
				</div>
			</form>
		</div>
	</div>
</div>
