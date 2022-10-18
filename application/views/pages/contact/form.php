<main class="container" role="main">
    <div class="row">
        <div class="col-md-12 mx-auto mb-5 mt-5">
            <div class="card">
                <div class="card-header">
                    Formulir Contact
                </div>
                <div class="card-body">
                    <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                    <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                    <div class="mb-3">
                        <label>Nama</label>
                        <?= form_input('nama', $input->nama, ['class' => 'form-control', 'id' => 'nama', 'required' => true]) ?>
                        <?= form_error('nama') ?>

                    </div>
                    <div class="mb-3">
                        <label>Perusahaan</label>
                        <?= form_dropdown('id_customer', getDropdownList('customer', ['id', 'perusahaan']), $input->id_customer, ['class' => 'form-control']) ?>
                        <?= form_error('id_Customer') ?>

                    </div>
                    <div class="mb-3">
                        <label>Telpon</label>
                        <?= form_input('telpon', $input->telpon, ['class' => 'form-control', 'id' => 'telpon', 'required' => true]) ?>
                        <?= form_error('telpon') ?>

                    </div>
                    <div class="mb-3">
                        <label>Kelamin</label>
                        <div class="form-check form-check-inline">
                            <?= form_radio(['name' => 'kelamin', 'value' => 1, 'checked' => $input->kelamin == 1 ? true : false, 'class' => 'form-check-input']) ?>
                            <label for="" class="form-check-label">Laki laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <?= form_radio(['name' => 'kelamin', 'value' => 0, 'checked' => $input->kelamin == 0 ? true : false, 'class' => 'form-chaked-input']) ?>
                            <label for="" class="form-check-label">Perempuan</label>
                        </div>
                        <?= form_error('kelamin') ?>

                    </div>
                    <div class="mb-3">
                        <label>Jabatan</label>
                        <?= form_input('jabatan', $input->jabatan, ['class' => 'form-control', 'id' => 'jabatan', 'required' => true]) ?>
                        <?= form_error('jabatan') ?>

                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <?= form_input('email', $input->email, ['class' => 'form-control', 'id' => 'email', 'required' => true]) ?>
                        <?= form_error('email') ?>

                    </div>
                    <div class="mb-3">
                        <label>Gambar</label>
                        <br>
                        <?= form_upload('image') ?>
                        <?php if ($this->session->flashdata('image_error')) : ?>
                            <small class="form-text text-denger"><?= $this->session->flashdata('image_error') ?></small>
                        <?php endif ?>
                        <?php if ($input->image) : ?>
                            <img src="<?= base_url("/images/product/$input->image") ?>" alt="" height="150">
                        <?php endif ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>