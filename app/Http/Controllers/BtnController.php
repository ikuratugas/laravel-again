<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\btn;
use Illuminate\Database\Eloquent\Collection;

class BtnController extends Controller
{
    public function halamanUtama(){
        $nama = "ikura aprianto";
        return view('btn.utama', ["nama" => $nama]);
    }

    public function halamanTentang(){
        $objectku = new btn();
        $name = $objectku->getNama(); // Call the getNama method
        return view('btn.tentang', ["nama" => $name]); // Pass the data to the view
    }

    public function halamanMahasiswa(btn $instanceBtn){
        $mahasiswa = $instanceBtn->getMahasiswa(); 
        return view('btn.mahasiswa', ["mahasiswa" => $mahasiswa]);
    }

    public function halamanDetailMahasiswa($id){
        $mahasiswa = new btn();
        $mhs = $mahasiswa->getMahasiswaDetail($id);
        return view('btn.mahasiswadetail', ["mhs" => $mhs]);
    }
}