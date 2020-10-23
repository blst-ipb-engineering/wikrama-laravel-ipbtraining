<?php

namespace App\Http\Controllers;

use App\Models\Respon;
use App\Models\Training;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
  public function index()
  {
    $trainings = Training::all();
    // Tanpa Judul Training dan Rating
    $pertanyaan = [
      [
        'imageUrl' =>  '/images/pertanyaan/nama.png',
        'name' => 'nama',
        'label' => 'Nama',
        'type' => 'text',
      ],
      [
        'imageUrl' =>  '/images/pertanyaan/no-rek.png',
        'name' => 'noRek',
        'label' => 'Bank, nomor rekening, a.n nama',
        'type' => 'text',
      ],
      [
        'imageUrl' =>  '/images/pertanyaan/email.png',
        'name' => 'email',
        'label' => 'E-Mail',
        'type' => 'email',
      ],
      [
        'imageUrl' =>   '/images/pertanyaan/no-telp.png',
        'name' => 'noTelp',
        'label' => 'Nomor Handphone (WA)',
        'type' => 'number',
      ],
    ];

    return view('kuisioner', compact(['pertanyaan', 'trainings']));
  }

  public function simpan(Request $req)
  {
    $respon = new Respon();
    $respon->training_id = $req['judulTraining'];
    $respon->nama = $req['nama'];
    $respon->no_rek = $req['noRek'];
    $respon->email = $req['email'];
    $respon->no_telp = $req['noTelp'];
    $respon->fasilitas = $req['fasilitas'];
    $respon->fasilitas_komen = $req['fasilitasKomen'];
    $respon->attitude = $req['attitude'];
    $respon->attitude_komen = $req['attitudeKomen'];
    $respon->kinerja = $req['kinerja'];
    $respon->kinerja_komen = $req['kinerjaKomen'];
    $respon->saran = $req['saran'];

    $respon->save();
    return redirect()->route('selesai');
  }
}
