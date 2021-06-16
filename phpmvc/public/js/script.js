$(function(){
    $('.tombolTambah').on('click', function(){
        $('#titleModalLabel').html('Isi Data Diri');
        $('.modal-footer button[type=submit]').html('Simpan');
    })

    $('.tampilModalUbah').on('click', function(){
        $('#titleModalLabel').html('Update Data Participant');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/participant/update');
        
        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url:'http://localhost/phpmvc/public/participant/getupdate',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                console.log(data);
                $('#namapar').val(data.nama);
                $('#phonepar').val(data.phone);
                $('#alamatpar').val(data.alamat);
                $('#id').val(data.id);
            }
        });
     });
});