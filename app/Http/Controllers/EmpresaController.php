<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);

        $validar_empresa = $request->validate(
            [
                'nombre' => ['required'],
                'rubro' => ['required'],

            ],
            [
                'nombre' => 'Introduzca un nombre para la empresa',
                'rubro' => 'Introduzca el rubro de la empresa',
            ]
        );

        $empresa = Empresa::create($validar_empresa);


        $validar_usuario = $request->validate(
            [
                'name' => ['required'],
                'lastname' => ['required'],
                'email' => ['required'],
                'password' => ['required'],
            ],
            [
                'name' => 'Introduzca su nombre ',
                'lastname' => 'Introduzca su apellido',
                'email' => 'Introduzca su correo electronico',
                'password' => 'Introduzca su contraseña',
            ]
        );

        $user = User::create($validar_usuario);

        $user->empresa_id = $empresa->id;

        $user->save();

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
