<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Reservation;
use App\Models\Favorite;
use DateTime;
use Carbon\Carbon;


class StoreInformationController extends Controller
{
    public function index()
    {
        $shops = Shop::with('area','genre')->get();
        $id = Auth::id();
        $favorites = Favorite::where('user_id',$id)->get();
        return view('shop_all', compact('shops','favorites'));
    }

    public function detail($id)
    {
        $shop = Shop::where('id',$id)->with('area','genre')->first();
        $today = new DateTime();
        $today_date = $today->format('Y-m-d');
        return view('shop_detail',compact('shop','today_date'));
    }

    public function reservation(Request $request)
    {
        $form = $request->all();
        Reservation::create($form);
        return redirect('/done');
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Reservation::find($request->id)->update($form);
        return redirect('/my_page');
    }

    public function search(Request $request)
    {
        $element = $request->all();
        $query = Shop::with('area','genre');
        $search = array_filter($element);
        if(!empty($search['area'])){
            $query->where('area_id',$search['area']);
        }
        if(!empty($search['genre'])){
            $query->where('genre_id',$search['genre']);
        }
        if(!empty($search['store_name'])){
            $query->where('store_name','like','%' . $search['store_name'] . '%');
        }
        $shops = $query->get();
        $id = Auth::id();
        $favorites = Favorite::where('user_id',$id)->get();
        return view('shop_all', compact('shops','favorites'));
    }
}
