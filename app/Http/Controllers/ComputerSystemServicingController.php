<?php

namespace App\Http\Controllers;

use App\Models\ComputerSystemServicing;
use Illuminate\Http\Request;

class ComputerSystemServicingController extends Controller
{
    public function store(Request $request){
        ComputerSystemServicing::create([
            'user_id'=>auth()->user()->id,
            'coc1_c1'=>$request->coc1_c1 ?? false,
            'coc1_c2'=>$request->coc1_c2 ?? false,
            'coc1_c3'=>$request->coc1_c3 ?? false,
            'coc1_c4'=>$request->coc1_c4 ?? false,
            'coc1_c5'=>$request->coc1_c5 ?? false,
            'coc1_c6'=>$request->coc1_c6 ?? false,
            'coc1_c7'=>$request->coc1_c7 ?? false,
            'coc1_c8'=>$request->coc1_c8 ?? false,
            'coc1_c9'=>$request->coc1_c9 ?? false,
            'coc1_c10'=>$request->coc1_c10 ?? false,
            'coc1_c11'=>$request->coc1_c11 ?? false,
            'coc1_c12'=>$request->coc1_c12 ?? false,
            'coc1_c13'=>$request->coc1_c13 ?? false,
            'coc1_c14'=>$request->coc1_c14 ?? false,
            'coc1_c15'=>$request->coc1_c15 ?? false,
            'coc1_c16'=>$request->coc1_c16 ?? false,
            'coc1_c17'=>$request->coc1_c17 ?? false,
            'coc1_c18'=>$request->coc1_c18 ?? false,
            'coc1_c19'=>$request->coc1_c19 ?? false,
            //coc 2
            'coc2_c1'=>$request->coc2_c1 ?? false,
            'coc2_c2'=>$request->coc2_c2 ?? false,
            'coc2_c3'=>$request->coc2_c3 ?? false,
            'coc2_c4'=>$request->coc2_c4 ?? false,
            'coc2_c5'=>$request->coc2_c5 ?? false,
            'coc2_c6'=>$request->coc2_c6 ?? false,
            'coc2_c7'=>$request->coc2_c7 ?? false,
            'coc2_c8'=>$request->coc2_c8 ?? false,
            'coc2_c9'=>$request->coc2_c9 ?? false,
            'coc2_c10'=>$request->coc2_c10 ?? false,
            'coc2_c11'=>$request->coc2_c11 ?? false,
            'coc2_c12'=>$request->coc2_c12 ?? false,
            'coc2_c13'=>$request->coc2_c13 ?? false,
            'coc2_c14'=>$request->coc2_c14 ?? false,
            'coc2_c15'=>$request->coc2_c15 ?? false,
            'coc2_c16'=>$request->coc2_c16 ?? false,
            'coc2_c17'=>$request->coc2_c17 ?? false,
            'coc2_c18'=>$request->coc2_c18 ?? false,
            'coc2_c19'=>$request->coc2_c19 ?? false,
            'coc2_c20'=>$request->coc2_c20 ?? false,
            'coc2_c21'=>$request->coc2_c21 ?? false,
            'coc2_c22'=>$request->coc2_c22 ?? false,
            'coc2_c23'=>$request->coc2_c23 ?? false, 
            //coc 3
            'coc3_c1'=>$request->coc3_c1 ?? false,
            'coc3_c2'=>$request->coc3_c2 ?? false,
            'coc3_c3'=>$request->coc3_c3 ?? false,
            'coc3_c4'=>$request->coc3_c4 ?? false,
            'coc3_c5'=>$request->coc3_c5 ?? false,
            'coc3_c6'=>$request->coc3_c6 ?? false,
            'coc3_c7'=>$request->coc3_c7 ?? false,
            'coc3_c8'=>$request->coc3_c8 ?? false,
            'coc3_c9'=>$request->coc3_c9 ?? false,
            'coc3_c10'=>$request->coc3_c10 ?? false,
            'coc3_c11'=>$request->coc3_c11 ?? false,
            'coc3_c12'=>$request->coc3_c12 ?? false,
            //coc4
            'coc4_c1'=>$request->coc4_c1 ?? false,
            'coc4_c2'=>$request->coc4_c2 ?? false,
            'coc4_c3'=>$request->coc4_c3 ?? false,
            'coc4_c4'=>$request->coc4_c4 ?? false,
            'coc4_c5'=>$request->coc4_c5 ?? false,
            'coc4_c6'=>$request->coc4_c6 ?? false,
            'coc4_c7'=>$request->coc4_c7 ?? false,
            'coc4_c8'=>$request->coc4_c8 ?? false,
            'coc4_c9'=>$request->coc4_c9 ?? false,
            'coc4_c10'=>$request->coc4_c10 ?? false,
            'coc4_c11'=>$request->coc4_c11 ?? false,
            'coc4_c12'=>$request->coc4_c12 ?? false,
            'coc4_c13'=>$request->coc4_c13 ?? false,
            'coc4_c14'=>$request->coc4_c14 ?? false,
            'coc4_c15'=>$request->coc4_c15 ?? false,
            'coc4_c16'=>$request->coc4_c16 ?? false,
            'coc4_c17'=>$request->coc4_c17 ?? false,
            'coc4_c18'=>$request->coc4_c18 ?? false,
            'coc4_c19'=>$request->coc4_c19 ?? false,
        ]);
        return redirect()->route('applicant.download');
    }
}
