<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    public function pKriteria()
    {
        $data = [
            'title' => "Halaman Data Penilaian Kriteria",
        ];

        return view('Count.vData_pKriteria', $data);
    }
    public function bKriteria()
    {
        $data = [
            'title' => "Halaman Data Bobot Kriteria",
        ];

        return view('Count.vData_bKriteria', $data);
    }
    public function aPenilaian()
    {
        $data = [
            'title' => "Halaman Data Analisis Penilaian",
        ];

        return view('Count.vData_aPenilaian', $data);
    }
    public function tData_bKriteria()
    {
        $data = [
            'title' => "Halaman Tambah Data bKriteria",
        ];

        return view('Count.Tambah.vTambah_bKriteria', $data);
    }
    public function uData_bKriteria()
    {
        $data = [
            'title' => "Halaman Update Data bKriteria",
        ];

        return view('Count.Update.vUpdate_bKriteria', $data);
    }
}
