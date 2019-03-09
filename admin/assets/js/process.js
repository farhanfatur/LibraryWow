
let jenis_passanger = new Array();

function changeValue(val) {
	if(val == 'siswa') {
		$("[name=kelas]").removeAttr("readonly");
	}else {
		$("[name=kelas]").appendAttr("readonly");
	}
}
function changeBlokJabatan(val) {
	if(val == 'admin') {
		$("[name=kelas]").removeAttr("readonly");
	}else {
		$("[name=kelas]").appendAttr("readonly");
	}
}

// ----------------------------------------------- MODUL BUKU --------------------------------------------------------------------------------------------------------------------------------------------------------------------
let data = [];
function doGetDataBook() {
	$.ajax({
		url : 'modul/md_buku/action/select.php',
		dataType : 'json',
		success : function (res) {
			console.log("res =>", res);

			data = res.data;
			doRefreshGridBook();
		}
	});
}


function doRefreshGridBook() {
	let $tbody = $("#grid-book tbody");
	$tbody.empty();

	data.forEach(function (each, i) {
		let $tr = $("<tr></tr>");
		$tr.appendTo($tbody);

		$("<td></td>").html(each.id_buku).appendTo($tr);
		$("<td></td>").html(each.judul).appendTo($tr);
		$("<td></td>").html(each.pengarang).appendTo($tr);
		$("<td></td>").html(each.penerbit).appendTo($tr);
		$("<td></td>").html(each.jenis_buku).appendTo($tr);
		$("<td></td>").html(each.stok).appendTo($tr);
		$("<td></td>").html(each.tahun_terbit).appendTo($tr);
		$("<td></td>").html(each.jml_halaman).appendTo($tr);

		let $tdAction = $("<td class='text-right'></td>");
		$tdAction.appendTo($tr);
		$tdAction.html('<a href="#" data-toggle="modal" data-target="#bookModal" onclick="doEditBook(\'' + each.id_buku +'\')">Edit</a> | <a href="#" onclick="doDeleteBook(\'' + each.id_buku +'\')">Delete</a>');
	});
}

function doEditBook(id) {
	$.ajax({
		url : 'modul/md_buku/action/edit.php?id='+id,
		type : 'GET',
		dataType : 'json',
		success : function (data, res) {
			console.log("res =>", res);
			console.log("data =>", data);
			$("#id").val(data.id_buku);
			$("#nama").val(data.judul);
			$("#textSubmitBook").text("Edit");
			$("#pengarang").val(data.pengarang);
			$("#penerbit").val(data.penerbit);
			$("#jenis_buku").val(data.jenis_buku);
			$("#stok").val(data.stok);
			$("#tahun_terbit").val(data.tahun_terbit);
			$("#jml_halaman").val(data.jml_halaman);
		},
		error :function (data, res) {
			console.log("data =>", data);
			console.log("res =>", res);
		}
	});
}

function doDeleteBook(id) {
    console.log(id);
    swal({
        title: 'Konfirmasi',
        text: "Apakah anda ingin menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then(function () {
        $.ajax({
        url : "modul/md_buku/action/delete.php?id="+id,
        type : 'GET',
        dataType : 'json',
        success : function (respone) {
            console.log(respone);
            swal({
            title: "SUCCESS!!!!",
            text: "Data Berhasil di Hapus!!!",
            type: 'success'
        }).then(function () {
            // location.reload(this);
            doGetDataBook();
        });
            
        }
    });
    });
    
}

function doUpdateBook() {
		$.ajax({
			url : 'modul/md_buku/action/update.php',
			method : 'POST',
			data : $("#formBookEdit").serialize(),
			dataType : 'json',
			success : function (data, res) {
				console.log("res =>", res);
				$("#bookModal").modal("hide");
				swal('Success!', 'Data updated', "success");
	            // location.reload(this);
	            doGetDataBook();
			},
			error : function (data, res) {
				console.log("res =>", res);
				console.log("data =>", data);
			}
		});
	}
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------- MODUL BARANG ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
function doGetDataStuff() {
	$.ajax({
		url : 'modul/md_barang/action/select.php',
		dataType : 'json',
		success : function (res) {
			console.log("res =>", res);

			data = res.data;
			doRefreshGridStuff();
		}
	});
}

