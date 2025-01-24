<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::where('is_valid', true)->get();
        return view('alumni', compact('alumni'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:alumnis',
            'ipk' => 'required|numeric|min:0|max:4.00',
            'tahun_lulus' => 'required|numeric|min:1900|max:' . date('Y'),
            'wisuda' => 'required|numeric|min:1',
            'pekerjaan' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
        ]);

        $validated['is_valid'] = false; // Set default validasi ke false

        Alumni::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan dan menunggu validasi.');
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);

        // Validasi update dengan mengecualikan alumni yang sedang diupdate
        $request->validate([
            'nim' => [
                'required',
                'string',
                'max:255',
                Rule::unique('alumnis')->ignore($alumni->id),
            ],
            'nama' => 'required|string|max:255',
            'ipk' => 'required|numeric|min:0|max:4.00',
            'tahun_lulus' => 'required|numeric|min:1900|max:' . date('Y'),
            'wisuda' => 'required|numeric|min:1',
            'pekerjaan' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            // Tambahkan validasi lainnya jika diperlukan
        ]);

        // Perbarui data alumni dengan data valid yang diterima dari request
        $alumni->update($request->all());

        return redirect()->route('alumni.index')->with('success', 'Data berhasil diperbarui!');
    }
}
