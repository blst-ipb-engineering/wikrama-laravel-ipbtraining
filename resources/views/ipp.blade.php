<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/ipp.css')}}">
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
        <a class="nav-link" href="{{ route('ipp') }}"><u>IPP</u></a>
      </li>
      <li class="nav">
        <a class="nav-link" href="{{ route('ipt') }}"><u>IPT</u></a>
      </li>
      <li class="nav">
        <a class="nav-link" href="{{ route('ipr') }}"><u>IPR</u></a>
      </li>
      <!-- <li class="nav dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Output Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">IPP</a>
          <a class="dropdown-item" href="#">IPR</a>
          <a class="dropdown-item" href="#">IPT</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>
</div>
<br>


<div class="col-sm-12 col-lg-6">
    <h1 class="judul">
    <strong>Individual Performance Plan</strong>
  </h1>
</div>
<form>
    <div class="col-sm-12 col-lg-3">
        <label class="text">Nama Pegawai:</label>
    </div>
      <div class="col-sm-12 col-lg-3">
          <label class="text">Tahun        :</h1>
      </div>
    <div class="col-sm-12 col-lg-3">
        <label class="text">Bulan          :</h1>
    </div>
    <div class="col-sm-12 col-lg-3">
        <label class="text">Nama Atasan   :</h1>
    </div>
</form>
<hr>
<center>
  
<table class="table col-md-11">
	 <thead class="thead-light" align="center">
    <tr>
      <th  scope="col" rowspan="2">Perspektif
        <button class="btn_style btn_ipb" data-toggle="modal" data-target="#modal1">+</button>

  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <form action="/perspektif" method="POST">
    {{ csrf_field () }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal1Label">Input Data</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h3>Perspektif</h3>
        <input type="text" name="perspektif" class="form-control" placeholder="Ketik Perspektif" required>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
      </div>

    </div>
    </form>
    
  </div>
</div></th>

  <th  scope="col" rowspan="2">Sasaran
    <button class="btn_style btn_ipb" data-toggle="modal" data-target="#modal2">+</button>

  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
  <form action="/sasaran" method="POST">
    {{ csrf_field () }}
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modal2Label">Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>

       </div>
      <!-- Modal body -->
      <div class="modal-body">
        <h3>Perspektif</h3>
        <select name="perspektif" id="perspektif" class="form-control input-lg dynamic" data-dependent="">
          <option value="">Pilih Perspektif</option>
          @foreach($perspektif as $temp)
          <option value=" {{ $temp->id }} ">{{ $temp->nama_perspektif }}</option>
          @endforeach
        </select>
        <h3>Sasaran</h3>
        <input type="text" name="sasaran" class="form-control" placeholder="Ketik Sasaran" required>
      </div>
      

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
      </div>

    </div>
    </form>
  </div>
</div></th>

  <th scope="col" rowspan="2">Ukuran
    <button class="btn_style btn_ipb" data-toggle="modal" data-target="#modal3">+</button>

  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal3Label">Input Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>      
        </div>

    <!-- Modal body -->
      <div class="modal-body">
        <h3>Sasaran</h3>
        <select name="sasaran" id="sasaran" class="form-control input-lg dynamic" data-dependent="">
          <option value="">Pilih Sasaran</option>

        </select>
        <h3>Ukuran</h3>
        <input type="text" name="ukuran" class="form-control" placeholder="Ketik Ukuran" required>

        <h3>Bobot</h3>
        <input type="text" name="bobot" class="form-control" placeholder="Ketik Bobot" required>

        <h3>Target</h3>
        <input type="text" name="target" class="form-control" placeholder="Ketik target" required>

        <h3>Tidak Mencapai</h3>
        <input type="text" name="tidak_mencapai" class="form-control" placeholder="Ketik Tidak Mencapai" required>

        <h3>Mencapai</h3>
        <input type="text" name="mencapai" class="form-control" placeholder="Ketik Mencapai" required>

        <h3>Melebihi</h3>
        <input type="text" name="melebihi" class="form-control" placeholder="Ketik Melebihi" required>

        <h3>Nama Pegawai</h3>
        <select name="nama_pegawai" id="nama_pegawai" class="form-control input-lg dynamic" data-dependent="">
          <option value="">Pilih Nama Pegawai</option>
        </select>

        <h3>Tahun</h3>
        <input type="number" name="tahun" class="form-control" placeholder="Ketik Tahun" required>

        <h3>Nama Atasan</h3>
        <select name="nama_atasan" id="nama_atasan" class="form-control input-lg dynamic" data-dependent="">
          <option value="">Pilih Nama Atasan</option>
        </select>

      </div>
      

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Save</button>
      </div>

    </div>
  </div>
</div>


  <th scope="col" rowspan="2">Bobot</th>
  <th scope="col" colspan="3">Indikator Ketercapaian</th>
  </tr>
  
  <th>Mencapai</th>
  <th>Tidak Mencapai</th>
  <th>Melebihi</th>
  
    </thead>

    <tbody>
    @foreach($sasars as $pers)
    <tr>
    <td>
      <center>{{ $pers->nama_perspektif }}</center>
    </td>

    <td>
    <center><p>{{ $pers->nama_sasaran }}</p></center>
    </td>

    <td>
    <center><p>{{ $pers->ketik_ukuran }}</p></center>
    </td>

    <td>
    <center><p>{{ $pers->ketik_bobot }}</p></center>
    </td>

    <td>
    <center><p>{{ $pers->ketik_capai }}</p></center>
    </td>

    <td>
    <center><p>{{ $pers->ketik_tidak_capai }}</p></center>
    </td>

    <td>
    <center><p>{{ $pers->ketik_melebihi}}</p></center>
    </td>



    </tr>
    @endforeach
    </tbody>
  </table>
</div>
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