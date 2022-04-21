<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">modal</button>
            <h3>Daftar Mahasiswa</h3>
            <div class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a>
                    </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
          </div>                
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" name="nrp" id="nrp">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Teknik Sipil">Teknik Sipil</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>