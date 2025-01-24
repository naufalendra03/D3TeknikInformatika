<?php

namespace App\Http\Controllers;

use App\Models\KalenderAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KalenderAkademikController extends Controller
{
    // Menampilkan halaman dengan daftar kalender akademik
    public function index()
    {
        $kalender = KalenderAkademik::all();
        return view('kalender.index', compact('kalender'));
    }

    // Menampilkan form untuk membuat kalender akademik baru
    public function create()
    {
        return view('kalender.create');
    }

    // Menyimpan data kalender akademik baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Proses upload gambar
        $path = $request->file('gambar')->store('kalender-akademik', 'public');

        KalenderAkademik::create([
            'tahun' => $validatedData['tahun'],
            'gambar' => $path,
        ]);

        return redirect()->route('kalender.index')->with('success', 'Kalender akademik berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit kalender akademik
    public function edit($id)
    {
        $kalender = KalenderAkademik::findOrFail($id);
        return view('kalender.edit', compact('kalender'));
    }

    // Memperbarui data kalender akademik
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tahun' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $kalender = KalenderAkademik::findOrFail($id);

        // Jika ada gambar baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kalender->gambar) {
                Storage::disk('public')->delete($kalender->gambar);
            }

            // Simpan gambar baru
            $path = $request->file('gambar')->store('kalender-akademik', 'public');
            $kalender->gambar = $path;
        }

        $kalender->tahun = $validatedData['tahun'];
        $kalender->save();

        return redirect()->route('kalender.index')->with('success', 'Kalender akademik berhasil diperbarui.');
    }

    // Menghapus kalender akademik
    public function destroy($id)
    {
        $kalender = KalenderAkademik::findOrFail($id);

        // Hapus gambar dari penyimpanan
        if ($kalender->gambar) {
            Storage::disk('public')->delete($kalender->gambar);
        }

        $kalender->delete();

        return redirect()->route('kalender.index')->with('success', 'Kalender akademik berhasil dihapus.');
    }
}
