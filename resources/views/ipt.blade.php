<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ipt.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>FORMGATE | IPB TRAINING</title>

</head>
<body>
  
  <div>
    <nav class="navbar navbar-white bg-white">
      <!-- Navbar content -->   
      <a class="navbar-brand">
          <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="image">
      </a>
      <nav class="navbar navbar-expand-lg navbar-white bg-white">
  <!--<a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>-->
      <li class="nav">
        <a class="nav-link" href="ipp.html"><u>IPP</u></a>
      </li>

      <li class="nav">
        <a class="nav-link" href="ipt.html"><u>IPT</u></a>
      </li>

      <li class="nav">
        <a class="nav-link" href="ipr.html"><u>IPR</u></a>
      </li> 

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ipp.html">IPP</a>
          <a class="dropdown-item" href="ipr.html">IPR</a>
          <a class="dropdown-item" href="ipt.html">IPT</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
<br>
<div>

<div class="col-sm-12 col-lg-7">
    <h5 class="judul">
    <strong>Individual Performance Tracking</strong>
    </h5>
</div>
<form>
    <div class="col-sm-12 col-lg-3">
        <label class="text">Nama Pegawai:</label>
    </div>

      <div class="col-sm-12 col-lg-3">
          <label class="text">Tahun 		 :</h1>
      </div>

    <div class="col-sm-12 col-lg-3">
        <label class="text">Bulan 		 :</h1>
          <p></p>
          <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Bulan
               </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Januari</a>
              <a class="dropdown-item" href="#">Februari</a>
              <a class="dropdown-item" href="#">Maret</a>
              <a class="dropdown-item" href="#">April</a>
              <a class="dropdown-item" href="#">Mei</a>
              <a class="dropdown-item" href="#">Juni</a>
              <a class="dropdown-item" href="#">Juli</a>
              <a class="dropdown-item" href="#">Agustus</a>
              <a class="dropdown-item" href="#">September</a>
              <a class="dropdown-item" href="#">Oktober</a>
              <a class="dropdown-item" href="#">November</a>
              <a class="dropdown-item" href="#">Desember</a>
            </div>
</div>
    </div>

    <div class="col-sm-12 col-lg-3">
        <label class="text">Nama Atasan  :</h1>
    </div>
    <hr>
</form>

<center>
<table class="table col-md-11">
  <thead class="thead-light">
    <tr>
      <th scope="col">Perspektif</th>
      <th scope="col">Sasaran</th>
      <th scope="col">Ukuran</th>
      <th scope="col">Target</th>
      <th scope="col">Capaian</th>
      <th scope="col">Selisih</th>
      <th scope="col">Cacatan s\d bulan</th>
      <th scope="col">Deklarasi Perbaikan</th>
      <th scope="col">Rencana Aksi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-dark bi bi-pencil-square "><i class="fa fa-pencil-alt"></i></button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-dark bi bi-pencil-square "><i class="fa fa-pencil-alt"></i></button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-dark bi bi-pencil-square "><i class="fa fa-pencil-alt"></i></button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-dark bi bi-pencil-square "><i class="fa fa-pencil-alt"></i></button></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-dark bi bi-pencil-square "><i class="fa fa-pencil-alt"></i></button></td>
    </tr>
  </tbody>
</table>
</center>

<center>
	<div class="col-sm-12 col-lg-6">
	<div class="text">
    <p>Ditetapkan pada : tt\bb\th </p>
    <br>
    <p>Disetujui oleh : </p>
    
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">Nama Pegawai</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Nama Atasan</label>
</div>


</div>
</div>
	</div>
</div>
</center>

</body>
</html>