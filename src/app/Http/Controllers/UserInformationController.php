<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Reservation;
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
}