function doRefreshGridStuff() {
	let $tbody = $("#grid-stuff tbody");
	$tbody.empty();

	data.forEach(function (each, i) {
		let $tr = $("<tr></tr>");
		$tr.appendTo($tbody);

		$("<td></td>").html(each.id_barang).appendTo($tr);
		$("<td></td>").html(each.nama_barang).appendTo($tr);
		$("<td></td>").html(each.jumlah).appendTo($tr);

		let $tdAction = $("<td class='text-right'></td>");
		$tdAction.appendTo($tr);
		$tdAction.html('<a href="#" data-toggle="modal" data-target="#stuffModal" onclick="doEditStuff(\'' + each.id_barang +'\')">Edit</a> | <a href="#" onclick="doDeleteStuff(\'' + each.id_barang +'\')">Delete</a>');
	});
}

function doEditStuff(id) {
	$(".title").text("Edit");
	$("#textSubmitStuff").text('Edit');
	$.ajax({
		url : 'modul/md_barang/action/edit.php?id='+id,
		method : 'GET',
		dataType : 'json',
		success : function (data, res) {
			$("#id").val(data.id_barang);
			$("#nama").val(data.nama_barang);
			$("#jumlah").val(data.jumlah);
		}
	})
}

function doUpdateStuff() {
	$.ajax({
		url : 'modul/md_barang/action/update.php',
		method : 'POST',
		data : $("#formStuffEdit").serialize(),
		dataType : 'json',
		success : function (data, res) {
			console.log("res =>", res);
			$("#stuffModal").modal("hide");
			swal('Success!', 'Data updated', "success");
            // location.reload(this);
            doGetDataStuff();
		},
		error : function (data, res) {
			console.log("res =>", res);
			console.log("data =>", data);
		}
	});
}

function doDeleteStuff(id) {
    console.log(id);
    swal({
        title: 'Konfirmasi',
        text: "Apakah anda ingin menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then(function () {
        $.ajax({
        url : "modul/md_barang/action/delete.php?id="+id,
        type : 'GET',
        dataType : 'json',
        success : function (respone) {
            console.log(respone);
            swal({
	            title: "SUCCESS!!!!",
	            text: "Data Berhasil di Hapus!!!",
	            type: 'success'
	        }).then(function () {
	            // location.reload(this);
	            doGetDataStuff();
	        });
            
        }
    	});
    });
    
}
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------- MODUL PENGUNJUNG ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
function doGetDataPassanger() {
	$.ajax({
		url : 'modul/md_pengunjung/action/select.php',
		dataType : 'json',
		success : function (res) {
			console.log("res =>", res);

			data = res.data;
			doRefreshGridPassanger();
		}
	});
}

function doRefreshGridPassanger() {
	let $tbody = $("#grid-passanger tbody");
	$tbody.empty();

	data.forEach(function (each, i) {
		let $tr = $("<tr></tr>");
		$tr.appendTo($tbody);

		$("<td></td>").html(each.id_pengunjung).appendTo($tr);
		$("<td></td>").html(each.nama_pengunjung).appendTo($tr);
		$("<td></td>").html(each.kelas).appendTo($tr);
		$("<td></td>").html(each.jenis_pengunjung).appendTo($tr);
		$("<td></td>").html(each.keperluan).appendTo($tr);
		$("<td></td>").html(each.tgl).appendTo($tr);

		let $tdAction = $("<td class='text-right'></td>");
		$tdAction.appendTo($tr);
		$tdAction.html('<a href="#" data-toggle="modal" data-target="#passangerModal" onclick="doEditPassanger(\'' + each.id_pengunjung +'\')">Edit</a> | <a href="#" onclick="doDeletePassanger(\'' + each.id_pengunjung +'\')">Delete</a>');
	});
}

