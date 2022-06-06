<?php

namespace App\Http\Controllers;

use App\Models\ReporteVenta;
use Illuminate\Http\Request;

class ReporteVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporte_ventas = ReporteVenta::all();
        return view('ReporteVenta.index', compact('reporte_ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReporteVenta  $reporteVenta
     * @return \Illuminate\Http\Response
     */
    public function show(ReporteVenta $reporteVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReporteVenta  $reporteVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(ReporteVenta $reporteVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReporteVenta  $reporteVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReporteVenta $reporteVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReporteVenta  $reporteVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReporteVenta $reporteVenta)
    {
        //
    }
}
