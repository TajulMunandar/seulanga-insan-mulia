<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::query();

        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('judul', 'like', '%' . $search . '%')
                  ->orWhere('konten', 'like', '%' . $search . '%')
                  ->orWhere('excerpt', 'like', '%' . $search . '%');
            });
        }

        // Status filter
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }

        // Sorting
        $sortBy = $request->get('sort_by', 'created_at');
        $sortDirection = $request->get('sort_direction', 'desc');

        $allowedSorts = ['judul', 'status', 'created_at', 'published_at'];
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortDirection);
        } else {
            $query->latest();
        }

        $beritas = $query->paginate(15)->withQueryString();

        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'excerpt' => 'nullable|string|max:300',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);

        // Ensure unique slug
        $originalSlug = $data['slug'];
        $count = 1;
        while (Berita::where('slug', $data['slug'])->exists()) {
            $data['slug'] = $originalSlug . '-' . $count;
            $count++;
        }

        if ($request->hasFile('gambar')) {
            $fileName = time() . '_' . uniqid() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/berita', $fileName);
            $data['gambar'] = 'berita/' . $fileName;
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show(Berita $berita)
    {
        return view('admin.berita.show', compact('berita'));
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255|min:3',
            'konten' => 'required|string|min:10',
            'excerpt' => 'nullable|string|max:300',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:min_width=400,min_height=300',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date|after:now',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);

        // Ensure unique slug (excluding current berita)
        $originalSlug = $data['slug'];
        $count = 1;
        while (Berita::where('slug', $data['slug'])->where('id', '!=', $berita->id)->exists()) {
            $data['slug'] = $originalSlug . '-' . $count;
            $count++;
        }

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($berita->gambar && Storage::exists('public/' . $berita->gambar)) {
                Storage::delete('public/' . $berita->gambar);
            }

            $fileName = time() . '_' . uniqid() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/berita', $fileName);
            $data['gambar'] = 'berita/' . $fileName;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        // Delete image
        if ($berita->gambar && Storage::exists('public/' . $berita->gambar)) {
            Storage::delete('public/' . $berita->gambar);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
