<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;

class GerenciarController extends Controller
{

    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.dashboard.gerenciar.index', compact('items'));
    }

}