<main class="container" role="main">
    <div class="row">
        <div class="col-md-12 mx-auto mb-5 mt-5">
            <div class="card">
                <div class="card-header">
                    Formulir Customer
                </div>
                <div class="card-body">
                    <?= form_open($form_action, ['method' => 'POST']) ?>
                    <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                    <div class="mb-3">
                        <label>Perusahaan</label>
                        <?= form_input('perusahaan', $input->perusahaan, ['class' => 'form-control', 'id' => 'perusahaan', 'required' => true]) ?>
                        <?= form_error('perusahaan') ?>

                    </div>
                    <div class="mb-3">
                        <label>Alamat Perusahaan</label>
                        <?= form_input('alamat_perusahaan', $input->alamat_perusahaan, ['class' => 'form-control', 'id' => 'alamat_perusahaan', 'required' => true]) ?>
                        <?= form_error('alamat_perusahaan') ?>

                    </div>
                    <div class="mb-3">
                        <label>No. Telpon</label>
                        <?= form_input('no_telp', $input->no_telp, ['class' => 'form-control', 'id' => 'no_telp', 'required' => true]) ?>
                        <?= form_error('no_telp') ?>

                    </div>
                    <div class="mb-3">
                        <label>No. Fax</label>
                        <?= form_input('no_fax', $input->no_fax, ['class' => 'form-control', 'id' => 'no_fax', 'required' => true]) ?>
                        <?= form_error('no_fax') ?>

                    </div>
                    <div class="mb-3">
                        <label>Sektor Usaha</label>
                        <?= form_input('sektor_usaha', $input->sektor_usaha, ['class' => 'form-control', 'id' => 'sektor_usaha', 'required' => true]) ?>
                        <?= form_error('sektor_usaha') ?>

                    </div>
                    <div class="mb-3">
                        <label>Negara</label>
                        <?= form_input('negara', $input->negara, ['class' => 'form-control', 'id' => 'negara', 'required' => true]) ?>
                        <?= form_error('negara') ?>

                    </div>
                    <div class="mb-3">
                        <label>Lokasi</label>
                        <?= form_input('lokasi', $input->lokasi, ['class' => 'form-control', 'id' => 'lokasi', 'required' => true]) ?>
                        <?= form_error('lokasi') ?>

                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>

                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>