<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(15);
        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string|max:500',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $fileName = time() . '_' . uniqid() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/galeri', $fileName);
            $data['gambar'] = 'galeri/' . $fileName;
        }

        Galeri::create($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function show(Galeri $galeri)
    {
        return view('admin.galeri.show', compact('galeri'));
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'deskripsi' => 'nullable|string|max:500',
            'alt_text' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($galeri->gambar && Storage::exists('public/' . $galeri->gambar)) {
                Storage::delete('public/' . $galeri->gambar);
            }

            $fileName = time() . '_' . uniqid() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/galeri', $fileName);
            $data['gambar'] = 'galeri/' . $fileName;
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(Galeri $galeri)
    {
        // Delete image
        if ($galeri->gambar && Storage::exists('public/' . $galeri->gambar)) {
            Storage::delete('public/' . $galeri->gambar);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }
}
