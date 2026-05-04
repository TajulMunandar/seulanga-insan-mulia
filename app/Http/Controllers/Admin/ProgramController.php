<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::orderBy('urutan')->paginate(15);
        return view('admin.program.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'urutan' => 'required|integer|min:0',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $fileName = time() . '_' . uniqid() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/program', $fileName);
            $data['gambar'] = 'program/' . $fileName;
        }

        Program::create($data);

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil ditambahkan.');
    }

    public function show(Program $program)
    {
        return view('admin.program.show', compact('program'));
    }

    public function edit(Program $program)
    {
        return view('admin.program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'urutan' => 'required|integer|min:0',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($program->gambar && Storage::exists('public/' . $program->gambar)) {
                Storage::delete('public/' . $program->gambar);
            }

            $fileName = time() . '_' . uniqid() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/program', $fileName);
            $data['gambar'] = 'program/' . $fileName;
        }

        $program->update($data);

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy(Program $program)
    {
        // Delete image
        if ($program->gambar && Storage::exists('public/' . $program->gambar)) {
            Storage::delete('public/' . $program->gambar);
        }

        $program->delete();

        return redirect()->route('admin.program.index')->with('success', 'Program berhasil dihapus.');
    }
}
