<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Program;
use App\Models\StrukturOrganisasi;
use App\Models\TentangKami;
use Illuminate\Support\Facades\Mail;

class GuestController extends Controller
{
    public function home()
    {
        $hero_content = TentangKami::first();
        $latest_news = Berita::where('status', 'published')
            ->latest('published_at')
            ->take(3)
            ->get();
        $programs = Program::orderBy('urutan')->get();
        $gallery = Galeri::take(6)->get();

        return view('guest.home', compact('hero_content', 'latest_news', 'programs', 'gallery'));
    }

    public function about()
    {
        $about = TentangKami::first();
        return view('guest.about', compact('about'));
    }

    public function structure()
    {
        $structures = StrukturOrganisasi::orderBy('urutan')->get();
        return view('guest.structure', compact('structures'));
    }

    public function programs()
    {
        $programs = Program::orderBy('urutan')->paginate(9);
        return view('guest.programs', compact('programs'));
    }

    public function programDetail($id)
    {
        $program = Program::findOrFail($id);
        return view('guest.program-detail', compact('program'));
    }

    public function news()
    {
        $news = Berita::where('status', 'published')
            ->latest('published_at')
            ->paginate(12);
        return view('guest.news', compact('news'));
    }

    public function newsDetail($slug)
    {
        $news = Berita::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();
        return view('guest.news-detail', compact('news'));
    }

    public function gallery()
    {
        $gallery = Galeri::paginate(12);
        return view('guest.gallery', compact('gallery'));
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you can send email or save to database
        // For now, just redirect with success message
        return redirect()->back()->with('success', 'Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
    }
}
