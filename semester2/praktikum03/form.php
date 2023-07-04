<?php
$ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
$ar_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skills'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    $skor = 0;
    foreach ($skills as $s) {
        if ($s == "HTML") {
            $skor += 10;
        }
        if ($s == "CSS") {
            $skor += 10;
        }
        if ($s == "JavaScript") {
            $skor += 20;
        }
        if ($s == "RWD Bootstrap") {
            $skor += 20;
        }
        if ($s == "PHP") {
            $skor += 30;
        }
        if ($s == "Python") {
            $skor += 30;
        }
        if ($s == "Java") {
            $skor += 50;
        }
    }
    $skor_skill = $skor;

    if ($skor >= 100 && $skor <= 170) {
        $kategori_skill = "Sangat Baik";
    } else if ($skor >= 60 && $skor < 100) {
        $kategori_skill = "Baik";
    } else if ($skor >= 40 && $skor < 60) {
        $kategori_skill = "Cukup";
    } else if ($skor > 0 && $skor < 40) {
        $kategori_skill = "Kurang";
    } else {
        $kategori_skill = "Tidak Memadai";
    }
}

require_once 'header.php';
?>
<div class="container">
    <h1>Form Registrasi IT Club Data Science</h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form method="POST" action="form.php">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adn"></i>
                        </div>
                    </div>
                    <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book"></i>
                        </div>
                    </div>
                    <input id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" type="text" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="L" required="required">
                    <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="P" required="required">
                    <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="prodi" name="prodi" class="custom-select" required="required">
                    <option value="0">Pilih Program Studi</option>
                    <?php
                    foreach ($ar_prodi as $k => $v) {
                        echo '<option value="' . $k . '">' . $v . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Web &amp; Programming</label>
            <div class="col-8">
                <!-- <?php
                        $no = 1;
                        foreach ($ar_skill as $k => $v) {
                            echo '<div class="custom-control custom-checkbox custom-control-inline">';
                            echo '<input name="skills[]" id="skill_' . $no++ . '" type="checkbox" class="custom-control-input" value="' . $k . '">';
                            echo '<label class="custom-control-label">' . $k . '</label>';
                            echo '</div>';
                        }
                        ?> -->
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="skills_0" type="checkbox" class="custom-control-input" value="HTML" required="required">
                    <label for="skills_0" class="custom-control-label">HTML</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="skills_1" type="checkbox" class="custom-control-input" value="CSS" >
                    <label for="skills_1" class="custom-control-label">CSS</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="skills_2" type="checkbox" class="custom-control-input" value="JavaScript" >
                    <label for="skills_2" class="custom-control-label">JavaScript</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="skills_3" type="checkbox"  class="custom-control-input" value="RWD Bootstrap">
                    <label for="skills_3" class="custom-control-label">RWD Bootstrap</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="skills_4" type="checkbox"  class="custom-control-input" value="PHP">
                    <label for="skills_4" class="custom-control-label">PHP</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="skills_5" type="checkbox"  class="custom-control-input" value="Python">
                    <label for="skills_5" class="custom-control-label">Python</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skills[]" id="skills_6" type="checkbox"  class="custom-control-input" value="Java">
                    <label for="skills_6" class="custom-control-label">Java</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
            <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                    <option value="0">Pilih Tempat Domisili</option>
                    <?php
                    foreach ($ar_domisili as $k) {
                        echo '<option value="' . $k . '">' . $k . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <input id="email" name="email" placeholder="Masukan Email" type="text" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <hr>

    <?php

    if (isset($_POST['submit'])) {
        echo "NIM : <b>" . $nim . "</b><br>";
        echo "Nama Lengkap : <b>" . $nama_lengkap . "</b><br>";
        echo "Jenis Kelamin : <b>" . $jenis_kelamin . "</b><br>";
        echo "Program Studi : <b>" . $prodi . "</b><br>";
        echo "Skill : ";
        foreach ($skills as $s) {
            echo "<b>" . $s . ", </b>";
        }
        echo "<br>";
        echo "Skor Skill :<b>" . $skor_skill . "</b><br>";
        echo "Kategori Skill :<b>" . $kategori_skill . "</b><br>";
        echo "Tempat Domisili :<b>" . $domisili . "</b><br>";
        echo "Email :<b>" . $email . "</b><br><br>";
    }

    ?>
</div>
<?php require_once 'footer.php'; ?>