function doEditPassanger(id) {
	$.ajax({
		url : "modul/md_pengunjung/action/edit.php?id="+id,
		method : 'GET',
		dataType : 'json',
		success : function (data, res) {
			console.log("data =>", data);
			$("#id").val(data.id_pengunjung);
			$("#nama").val(data.nama_pengunjung);
			$("#kelas").val(data.kelas);
			$("#jabatan").val(data.jenis_pengunjung);
			$("#keperluann").val(data.keperluan);
			$("#date").val(data.tgl);
		}
	})
}

function doUpdatePassanger() {
	$.ajax({
		url : "modul/md_pengunjung/action/update.php",
		method : "POST",
		data : $("#formPassangerEdit").serialize(),
		dataType : 'json',
		success : function (data, res) {
			console.log("res =>", res);
			$("#passangerModal").modal("hide");
			swal('Success!', 'Data updated', "success");
            // location.reload(this);
            doGetDataPassanger();
		}
	})
}

function doDeletePassanger(id) {
	console.log(id);
    swal({
        title: 'Konfirmasi',
        text: "Apakah anda ingin menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then(function () {
        $.ajax({
        url : "modul/md_pengunjung/action/delete.php?id="+id,
        type : 'GET',
        dataType : 'json',
        success : function (respone) {
            console.log(respone);
            swal({
	            title: "SUCCESS!!!!",
	            text: "Data Berhasil di Hapus!!!",
	            type: 'success'
	        }).then(function () {
	            // location.reload(this);
	            doGetDataPassanger();
	        });
            
        }
    	});
    });
}
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------- MODUL PEMINJAMAN ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
function doGetDataPinjam() {
	$.ajax({
		url : 'modul/md_peminjaman/action/select.php',
		dataType : 'json',
		success : function (res) {
			console.log("res =>", res);

			data = res.data;
			doRefreshGridPinjam();
		}
	});
}

function doRefreshGridPinjam() {
	let $tbody = $("#grid-pinjam tbody");
	$tbody.empty();

	data.forEach(function (each, i) {
		let $tr = $("<tr></tr>");
		$tr.appendTo($tbody);

		$("<td></td>").html(each.id_peminjaman).appendTo($tr);
		$("<td></td>").html(each.nama_pengunjung).appendTo($tr);
		$("<td></td>").html(each.tgl_pinjam).appendTo($tr);
		$("<td></td>").html(each.tgl_kembali).appendTo($tr);
		$("<td></td>").html(each.judul).appendTo($tr);
		$("<td></td>").html(each.nama_petugas).appendTo($tr);

		let $tdAction = $("<td class='text-right'></td>");
		$tdAction.appendTo($tr);
		$tdAction.html('<a href="#" data-toggle="modal" data-target="#pinjamModal" onclick="doEditPinjam(\'' + each.id_peminjaman +'\')">Edit</a>');
	});
}

function doEditPinjam(id) {
	$.ajax({
		url : "modul/md_peminjaman/action/edit.php?id="+id,
		method : 'GET',
		dataType : 'json',
		success : function (data, res) {
			console.log("data =>", data);

			$("#id").val(data.id_peminjaman);
			$("#tgl_pinjam").val(data.tgl_pinjam);
			$("#tglkembali").val(data.tgl_kembali);
			$("[name=id_buku]").val(data.id_buku);
			$("#judul").val(data.judul);
			$("[name=id_pengunjung]").val(data.id_pengunjung);
			$("#namapeminjam").val(data.nama_pengunjung);
			$("[name=id_petugas]").val(data.id_petugas);
			$("#namapetugas").val(data.nama_petugas);
		}
	})
}

