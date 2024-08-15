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



class UserInformationController extends Controller
{
    public function my_page()
    {
        $id = Auth::id();
        $today = new DateTime();
        $today = $today->format('Y-m-d');
        $reservations = Reservation::where('user_id',$id)->where('date','>=',$today)->with('shop','user')->get();
        $favorites = Favorite::where('user_id',$id)->with('shop')->get();
        foreach($favorites as $favorite){
            $area = Area::find($favorite->shop['area_id']);
            $genre = Genre::find($favorite->shop['genre_id']);
            $favorite->area = $area["name"];
            $favorite->genre = $genre["name"];
        };
        return view('my_page',compact('reservations','favorites'));
    }

    public function delete_reservation(Request $request)
    {
        $reservation_id = $request->reservation_id;
        Reservation::find($reservation_id)->delete();
        return redirect('/my_page');
    }

    public function change(Request $request)
    {
        $reservation = $request->all();
        $shop = Shop::where('id',$reservation['shop_id'])->with('area','genre')->first();
        $reservation = Reservation::where('user_id',$reservation['user_id'])->where('shop_id',$reservation['shop_id'])->first();
        return view('shop_detail',compact('shop','reservation'));
    }

    public function favorite(Request $request)
    {
        $shop_id = $request['shop_id'];
        $page = $request['page'];
        $id = Auth::id();
        $favorite = Favorite::where('user_id',$id)->where('shop_id',$shop_id)->first();
        if(!$favorite){
            Favorite::create([
            'user_id' => $id,
            'shop_id' => $shop_id,
            ]);
        }else{
            Favorite::find($favorite->id)->delete();
        };
        switch($page){
            case 'shop_all':
                return redirect('/');
            case 'my_page';
                return redirect('/my_page');
        };
        }
}
