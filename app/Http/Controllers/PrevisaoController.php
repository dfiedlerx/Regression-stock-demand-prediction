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

        $previsoes = Estimativa::with('itens')->orderBy('average')->get();

        var_dump($previsoes);

        return view('admin.dashboard.previsao', compact('items'));
    }
}