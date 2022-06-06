<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::where('empresa_id',Auth::user()->empresa_id)->get();

        return view('Usuario.index', compact('usuarios'));
    }

    public function create()
    {
        return view('Usuario.create');
    }


}
