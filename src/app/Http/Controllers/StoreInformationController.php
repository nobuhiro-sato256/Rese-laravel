<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;


class StoreInformationController extends Controller
{
    public function index()
    {
        // $shops = Shop::all();
        // foreach($shops as $shop) {
        //     $$shops = $shop->area;
        // }
        $shops = Shop::with('area','genre')->get();
        // dd($shops);
        return view('shop_all', compact('shops'));
    }
}
