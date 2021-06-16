<div style="background-image: url(<?= BASEURL;?>/gambar/donasi.jpg); background-size: cover">
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
    <br><br>
    <center><h3 style="font-size:50px; color:white">Daftar Participant</h3></center>
    <center><h5 style=color:white>Event Reboisasi Jember</h5></center>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="color:white; font-size:30px">Nama</th>
                <th scope="col"style="color:white; font-size:30px">Phone</th>
                <th scope="col"style="color:white; font-size:30px">Alamat</th>
                <!-- <th scope="col">Delete Data</th>
                <th scope="col">Update Data</th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['prt'] as $prt):?>
            <tr >
                <td scope="row" style="color:white; font-size:18px"><?= $prt['nama'];?></td>
                <td style="color:white; font-size:18px"><?= $prt['phone'];?></td>
                <td style="color:white; font-size:18px"><?= $prt['alamat'];?></td>
                <!-- <td><a href="<?= BASEURL;?>/participant/delete/<?= $prt['id'];?>" class="badge bg-danger" onclick="return confirm('yakin hapus data?');">Delete</a></td>
                <td><a href="<?= BASEURL;?>/participant/update/<?= $prt['id'];?>" class="badge bg-success tampilModalUbah" -->
                 <!-- data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $prt['id'];?>" >Update</a></td> -->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <div class="row" data-masonry='{"percentPosition": true }'>
        <center><div class="col-sm-6 col-lg-4 mb-4">
          <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title"style=margin-bottom:30px>PERHATIAN!!!</h5>
              <p class="card-text">jika ingin bergabung sebagai participant<br> silahkan menghubungi Call Center</p>
              <p class="card-text"style=margin-bottom:30px>(081) 5555 7788</p>
            </div>
          </div></center>
        </div>
</div>
    
    <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="titleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModalLabel">Isi Data Diri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL;?>/participant/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="namapar" >Nama</label>
                    <input type="text" class="form-control" id="namapar" name="nama" >
                </div>
                <div class="form-group">
                    <label for="phonepar" >Phone</label>
                    <input type="number" class="form-control" id="phonepar" name="phone" >
                </div>
                <div class="form-group">
                    <label for="alamatpar" >Alamat</label>
                    <input type="text" class="form-control" id="alamatpar" name="alamat" >
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
