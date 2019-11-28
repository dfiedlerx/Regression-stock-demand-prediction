<?php


namespace App\Http\Controllers;


use App\Models\Item;
use App\User;

class ListaController extends Controller
{

    public function index()
    {
        $items = User::latest('updated_at')->get();


        $produtos = Item::with('categorias')->orderBy('name')->paginate(500);

        return view('admin.dashboard.lista.index', ['items' => $items, 'produtos' => $produtos]);
    }

    public function edit()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.dashboard.lista.edit', compact('items'));
    }

}