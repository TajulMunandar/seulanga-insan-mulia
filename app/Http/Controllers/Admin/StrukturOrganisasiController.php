<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturs = StrukturOrganisasi::orderBy('urutan')->paginate(15);
        return view('admin.struktur-organisasi.index', compact('strukturs'));
    }

    public function create()
    {
        return view('admin.struktur-organisasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
            'urutan' => 'required|integer|min:0',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . uniqid() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/struktur', $fileName);
            $data['foto'] = 'struktur/' . $fileName;
        }

        StrukturOrganisasi::create($data);

        return redirect()->route('admin.struktur-organisasi.index')->with('success', 'Struktur Organisasi berhasil ditambahkan.');
    }

    public function edit(StrukturOrganisasi $strukturOrganisasi)
    {
        return view('admin.struktur-organisasi.edit', compact('strukturOrganisasi'));
    }

    public function update(Request $request, StrukturOrganisasi $strukturOrganisasi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string',
            'urutan' => 'required|integer|min:0',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($strukturOrganisasi->foto && Storage::exists('public/' . $strukturOrganisasi->foto)) {
                Storage::delete('public/' . $strukturOrganisasi->foto);
            }

            $fileName = time() . '_' . uniqid() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/struktur', $fileName);
            $data['foto'] = 'struktur/' . $fileName;
        }

        $strukturOrganisasi->update($data);

        return redirect()->route('admin.struktur-organisasi.index')->with('success', 'Struktur Organisasi berhasil diperbarui.');
    }

    public function destroy(StrukturOrganisasi $strukturOrganisasi)
    {
        if ($strukturOrganisasi->foto && Storage::exists('public/' . $strukturOrganisasi->foto)) {
            Storage::delete('public/' . $strukturOrganisasi->foto);
        }

        $strukturOrganisasi->delete();

        return redirect()->route('admin.struktur-organisasi.index')->with('success', 'Struktur Organisasi berhasil dihapus.');
    }
}
