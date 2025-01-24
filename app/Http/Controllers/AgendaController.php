<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua agenda mulai dari hari ini ke depan
    $agendas = Agenda::where('tanggal', '>=', Carbon::today())
    ->orderBy('tanggal', 'asc')
    ->get();

    return view('agenda', compact('agendas'));
    }
}
