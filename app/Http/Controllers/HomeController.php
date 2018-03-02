<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::get();
        $nameCount = DB::table('sites')->where('name', '!=', null)->count();
        $developmentCount = DB::table('sites')->where('development', '+')->count();
        $supportCount = DB::table('sites')->where('support', '+')->count();
        $contextual_advertisingCount = DB::table('sites')->where('contextual_advertising', '+')->count();
        $seoCount = DB::table('sites')->where('seo', '+')->count();
        $smmCount = DB::table('sites')->where('smm', '+')->count();
        $countArr = [
            'nameCount' => $nameCount,
            'developmentCount' => $developmentCount,
            'supportCount' => $supportCount,
            'contextual_advertisingCount' => $contextual_advertisingCount,
            'seoCount' => $seoCount,
            'smmCount' => $smmCount
        ];
        //dd($countArr);
        return view('home', compact('sites', 'countArr'));
    }
}
