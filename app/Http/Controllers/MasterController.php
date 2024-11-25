<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function dataGuru()
    {
        $data = [
            'title' => "Halaman Data Guru",
        ];

        return view('Master.vData_Guru', $data);
    }
    public function tdataGuru()
    {
        $data = [
            'title' => "Halaman Tambah Data Guru",
        ];

        return view('Master.Tambah.vTambah_dGuru', $data);
    }
    public function udataGuru()
    {
        $data = [
            'title' => "Halaman Update Data Guru",
        ];

        return view('Master.Update.vUpdate_dGuru', $data);
    }
    // public function hdataGuru()
    // {
    //     $data = [
    //         'title' => "Halaman Data Guru",
    //     ];

    //     return view('Master.vData_Guru', $data);
    // }


    public function dataKriteria()
    {
        $data = [
            'title' => "Halaman Data Kriteria",
        ];

        return view('Master.vData_Kriteria', $data);
    }
    public function tdataKriteria()
    {
        $data = [
            'title' => "Halaman Tambah Data Kriteria",
        ];

        return view('Master.Tambah.vTambah_dKriteria', $data);
    }
    public function udataKriteria()
    {
        $data = [
            'title' => "Halaman Update Data Kriteria",
        ];

        return view('Master.Update.vUpdate_dKriteria', $data);
    }


    public function dataPeriode()
    {
        $data = [
            'title' => "Halaman Data Periode",
        ];

        return view('Master.vData_Periode', $data);
    }
}
