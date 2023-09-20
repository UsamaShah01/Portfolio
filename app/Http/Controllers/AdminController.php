<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseStudy;

class AdminController extends Controller
{
    //
    public function caseStudy(){
        return view('portfolio.admin.casestudy');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
