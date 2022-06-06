<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermisoController extends Controller
{
    public function index()
    {
        $permisos = Permission::all();

        return view('Permiso.index', compact('permisos'));
    }
}
