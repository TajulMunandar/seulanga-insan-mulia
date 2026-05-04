<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function edit()
    {
        $tentangKami = TentangKami::first();
        if (!$tentangKami) {
            $tentangKami = TentangKami::create([]);
        }
        return view('admin.tentang-kami.edit', compact('tentangKami'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'sejarah' => 'nullable|string',
        ]);

        $tentangKami = TentangKami::first();
        if ($tentangKami) {
            $tentangKami->update($request->all());
        } else {
            TentangKami::create($request->all());
        }

        return redirect()->route('admin.tentang-kami.edit')->with('success', 'Tentang Kami berhasil diperbarui.');
    }
}
