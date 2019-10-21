// alert js
const flashData = $('.flash-berhasil').data('flashdata');
const gagal = $('.flash-gagal').data('flashdata');

if (flashData) {
	Swal({
		title: 'Data',
		text: '' + flashData,
		type: 'success'
	});
}

if (gagal) {
	Swal({
		title: 'Gagal',
		text: '' + gagal,
		type: 'warning'
	});
}

$('.hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal({
		title: 'Apa anda yakin?',
		text: "Data akan dihapus!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
// end alert


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
