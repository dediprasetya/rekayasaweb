<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return Mahasiswa::all();
    }

    public function store(Request $request)
    {
        return Mahasiswa::create($request->all());
    }

    public function show($nim)
    {
        return Mahasiswa::findOrFail($nim);
    }

    public function update(Request $request, $nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->all());

        return $mahasiswa;
    }

    public function destroy($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();

        return 204;
    }
}
