<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = "Ilham";
        $nim = "24029930001";
        $prodi = "Informatique";

        return view('mahasiswa.profil', compact('nama','nim','prodi'));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nama'=>'Ilham','nim'=>'24029930001','ipk'=>3.7],
            ['nama'=>'Fajar','nim'=>'24029930002','ipk'=>3.2],
            ['nama'=>'Indra','nim'=>'24029930003','ipk'=>2.8],
            ['nama'=>'Rina','nim'=>'24029930004','ipk'=>3.0],
            ['nama'=>'Sari','nim'=>'24029930005','ipk'=>1.9],
        ];
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mahasiswa = [
            '24029930001'=>['nama'=>'Ilham','ipk'=>3.7],
            '24029930002'=>['nama'=>'Fajar','ipk'=>3.2],
            '24029930003'=>['nama'=>'Indra','ipk'=>2.8],
        ];

        if(!array_key_exists($nim, $mahasiswa)) {
            abort(404);
        }

        return view('mahasiswa.detail', ['nim'=>$nim, 'data'=>$mahasiswa[$nim]]);
    }
}

