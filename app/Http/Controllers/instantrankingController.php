<?php
/**
 * Created by PhpStorm.
 * User: kakeru
 * Date: 2019/06/04
 * Time: 11:20
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class instantrankingController extends Controller
{
    public function top(Request $request){
        $item = InstantRanking::all();
        return view('');
    }

    public function themalist(Request $request){
        return view('instantranking.themalist');
    }

    public function themapost(Request $request){
        return view('instantranking.themapost');
    }


}