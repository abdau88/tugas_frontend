<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    private $apiBaseUrl = 'http://localhost:8080/mahasiswa';

    public function index()
    {
        $response = Http::get($this->apiBaseUrl);
        $mahasiswa = $response->json();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        Http::post($this->apiBaseUrl, $request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function edit($nim)
    {
        $response = Http::get("{$this->apiBaseUrl}/{$nim}");
        $mahasiswa = $response->json();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $nim)
    {
        Http::put("{$this->apiBaseUrl}/{$nim}", $request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui');
    }

    public function destroy($nim)
    {
        Http::delete("{$this->apiBaseUrl}/{$nim}");
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
