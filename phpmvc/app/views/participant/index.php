<div style="background-image: url(<?= BASEURL;?>/gambar/reboisasi.png)">

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
    <br>
    <br><br>
    <center><h3 style="font-size:50px">Daftar Participant</h3></center>
    <center><h5>Event Reboisasi Jember</h5></center>
    <br><br>
    <button type="button" class="btn btn-success tombolTambah" data-bs-toggle="modal" data-bs-target="#formModal">
        Join Participate
    </button>
    <a href="<?= BASEURL;?>/Home"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#formModal">
        logout
    </button></a>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Phone</th>
                <th scope="col">Alamat</th>
                <th scope="col">Delete Data</th>
                <th scope="col">Update Data</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['prt'] as $prt):?>
            <tr >
                <td scope="row"><?= $prt['nama'];?></td>
                <td><?= $prt['phone'];?></td>
                <td><?= $prt['alamat'];?></td>
                <td><a href="<?= BASEURL;?>/participant/delete/<?= $prt['id'];?>" class="badge bg-danger" onclick="return confirm('yakin hapus data?');">Delete</a></td>
                <td><a href="<?= BASEURL;?>/participant/update/<?= $prt['id'];?>" class="badge bg-success tampilModalUbah"
                 data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $prt['id'];?>" >Update</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
