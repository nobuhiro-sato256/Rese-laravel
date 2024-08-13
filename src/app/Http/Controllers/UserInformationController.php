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
        $shops = Reservation::where('user_id',$id)->where('date','>=',$today)->with('shop','user')->get();
        return view('my_page',compact('shops'));
    }

    public function delete_reservation(Request $request)
    {
        $reservation_id = $request->reservation_id;
        Reservation::find($reservation_id)->delete();
        return redirect('/my_page');
    }

    public function favorite(Request $request)
    {
        $shop_id = $request['shop_id'];
        $id = Auth::id();
        $favorite = Favorite::where('user_id',$id)->where('shop_id',$shop_id)->first();
        if(!$favorite){
            Favorite::create([
            'user_id' => $id,
            'shop_id' => $shop_id,
            ]);
            return redirect('/');
        }else{
            Favorite::find($favorite->id)->delete();
            return redirect('/');
        };
        }
}
