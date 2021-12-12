<?php

namespace App\Http\Controllers;

use App\Models\vaccines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccineController extends Controller
{
    public function read()
    {
        $vaccine = vaccines::all();
        return view('vaccine',compact('vaccine'),['title'=>'Vaccine']);
    }

    public function addVaccine(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/upload'), $image);

        $vaksin = new vaccines();
        $vaksin->name = $request->name;
        $vaksin->price = $request->price;
        $vaksin->description = $request->description;
        $vaksin->image = $image;
        $vaksin->save();

        return redirect(route('vaccine'));
    }
}
