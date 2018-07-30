<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Area;
use Session;

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
        $area = Area::where('id', $property->areas_id)->first();
        return view('user.pages.Property.show')->with(array('property' => $property, 'area' => $area));
    }



    public function add_to_wishlist(Request $request, $id)
    {
        $property= Property::find($id);
        $name = $property->name;
        $size = $property->size;
        $price= $property->price;
        $image = $property->image;
        $phone = $property->phone;
        $data =[$property->id, $name ,$size , $price , $image , $phone];
        //dd($data);
        Session::push('wishlist', $data);

//        dd( Session::get('wishlist'));
        return redirect('wishlist/view');

    }

    public function view_wishlist()
    {
        $user_id = auth()->user()->id;
        //dd($user_id);
        if (Session::has('wishlist')) {
//             dd( Session::get('wishlist'));
            foreach (Session::get('wishlist') as $wish) {


//                dd($wish);
                $wishlist[] = $wish;

            }


        }

      //  dd($wishlist);

        return view('user.pages.wishlist',['wishlist'=>$wishlist]);

    }

}



