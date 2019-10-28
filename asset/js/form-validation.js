$(function () {
	$("form[name='formtitle']").validate({
		rules: {
			nama: "required"
		},
		// Specify validation error messages
		messages: {
			nama: "Nama tidak boleh kosong"
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[name='ubahtitle']").validate({
		rules: {
			nama: "required"
		},
		// Specify validation error messages
		messages: {
			nama: "Nama tidak boleh kosong"
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formsubmenu']").validate({
		rules: {
			submenu: "required",
			url: "required",
			icon: "required"
		},
		// Specify validation error messages
		messages: {
			submenu: "Nama submenu tidak boleh kosong",
			url: "URL tidak boleh kosong",
			icon: "Icon tidak boleh kosong",
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formaktor']").validate({
		rules: {
			nama: "required"
		},
		// Specify validation error messages
		messages: {
			nama: "Nama tidak boleh kosong"
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formubahaktor']").validate({
		rules: {
			nama: "required"
		},
		// Specify validation error messages
		messages: {
			nama: "Nama tidak boleh kosong"
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formdosenpembimbing']").validate({
		rules: {
			id: {
				required: true,
				number: true
			},
			nama: "required",
			email: {
				required: true,
				email: true
			},
			notelp: {
				required: true,
				number: true
			},
			alamat: "required",
		},
		// Specify validation error messages
		messages: {
			id: {
				required: "ID dosen tidak boleh kosong",
				number: "Harus berupa number"
			},
			nama: "Nama tidak boleh kosong",
			email: {
				required: "Email tidak boleh kosong",
				email: "Email tidak valid"
			},
			notelp: {
				required: "No telpon dosen tidak boleh kosong",
				number: "Harus berupa number"
			},
			alamat: "Alamat tidak boleh kosong",
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formubahdosenpembimbing']").validate({
		rules: {
			id: {
				required: true,
				number: true
			},
			nama: "required",
			email: {
				required: true,
				email: true
			},
			notelp: {
				required: true,
				number: true,
				maxlength: 13
			},
			alamat: "required",
		},
		// Specify validation error messages
		messages: {
			id: {
				required: "ID dosen tidak boleh kosong",
				number: "Harus berupa number"
			},
			nama: "Nama tidak boleh kosong",
			email: {
				required: "Email tidak boleh kosong",
				email: "Email tidak valid"
			},
			notelp: {
				required: "No telpon tidak boleh kosong",
				number: "Harus berupa number",
				maxlength: "Maximal 13 karakter"
			},
			alamat: "Alamat tidak boleh kosong",
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formjurusan']").validate({
		rules: {
			nama: "required"
		},
		messages: {
			nama: "Nama jurusan tidak boleh kosong"
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formubahjurusan']").validate({
		rules: {
			nama: "required"
		},
		messages: {
			nama: "Nama jurusan tidak boleh kosong"
		},
		submitHandler: function (form) {
			form.submit();
		}
	});

	$("form[id='formadmin']").validate({
		rules: {
			username: "required",
			nama: "required",
			email: {
				required: true,
				email: true
			},
			notelp: {
				required: true,
				number: true,
				maxlength: 13
			}
		},
		// Specify validation error messages
		messages: {
			username: "Username dosen tidak boleh kosong",
			nama: "Nama admin tidak boleh kosong",
			email: {
				required: "Email tidak boleh kosong",
				email: "Email tidak valid"
			},
			notelp: {
				required: "No telpon tidak boleh kosong",
				number: "Harus berupa number",
				maxlength: "Maximal 13 karakter"
			}
		},
		submitHandler: function (form) {
			form.submit();
		}
	});
});
