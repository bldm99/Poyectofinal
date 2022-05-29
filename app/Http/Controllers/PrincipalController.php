<?php

namespace App\Http\Controllers;

use App\Models\Principal;
use Illuminate\Http\Request;
Use App\Models\User;

class PrincipalController extends Controller
{

    public function prin()
    {

        $prueva= User::all();
        return view('principal',compact('prueva'));
    }






    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Principal $principal)
    {
        //
    }


    public function edit(Principal $principal)
    {
        //
    }


    public function update(Request $request, Principal $principal)
    {
        //
    }


    public function destroy(Principal $principal)
    {
        //
    }
}
