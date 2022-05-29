<?php

namespace App\Http\Controllers;

use App\Models\Pruevas;
Use App\Models\User;
use Illuminate\Http\Request;


class PruevasController extends Controller
{

    public function index()
    {
        //
    }

    public function listarprueva()
    {
        $pru= Pruevas::all();
        $prus= User::all();
        return view('vistaprueva',compact('pru','prus'));


    }
    public function lifyy()
    {
        $pru2= Pruevas::all();

        return view('resgistrar');


    }




    public function create()
    {
        return view('resgistrar');
    }


    public function store(Request $request)
    {
        /*$pruevas = new Pruevas();
        $pruevas->nombre=$request->input('nombre');
        $pruevas->apellido=$request->input('apellido');
        $pruevas->sexo=$request->input('sexo');
        $pruevas->edad=$request->input('edad');*/

        $pruevas = new Pruevas();
        $pruevas->nombre = $request->get('nombre');
        $pruevas->apellido = $request->get('apellido');
        $pruevas->sexo = $request->get('sexo');
        $pruevas->edad = $request->get('edad');
        $pruevas->save();
        return redirect('create')->with('success', 'Pruevas has been successfully added');


    }


    public function show(Pruevas $pruevas)
    {
        //
    }


    public function edit(Pruevas $pruevas)
    {
        //
    }


    public function update(Request $request, Pruevas $pruevas)
    {
        //
    }


    public function destroy(Pruevas $pruevas)
    {
        //
    }
}
