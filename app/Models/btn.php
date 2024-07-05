<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class btn extends Model
{
    public $nama = "zeus ex machina";

    public $mahasiswa = [
        [
            'id' => '1',
            'nama' => "ikrar aprianto",
            'nim' => 2065028
        ],
        [
            'id' => '2',
            'nama' => "sarif",
            'nim' => 2065003
        ],
        [
            'id' => '3',
            'nama' => "agus saputra kambea",
            'nim' => 2065128
        ],
    ];

    public function getMahasiswa(){
        return collect($this->mahasiswa);
    //     return $this->mahasiswa;
    }

    public function getMahasiswaDetail($id){
        $mahasiswa = $this->getMahasiswa();
        return $mahasiswa->firstWhere('id', $id); 
    }

    public function getNama(){
        return $this->nama;;
        // return self::$nama;
    }
}
