<?php

namespace App\Http\Controllers;

use App\Models\Bookkeeping;
use App\Models\ComputerSystemServicing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function dashboard(){
        return view('applicant/dashboard');
    }

    public function sagCss(){
        return view('applicant/selfAssessmentGuide/computerSystemServicing');
    }

    public function sagBookkeeping(){
        return view('applicant/selfAssessmentGuide/bookkeeping');
    }

    public function download(){
        $data=array();
        $arr1=array();
        $arr2=array();
        $bookkeeping = Bookkeeping::select("id","created_at","user_id")->where('user_id',auth()->user()->id)->get();
        foreach ($bookkeeping as $key => $value) {
            $arr1['id'] = $value->id;
            $arr1['type'] = 'Bookkeeping NC III';
            $arr1['created_at']=explode(" ",$value->created_at)[0];
            $arr1['time'] = Carbon::createFromTimeStamp(strtotime($value->created_at) )->diffForHumans();
        }
        $css = ComputerSystemServicing::select("id","created_at","user_id")->where('user_id',auth()->user()->id)->get();
        foreach ($css as $key => $value) {
            $arr2['id'] = $value->id;
            $arr2['type'] = 'Computer System Servicing NC II';
            $arr2['created_at']=explode(" ",$value->created_at)[0];
            $arr2['time'] = Carbon::createFromTimeStamp(strtotime($value->created_at) )->diffForHumans();
        }
        $data[]=$arr1;
        $data[]=$arr2;
        return view('applicant/download/download',compact('data'));
    }

}
