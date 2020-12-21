<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Pdf</title>


<style>
/* @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap'); */
/* @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap'); */
/*sertifikat*/

@font-face {
    font-family: 'Playfair Display';
    src: url({{ storage_path('fonts\PlayfairDisplay-VariableFont_wght.ttf') }}) format("truetype");
    font-weight: 400; // use the matching font-weight here ( 100, 200, 300, 400, etc).
    font-style: normal; // use the matching font-style here
}

@page { margin: 0px; }


.certiloka{
  position: relative;
  float: center;
}

.sertifikat{
  width: 1000px;
  height: 700px;
}

.name{
  position: absolute;
  top: 230px;
  left: 25%;
  right: 25%;
  font-family: 'Playfair Display';
  font-size: 35px;
  }

.kursus{
  position: absolute;
  top: 310px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 20px;
  }

.event{
  position: absolute;
  top: 340px;
  left: 10%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  width: 800px
  }

.date{
  position: absolute;
  top: 400px;
  left: 26%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 18px;
  color: #737373;
  font-style: italic;
  }

.qr{
  position: absolute;
  width: 120px;
  height: 120px;
  top: 490px;
  left: 44%;
}

.online {

    /* margin-top: 100px; */
}
.code{
  position: absolute;
  top: 649px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;
  }

/*modul*/
.moduloka{
  position: relative;
  float: center;
}

.modul{
  width: 1000px;
  height: 700px;
  margin: 0.1px;
}

.skpb{
    position: absolute;
  top: 170px;
  left: 25%;
  right: 25%;
  font-family: 'Nunito', sans-serif;
  font-size: 14px;
  color: #737373;
  font-style: italic;
  }

.modul1{
  /* position: absolute; */
  /* top: 249px;*/
  left: 75%;
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  color: #737373;

  }

.menit1{
  /* position: absolute;
  top: 235px;
  left: 410%; */
  font-family: 'Nunito', sans-serif;
  font-size: 16px;
  display: inline-block;
  color: #737373;
  }



/*button*/
.btn {
  line-height: 30px;
  padding: 0 35px;
  cursor: pointer;
  background: #60C8DA;
  font-size: 20px;
  font-family: 'Nunito', sans-serif;
  color: #fff;
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
}

.btn--radius {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

.btn--radius-2 {
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
}
html { margin: 0px}
body { margin: 0px; }
h1 { font-size: 1.5em; }
</style>

</head>
<body>

        <center><img class="sertifikat" src="{{ public_path('Design/image/sertifikat.png')}}"></center>
        <center><p class="name" ><b>{{$participant->name}}</b></label></center>
        <center><p class="event"><b>{{$product->training_title}}</b></label></center>
        <center><p class="date"><b>{{$data->tanggal}}</b></label></center>
        <center><img class="qr" src="https://chart.apis.google.com/chart?cht=qr&chs=350x350&chld=l|1&chl={{URL::full()}}"> </center>
        <center><p class="code"><b>{{$data->sertifikat_number}}</b></label></center>
<div class="moduloka">
    <center><img class="modul" src="{{ public_path('Design/image/modul1.png') }}" /></center>
    <center><p class="skpb">SKPB Point with the Assignment Number:   {{$data->nomor_ketetapan_point}} {{$data->sertifikat_point}}  Point SKPB</label></center>
        <table style="position: absolute; top: 280px; margin:auto; left:15%" >
            <tbody>
            @php
                $i = 1;
            @endphp
           @foreach ($product->topic as $topik)
                <tr>
                    <td width="470" style="margin-bottom: 20px; padding-bottom: 20px;">
                        {{-- <p class="modul{{$i}}" > --}}
                        <label class="modul1">{{$topik->topic_name}}</label>
                        {{-- <p class="menit{{$i}}"> --}}
                    </td>
                    <td  width="300">
                        <label class="menit1">{{$topik->duration}} Menit</label>
                    </td>
                </tr>
            @php
                $i++
            @endphp
            @endforeach
            </tbody>
        </table>
</div>

</body>
</html>



