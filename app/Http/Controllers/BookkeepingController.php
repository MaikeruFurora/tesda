<?php

namespace App\Http\Controllers;

use App\Models\Bookkeeping;
use Illuminate\Http\Request;

class BookkeepingController extends Controller
{
    public function store(Request $request){
        // return $request->all();
        Bookkeeping::create([
            'user_id'=>auth()->user()->id,
            'b1'=>$request->b1 ?? false,
            'b2'=>$request->b2 ?? false,
            'b3'=>$request->b3 ?? false,
            'b4'=>$request->b4 ?? false,
            'b5'=>$request->b5 ?? false,
            'b6'=>$request->b6 ?? false,
            'b7'=>$request->b7 ?? false,
            'b8'=>$request->b8 ?? false,
            'b9'=>$request->b9 ?? false,
            'b10'=>$request->b10 ?? false,
            'b11'=>$request->b11 ?? false,
        ]);
        return redirect()->route('applicant.download');
    }
}
