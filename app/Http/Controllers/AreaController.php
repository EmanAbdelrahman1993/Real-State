<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_areas = Area::orderBy('id', 'asc')->paginate(5);
        return view('dashboard.pages.Area.index')->with(array('all_areas' => $all_areas));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.Area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string|min:4',
            'description'   => 'required|string|min:4',
        ]);

        $area = new Area();
        $area->user_id = auth()->user()->id;
        $area->name = $request->name;
        $area->description = $request->description;
        $area->save();
        session()->flash('success', 'Area Added Successfully');
        return redirect('Area');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = Area::find($id);
        return view('dashboard.pages.Area.show')->with('area', $area);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Area::find($id);
        return view('dashboard.pages.Area.edit')->with('area', $area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name'          => 'required|string|min:4',
            'description'   => 'required|string|min:4',
        ]);

        $area = Area::find($id);
        $area->user_id = auth()->user()->id;
        $area->name = $request->name;
        $area->description = $request->description;
        $area->save();
        session()->flash('success', 'Area Updated Successfully');
        return redirect('Area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Area::find($id)->delete();
        session()->flash('success', 'Area Deleted Successfully');
        return redirect('Area');
    }
}
