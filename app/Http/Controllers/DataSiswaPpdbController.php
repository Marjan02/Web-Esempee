<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DataSiswaPpdbController extends Controller
{
    public function index()
    {
        return view('ppdb.index',[
            'title' => 'Register PPDB'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelamin' => 'required',
            'nisn' => 'required|unique:students',
            'nik' => 'required|unique:students',
            'asalsekolah' => 'required',
            'lahir' => 'required',
            'email' => 'required|unique:students',
            'no_hp' => 'required',
            'namaortu' => 'required',
            'alamat' => 'required',
            'hportu' => 'required',
        ]);

        Student::create($request->all());

        return redirect('success')->with('success', '<b>Berhasil Melakukan Pendaftaran!</b>');
    }

    public function success()
    {
        return view('ppdb.success');
    }
}
