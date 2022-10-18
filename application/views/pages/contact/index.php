<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 mx-auto mt-5">
            <div class="card">
                <div class="card-header">
                    <span>Contact</span>
                    <a href="<?= base_url('contact/create') ?>" class="btn-secondary btn sm">Tambah</a>
                </div>

                <div class="card-body">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Telpon</th>
                                <th scope="col">Kelamin</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($content as $row) : $no++; ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <p>
                                            <img src="<?= $row->image ? base_url("images/contact/$row->image") : base_url("images/product/avatar.JPG") ?>" alt="" height="50">
                                            <?= $row->nama ?>
                                        </p>
                                    </td>
                                    <td><?= $row->perusahaan ?></td>
                                    <td><?= $row->telpon ?></td>
                                    <td><?= $row->kelamin ? 'Laki Laki' : 'Perempuan' ?></td>
                                    <td><?= $row->jabatan ?></td>
                                    <td><?= $row->email ?></td>
                                    <td>
                                        <?= form_open("contact/delete/$row->id", ['method' => 'POST']) ?>
                                        <?= form_hidden('id', $row->id) ?>
                                        <a href="<?= base_url("contact/edit/$row->id") ?>"> Edit </a>
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