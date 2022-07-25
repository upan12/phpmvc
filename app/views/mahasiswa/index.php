<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Siswa
        </button>  
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Siswa.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
      </div>
      </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <h3>
                Daftar Siswa
            </h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs ) : ?>
                  <li class="list-group-item">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right tampilModalUbah ml-2" data-toggle="modal" data-target="#formModal" data-id="<?=$mhs['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-2">detail</a>
                  </li>
                <?php endforeach; ?>
            </ul>
            
            
            
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
    <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="nisn">NISN</label>
            <input type="number" class="form-control" id="nisn" name="nisn">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="MM">MM</option>
            <option value="APH">APH</option>
            <option value="AK">AK</option>
            <option value="TB">TB</option>
            </select>
        </div>
                
        
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
    </div>
    </div>
  </div>
</div> 