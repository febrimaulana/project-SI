<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-close">
                    <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow">
                            <a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                            <a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                            <a href="#" class="dropdown-item edit"> <i class="fa fa-print"></i>Print</a>
                        </div>
                    </div>
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
                                    <th>Nama Aktor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($menu as $data) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $data['nama_title_menu'] ?></td>
                                        <td>
                                            <button class="btn btn-primary">Ubah</button>
                                            <button class="btn btn-danger">Hapus</button>
                                            <button class="btn btn-warning">Akses</button>
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