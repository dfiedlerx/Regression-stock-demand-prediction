<?php


namespace App\Http\Controllers;

use App\Models\Estimativa;
use App\User;
use Illuminate\Http\Request;

class PrevisaoController extends Controller
{
    public function index()
    {
        $items = User::latest('updated_at')->get();

        $estimativas = Estimativa::with('itens')->orderByDesc('average')->get();

        return view('admin.dashboard.previsao', ['items' => $items, 'estimativas' => $estimativas]);
    }
}