function doUpdatePinjam() {
	$.ajax({
		url : "modul/md_peminjaman/action/update.php",
		method : "POST",
		data : $("#formPinjamEdit").serialize(),
		dataType : 'json',
		success : function (data, res) {
			console.log("res =>", res);
			$("#pinjamModal").modal("hide");
			swal('Success!', 'Data updated', "success");
            // location.reload(this);
            doGetDataPinjam();
		}
	})
}
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------------------------------------------- MODUL PETUGAS ---------------------------------------------------------------------------------------------------------------------------------------------------------------------
function doGetDataPetugas() {
	$.ajax({
		url : 'modul/md_petugas/action/select.php',
		dataType : 'json',
		success : function (res) {
			console.log("res =>", res);

			data = res.data;
			doRefreshGridPetugas();
		}
	});
}

function doRefreshGridPetugas() {
	let $tbody = $("#grid-petugas tbody");
	$tbody.empty();

	data.forEach(function (each, i) {
		let $tr = $("<tr></tr>");
		$tr.appendTo($tbody);

		$("<td></td>").html(each.id_petugas).appendTo($tr);
		$("<td></td>").html(each.nama_petugas).appendTo($tr);
		$("<td></td>").html(each.email).appendTo($tr);
		$("<td></td>").html(each.jabatan).appendTo($tr);
		$("<td></td>").html(each.alamat).appendTo($tr);

		let $tdAction = $("<td class='text-right'></td>");
		$tdAction.appendTo($tr);
		$tdAction.html('<a href="#" data-toggle="modal" data-target="#petugasModal" onclick="doEditPetugas(\'' + each.id_petugas +'\')">Edit</a> | <a href="#" onclick="doDeletePetugas(\'' + each.id_petugas +'\')">Delete</a>');
	});
}

function doEditPetugas(id) {
	$.ajax({
		url : "modul/md_petugas/action/edit.php?id="+id,
		method : 'GET',
		dataType : 'json',
		success : function (data, res) {
			$("[name=id]").val(data.id_petugas);
			$("[name=nama]").val(data.nama_petugas);
			$("[name=email]").val(data.email);
			$("[name=pass]").val(data.password);
			$("[name=alamat]").val(data.alamat);
			$("[name=jabatan]").val(data.jabatan);
			$("[name=kelas]").val(data.kelas);
		}
	});
}
function doUpdatePetugas() {
	$.ajax({
		url : "modul/md_petugas/action/update.php",
		method : "POST",
		data : $("#formPetugasEdit").serialize(),
		dataType : 'json',
		success : function (data, res) {
			console.log("res =>", res);
			$("#petugasModal").modal("hide");
			swal('Success!', 'Data updated', "success");
            // location.reload(this);
            doGetDataPetugas();
		}
	})
}

