<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Area;

class UserController extends Controller
{

    public function index()
    {
        $many_property = Property::orderBy('id', 'asc')->paginate(4);
        return view('user.pages.Property.index')->with(array('many_property' => $many_property));
    }

    public function show($id)
    {
        $property = Property::find($id);
        $area = Area::where('id' , $property->areas_id)->first();
        return view('user.pages.Property.show')->with(array('property'=>$property,'area'=>$area));
    }

}
