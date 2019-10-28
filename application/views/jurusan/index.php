<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card p-3">
                <div class="card-close">
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i></button>
                </div>
                <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Table <?= $title; ?></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($jurusan as $data) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nama_jurusan'] ?></td>
                                        <td>
                                            <button data-toggle="modal" data-target="#UbahJurusan" class="btn btn-primary btn-sm TombolJurusan" data-id="<?= $data['id_jurusan'] ?>" data-nama="<?= $data['nama_jurusan'] ?>">Ubah</button>
                                            <a href="<?= base_url('jurusan/hapus/') . $data['id_jurusan'] ?>" class="btn btn-danger btn-sm hapus">Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah -->
<div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('jurusan') ?>" method="post" id="formjurusan">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="aktor">Nama Jurusan</label>
                        <input type="text" name="nama" class="form-control" autofocus autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Ubah-->
<div class="modal fade" id="UbahJurusan" role="dialog" aria-labelledby="UbahJurusanTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UbahJurusanTitle">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('jurusan/ubah') ?>" method="post" id="formubahjurusan">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="FormAktorNama">Nama Title</label>
                        <input type="hidden" name="id" id="FormIdJurusan">
                        <input type="text" name="nama" class="form-control" id="FormNamaJurusan" autofocus autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>