function doDeletePetugas(id) {
    console.log(id);
    swal({
        title: 'Konfirmasi',
        text: "Apakah anda ingin menghapus data ini?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then(function () {
        $.ajax({
        url : "modul/md_petugas/action/delete.php?id="+id,
        type : 'GET',
        dataType : 'json',
        success : function (respone) {
            console.log(respone);
            swal({
	            title: "SUCCESS!!!!",
	            text: "Data Berhasil di Hapus!!!",
	            type: 'success'
	        }).then(function () {
	            // location.reload(this);
	            doGetDataPetugas();
	        });
            
        }
    	});
    });
    
}
// -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// ---------- SHOW MODUL -----------
$(function () {
	doGetDataBook();
	doGetDataStuff();
	doGetDataPassanger();
	doGetDataPinjam();
	doGetDataPetugas();
})
// ---------------------------------
$(document).ready(function () {
	let form = $(".form-login");
	$(".btn-submit").on('click', function (ev) {
		ev.preventDefault();
		$.ajax({
			type : form.attr('method'),
			url : form.attr('action'),
			data : form.serialize(),
			dataType : 'json',
			success : function (data) {
				let response = JSON.parse(JSON.stringify(data));
				if(response.success) {
					window.location = "home.php?module=beranda";
					console.log("login success =>", response);
				}else {
					$('#errMsg').fadeOut().fadeIn().removeClass("hide");
					console.log("Login Fail =>", response);
				}
			}
		})
	});

	let formBook = $(".formAddBook");
	$("#doAddBook").on('click', function (ev) {
		ev.preventDefault();
		swal({
            title: 'Konfirmasi',
            text: "Apakah anda ingin Menambahkan data ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then(function () {
        	$.ajax({
        		url : formBook.attr('action'),
        		method : formBook.attr('method'),
        		data : formBook.serialize(),
        		dataType : 'json',
        		success : function (respone) {
                    console.log(respone);
                    swal({
                    title: "SUCCESS!!!!",
                    text: "Data Berhasil di tambahkan!!!",
                    type: 'success'
                    }).then(function () {
                        location.href = "?module=buku";
                        
                    });
                    
                }
        	});
        });
	});

	let formStuff = $(".formAddStuff");
	$("#doAddStuff").on('click', function (ev) {
		ev.preventDefault();
		swal({
            title: 'Konfirmasi',
            text: "Apakah anda ingin Menambahkan data ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then(function () {
        	$.ajax({
        		url : formStuff.attr('action'),
        		method : formStuff.attr('method'),
        		data : formStuff.serialize(),
        		dataType : 'json',
        		success : function (respone) {
                    console.log(respone);
                    swal({
                    title: "SUCCESS!!!!",
                    text: "Data Berhasil di tambahkan!!!",
                    type: 'success'
                    }).then(function () {
                        location.href = "?module=barang";
                        
                    });
                    
                }
        	});
        });
	});

	let formPassanger = $(".formAddPassanger");
	$("#doAddPassanger").on('click', function (ev) {
		ev.preventDefault();
		swal({
            title: 'Konfirmasi',
            text: "Apakah anda ingin Menambahkan data ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then(function () {
        	$.ajax({
        		url : formPassanger.attr('action'),
        		method : formPassanger.attr('method'),
        		data : formPassanger.serialize(),
        		dataType : 'json',
        		success : function (respone) {
                    console.log(respone);
                    swal({
                    title: "SUCCESS!!!!",
                    text: "Data Berhasil di tambahkan!!!",
                    type: 'success'
                    }).then(function () {
                        location.href = "?module=pengunjung";
                        
                    });
                    
                }
        	});
        });
	});

	let formPinjam = $(".formAddPinjam");
	$("#doAddPinjam").on('click', function (ev) {
		ev.preventDefault();
		swal({
            title: 'Konfirmasi',
            text: "Apakah anda ingin Menambahkan data ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then(function () {
        	$.ajax({
        		url : formPinjam.attr('action'),
        		method : formPinjam.attr('method'),
        		data : formPinjam.serialize(),
        		dataType : 'json',
        		success : function (respone) {
                    console.log(respone);
                    swal({
                    title: "SUCCESS!!!!",
                    text: "Data Berhasil di tambahkan!!!",
                    type: 'success'
                    }).then(function () {
                        location.href = "?module=pinjambuku";
                        
                    });
                    
                }
        	});
        });
	});

	let formPetugas = $(".formAddPetugas");
	$("#doAddPetugas").on('click', function (ev) {
		ev.preventDefault();
		swal({
            title: 'Konfirmasi',
            text: "Apakah anda ingin Menambahkan data ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
        }).then(function () {
        	$.ajax({
        		url : formPetugas.attr('action'),
        		method : formPetugas.attr('method'),
        		data : formPetugas.serialize(),
        		dataType : 'json',
        		success : function (respone) {
                    console.log(respone);
                    swal({
                    title: "SUCCESS!!!!",
                    text: "Data Berhasil di tambahkan!!!",
                    type: 'success'
                    }).then(function () {
                        location.href = "?module=petugas";
                        
                    });
                    
                },
                error : function (data, res) {
                	console.log("data => ", data);
                	console.log("res => ", res);
                }
        	});
        });
	});
});