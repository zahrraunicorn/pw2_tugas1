<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<h1>Form Registrasi IT Club Science</h1>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Informasi">Teknik Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Bogor">Bogor</option>
        <option value="Depok">Depok</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Hobi</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="hobi_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="hobi_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_2" type="checkbox" class="custom-control-input" value="JavaScript"> 
        <label for="hobi_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_3" type="checkbox" class="custom-control-input" value="RWD Boostrap"> 
        <label for="hobi_3" class="custom-control-label">RWD Boostrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_4" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="hobi_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_5" type="checkbox" class="custom-control-input" value="Phyton"> 
        <label for="hobi_5" class="custom-control-label">Phyton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_6" type="checkbox" class="custom-control-input" value="Java"> 
        <label for="hobi_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">IPK</label> 
    <div class="col-8">
      <input id="ipk" name="ipk" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$domisili = $_POST['domisili'];
$jk= $_POST['jk'];
$hobi = $_POST['hobi'];
$email = $_POST['email'];
$ipk = $_POST['ipk'];

//mencari status LULUS & TIDAK LULUS
function status($ipk){
    if ($ipk>=3){
        return "LULUS";
    }
    else{
        return "GAGAL";
    }
}
    $status = status($ipk);



//cetak
echo "<h2>Informasi yang Anda Kirim:</h2>";
echo "Nama: $nama <br>";
echo "NIM: $nim <br>";
echo "Program Studi: $prodi <br>";
echo "Domisili: $domisili <br>";
echo "Jenis Kelamin: $jk <br>";
echo "Hobi:";
foreach ($hobi as $value){
  echo "$value ,";
}
echo "<br>";
echo "Email: $email <br>"; 
echo "IPK: $ipk <br>"; 
echo "Status: $status";

?>