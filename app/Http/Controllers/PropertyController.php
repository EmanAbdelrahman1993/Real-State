<?php

namespace App\Http\Controllers;

use App\Area;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $many_property = Property::orderBy('id', 'asc')->paginate(9);
        return view('dashboard.pages.Property.index')->with(array('many_property' => $many_property));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $all_areas = Area::all();

        //dd($all_areas);
        return view('dashboard.pages.Property.create')->with(array('all_areas' => $all_areas));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4',
            'description' => 'required|string|min:4',
            'price' => 'required|min:3',
            'size' => 'required|min:2',
            'rooms_no' => 'required',
            'floors_no' => 'required',
            'pathroom_no' => 'required',
            'image' => 'required|image',

        ]);

        $property = new Property();
        $property->user_id = auth()->user()->id;
        //$property->areas_id = $request->area_name;
        $property->name = $request->name;
        $property->price = $request->price;
        $property->size = $request->size;
        $property->description = $request->description;
        $property->rooms_no = $request->rooms_no;
        $property->floors_no = $request->floors_no;
        $property->pathroom_no = $request->pathroom_no;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            //dd($images);

            // dd($image);
            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $property->image = $name;
        }

        $area_name = $request->area_name;

        $row = Area::where('name' , $area_name)->first();

        $property->areas_id = $row->id;
        //dd($area_name);

        $property->save();
        session()->flash('success', 'Property Added Successfully');
        return redirect('Property');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        $area = Area::where('id' , $property->areas_id)->first();
        return view('dashboard.pages.Property.show')->with(array('property'=>$property,'area'=>$area));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        $area = Area::where('id' , $property->areas_id)->first();
        $all_areas = Area::all();
        return view('dashboard.pages.Property.edit')->with(array('property'=>$property,'area'=>$area,'all_areas'=>$all_areas));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4',
            'description' => 'required|string|min:4',
            'price' => 'required|min:3',
            'size' => 'required|min:2',
            'rooms_no' => 'required',
            'floors_no' => 'required',
            'pathroom_no' => 'required',


        ]);

        $property =Property::find($id);
        $property->user_id = auth()->user()->id;
        $property->name = $request->name;
        $property->description = $request->description;
        $property->rooms_no = $request->rooms_no;
        $property->floors_no = $request->floors_no;
        $property->pathroom_no = $request->pathroom_no;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            //dd($images);

            //dd($image);
            $name = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $property->image = $name;
        }

        $area_name = $request->area_name;

        $row = Area::where('name' , $area_name)->first();
        $property->areas_id = $row->id;


        $property->save();
        session()->flash('success', 'Property Added Successfully');
        return redirect('Property');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::find($id)->delete();
        session()->flash('success', 'Property Deleted Successfully');
        return redirect('Property');
    }
}
