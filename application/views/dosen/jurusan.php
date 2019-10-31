<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                    <strong>Gagal Input!</strong> Cek Kembali Form Input.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
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
                                    <th>NID</th>
                                    <th>Nama Dosen</th>
                                    <th>E-mail</th>
                                    <th>No. Telp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($dosen as $data) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $data['id_dosen'] ?></td>
                                        <td><?= $data['nama_dosen'] ?></td>
                                        <td><?= data_open($data['email_dosen']) ?></td>
                                        <td><?= $data['no_telp_dosen'] ?></td>
                                        <td><?= $data['alamat_dosen'] ?></td>
                                        <td>
                                            <button data-toggle="modal" data-target="#UbahDosen" class="btn btn-primary btn-sm UbahDosen" data-id="<?= $data['id_dosen'] ?>" data-nama="<?= $data['nama_dosen'] ?>" data-email="<?= data_open($data['email_dosen']) ?>" data-telp="<?= $data['no_telp_dosen'] ?>" data-alamat="<?= $data['alamat_dosen'] ?>">Ubah</button>
                                            <a href="<?= base_url('dosen/jurusan/hapus/') . $data['id_dosen'] ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
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
            <form action="<?= base_url('dosen/jurusan') ?>" method="post" id="formdosenpembimbing">
                <div class="modal-body">
                    <div class="form-group has-danger">
                        <label for="id">ID Dosen</label>
                        <input type="text" name="id" class="form-control" id="id" value="<?= set_value('id') ?>" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Dosen</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= set_value('nama') ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email') ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="no-telp">No Telpon</label>
                        <input type="text" name="notelp" class="form-control" id="no-telp" value="<?= set_value('no-telp') ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Nama Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <?php foreach ($jurusan as $data) : ?>
                                <option value="<?= $data['id_jurusan'] ?>"><?= $data['nama_jurusan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
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
<div class="modal fade" id="UbahDosen" role="dialog" aria-labelledby="UbahDosenTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UbahDosenTitle">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('dosen/jurusan/ubah') ?>" method="post" id="formubahdosenpembimbing">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="FormDosenId">NID</label>
                        <input type="text" name="id" class="form-control" id="FormDosenId" readonly>
                    </div>
                    <div class="form-group">
                        <label for="FormDosenNama">Nama Dosen</label>
                        <input type="text" name="nama" class="form-control" id="FormDosenNama" autofocus autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="FormDosenEmail">Email</label>
                        <input type="text" name="email" class="form-control" id="FormDosenEmail" autofocus autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="FormDosenTelp">No Telp</label>
                        <input type="text" name="notelp" class="form-control" id="FormDosenTelp" autofocus autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="FormDosenAlamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="FormDosenAlamat"></textarea>
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