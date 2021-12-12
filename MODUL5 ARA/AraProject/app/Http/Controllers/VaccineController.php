<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    public function insert(Request $request)
    {
        $Vaccine = new Vaccine();
        $Vaccine->name = $request->name;
        $Vaccine->price = $request->price;
        $Vaccine->description = $request->description;
        $Vaccine->image = $request->image;
        $Vaccine->save();
    }

    public function updates(Request $request)
    {
        $Vaccine = Vaccine::find($request->id);
        $Vaccine->name = $request->title;
        $Vaccine->price = $request->price;
        $Vaccine->description = $request->decription;
        $Vaccine->image = $request->image;
        $Vaccine->save();
    }

    public function deletes(Request $request)
    {
        $Vaccine = Vaccine::find($request->id);
        $Vaccine->delete();
    }

    public function read()
    {
        $Vaccine = Vaccine::all();
        return view('view',['vaccine'=>$Vaccine]);
    }
}
