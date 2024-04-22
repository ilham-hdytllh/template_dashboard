const notifikasi = $('.infodata').data('infodata');

if(notifikasi == "Disimpan"){
    Swal.fire({
        icon: 'success',
        title: 'SUKSES',
        text: 'Data Berhasil '+notifikasi,
      })
}else if(notifikasi == "Gagal"){
    Swal.fire({
        icon: 'error',
        title: 'FAILED',
        text: 'Data Gagal Di Input',
      })
}else if(notifikasi == "Diubah"){
    Swal.fire({
        icon: 'success',
        title: 'SUKSES',
        text: 'Data Berhasil Diubah',
      })
}

$('.deletedata').on('click',function(e){
    e.preventDefault();
    var getlink = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data Akan Dihapus Permanent!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Hapus'
      }).then((result) => {
        if (result.value) {
         window.location.href = getlink;
        }
      })
});

