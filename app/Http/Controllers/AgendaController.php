<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        // Default bulan dan tahun saat ini jika tidak dipilih
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        // Mengambil bulan dan tahun dari query string (filter)
        $month = $request->input('month', $currentMonth);
        $year = $request->input('year', $currentYear);

        // Mengambil agenda berdasarkan bulan dan tahun, diurutkan berdasarkan tanggal
        $agendas = Agenda::whereYear('tanggal', $year)
            ->whereMonth('tanggal', $month)
            ->orderBy('tanggal', 'asc')
            ->get();

        return view('agenda', compact('agendas', 'month', 'year'));
    }
}
