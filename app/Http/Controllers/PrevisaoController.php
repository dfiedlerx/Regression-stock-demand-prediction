<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PrevisaoController extends Controller
{
    public function index()
    {
        $items = User::latest('updated_at')->get();

        return view('admin.dashboard.previsao', compact('items'));
    }
}