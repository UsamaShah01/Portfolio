<?php

namespace App\Http\Controllers;
use App\Models\CaseStudy;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $casestudy = CaseStudy::all();
        $projects = Project::all();

        return view('portfolio.index',compact('casestudy','projects'));
    }

    public function singleCasePage($id){

        $singlecase = CaseStudy::where('id',$id)->first();
      
        return view('portfolio.single',compact('singlecase'));
    }

    
    public function singleProject($id){

        $singlecase = Project::where('id',$id)->first();
      
        return view('portfolio.projectsingle',compact('singlecase'));
    }

}
