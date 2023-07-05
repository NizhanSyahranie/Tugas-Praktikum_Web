<?php require_once('header.php'); ?>
<h3 class="mb-3">
    <?= (empty($edit)) ? "Tambah Pelanggan" : "Edit Pelanggan"; ?>
</h3>
<div class="card shadow">
    <div class="card-body">
        <form method="POST" action="proses_pelanggan.php">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-anchor"></i>
                            </div>
                        </div>
                        <input id="kode" required name="kode" type="text" class="form-control" value="<?= (isset($row) ? $row['kode'] : ''); ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-adjust"></i>
                            </div>
                        </div>
                        <input id="nama" required name="nama" type="text" class="form-control" value="<?= (isset($row) ? $row['nama'] : ''); ?>">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="form-check">
                        <input id="jk" name="jk" required value="L" <?= (isset($row) ? ($row['jk'] == "L" ? 'checked' : '') : ''); ?> type="radio" class="form-check-input position-static"> Laki-Laki
                    </div>
                    <div class="form-check">
                        <input id="jk" name="jk" value="P" <?= (isset($row) ? ($row['jk'] == "P" ? 'checked' : '') : ''); ?> type="radio" class="form-check-input position-static"> Perempuan
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-up"></i>
                            </div>
                        </div>
                        <input id="tmp_lahir" required name="tmp_lahir" value="<?= (isset($row) ? $row['tmp_lahir'] : ''); ?>" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                        <input id="tgl_lahir" required name="tgl_lahir" value="<?= (isset($row) ? $row['tgl_lahir'] : ''); ?>" type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                        <input id="email" required name="email" value="<?= (isset($row) ? $row['email'] : ''); ?>" type="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="kartu_id" class="col-4 col-form-label">Kartu</label>
                <div class="col-8">
                    <select id="kartu_id" name="kartu_id" class="custom-select" required>
                        <option value="">Pilih Kartu</option>
                        <?php foreach ($rskartu_id as $rowkartu_id) :  ?>
                            <option value="<?= $rowkartu_id['id'] ?>"><?= $rowkartu_id['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <?php
                    //melakukan validasi form 
                    $button = (empty($edit)) ? "Simpan" : "Update";
                    ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                    <input type="hidden" name="idedit" value="<?= $edit ?>">
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once('footer.php'); ?>
<?php if (isset($row)) : ?>
    <script>
        $("#kartu_id").val('<?= $row['kartu_id'] ?>');
    </script>
<?php endif; ?>