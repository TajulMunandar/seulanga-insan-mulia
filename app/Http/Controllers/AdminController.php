<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Program;
use App\Models\StrukturOrganisasi;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_berita' => Berita::count(),
            'total_galeri' => Galeri::count(),
            'total_program' => Program::count(),
            'total_struktur' => StrukturOrganisasi::count(),
            'total_users' => User::count(),
            'berita_published' => Berita::where('status', 'published')->count(),
        ];

        $recent_berita = Berita::latest()->take(5)->get();
        $recent_users = User::latest()->take(5)->get();

        return view('admin.pages.index', compact('stats', 'recent_berita', 'recent_users'));
    }
}
