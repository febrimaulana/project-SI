<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card p-3">
				<div class="card-header d-flex align-items-center">
					<h3 class="h4">Table Akses <?= $akses['nama_aktor']; ?></h3>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table text-center">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Title</th>
									<th>Akses Menu</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($titlemenu as $data) : ?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $data['nama_title_menu'] ?></td>
										<td>
											<input type="checkbox" value="" class="checkbox-template dataakses" <?= check_access($idaktor, $data['id_title_menu']) ?> data-idaktor="<?= $idaktor ?>" data-idtitle="<?= $data['id_title_menu'] ?>">
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

<script>
	$(document).ready(function() {
		$('.dataakses').click(function() {
			let idaktor = $(this).data('idaktor');
			let idtitle = $(this).data('idtitle');

			$.ajax({
				type: "POST",
				url: "<?= base_url('menu/akses/ubah') ?>",
				data: {
					idtitle: idtitle,
					idaktor: idaktor
				},
				success: function(data) {
					document.location.href = "<?= base_url('menu/akses/data/') . $idaktor ?>"
				}
			});
		});
	});
</script>
