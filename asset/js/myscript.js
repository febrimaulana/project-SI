$(document).ready(function () {
	// data table
	$('#example').DataTable({
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	});

	// ubah title menu
	$('.UbahTitleMenu').click(function () {
		let id = $(this).data('id');
		let nama = $(this).data('nama');

		$('#FormTitleId').val(id);
		$('#FormTitleNama').val(nama);
	})
});
