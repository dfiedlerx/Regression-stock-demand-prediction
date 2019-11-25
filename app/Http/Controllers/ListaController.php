<?php


namespace App\Http\Controllers;


use App\User;

class ListaController extends Controller
{

    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.dashboard.lista.index', compact('items'));
    }

    public function edit()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.dashboard.lista.edit', compact('items'));
    }

}