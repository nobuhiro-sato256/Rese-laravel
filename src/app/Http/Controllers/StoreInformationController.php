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
}
