<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <span>Customer</span>
                    <a href="<?= base_url('customer/create') ?>" class="btn-secondary btn sm">Tambah</a>
                </div>

                <div class="card-body">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Fax</th>
                                <th scope="col">Sektor</th>
                                <th scope="col">Negara</th>
                                <th scope="col">Lokasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($content as $row) : $no++; ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $row->perusahaan ?></td>
                                    <td><?= $row->alamat_perusahaan ?></td>
                                    <td><?= $row->no_telp ?></td>
                                    <td><?= $row->no_fax ?></td>
                                    <td><?= $row->sektor_usaha ?></td>
                                    <td><?= $row->negara ?></td>
                                    <td><?= $row->lokasi ?></td>
                                    <td>
                                        <?= form_open("customer/delete/$row->id", ['method' => 'POST']) ?>
                                        <?= form_hidden('id', $row->id) ?>
                                        <a href="<?= base_url("customer/edit/$row->id") ?>"> Edit </a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')">Hapus</button>
                                        <?= form_close() ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>