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
                                    <th>Username</th>
                                    <th>Nama Admin</th>
                                    <th>E-mail</th>
                                    <th>No. Telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($admin as $data) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['username_admin'] ?></td>
                                        <td><?= $data['nama_admin'] ?></td>
                                        <td><?= data_open($data['email_admin']) ?></td>
                                        <td><?= $data['no_telp_admin'] ?></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm TombolUbahAdmin" data-toggle="modal" data-target="#UbahAdmin" data-username="<?= $data['username_admin'] ?>" data-nama="<?= $data['nama_admin'] ?>" data-email="<?= data_open($data['email_admin']) ?>" data-telp="<?= $data['no_telp_admin'] ?>">Ubah</button>
                                            <a href="<?= base_url('admin/hapus/') . $data['username_admin'] ?>" class="btn btn-danger btn-sm hapus">Hapus</button>
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
            <form action="<?= base_url('admin') ?>" method="post" id="formadmin">
                <div class="modal-body">
                    <div class="form-group has-danger">
                        <label for="id">Username</label>
                        <input type="text" name="username" class="form-control" value="<?= set_value('username') ?>" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Admin</label>
                        <input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="no-telp">No Telpon</label>
                        <input type="text" name="notelp" class="form-control" value="<?= set_value('no-telp') ?>" autocomplete="off">
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
<div class="modal fade" id="UbahAdmin" role="dialog" aria-labelledby="UbahAdminTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UbahAdminTitle">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/ubah') ?>" method="post" id="formubahdosenpembimbing">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="FormDosenId">Username</label>
                        <input type="text" name="username" class="form-control" id="FormAdminUsername" readonly>
                    </div>
                    <div class="form-group">
                        <label for="FormDosenNama">Nama admin</label>
                        <input type="text" name="nama" class="form-control" id="FormAdminNama" autofocus autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="FormDosenEmail">Email</label>
                        <input type="text" name="email" class="form-control" id="FormAdminEmail" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="FormDosenTelp">No Telp</label>
                        <input type="text" name="notelp" class="form-control" id="FormTelpAdmin" autocomplete="off">
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