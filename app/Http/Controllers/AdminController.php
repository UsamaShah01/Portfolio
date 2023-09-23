<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseStudy;
use App\Models\Project;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    //
    public function caseStudy(){
        return view('portfolio.admin.casestudy');
    }

    public function store(Request $request){

        $file = $request->pdf;
        $file_Name = $file->getClientOriginalName();
        $newFilename = str_replace('.pdf', '', $file_Name);
        $file->move(public_path('uploads/pdf/'), $newFilename.'.pdf');

        $image = $request->file('image');

        $name = sha1(date('YmdHis'));
        $save_name = $name . '.' . $image->getClientOriginalExtension();
        $save_name = basename($image->getClientOriginalName()); 
        $resize_name = $name . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('uploads/image/' . $resize_name)); 


        $caseStudy = new CaseStudy;
        $caseStudy->title = $request->title; 
        $caseStudy->content = $request->content; 
        $caseStudy->image = $resize_name; 
        $caseStudy->pdf =  $newFilename.'.pdf';
        $caseStudy->save();
        
        return back()->with('success', 'Case study created successfully.');
    }

    public function project(){
        return view('portfolio.admin.porject');
    }

    public function storeProject(Request $request){

        $image = $request->file('image');

        $name = sha1(date('YmdHis'));
        $save_name = $name . '.' . $image->getClientOriginalExtension();
        $save_name = basename($image->getClientOriginalName()); 
        $resize_name = $name . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('uploads/image/' . $resize_name)); 


        $caseStudy = new Project;
        $caseStudy->title = $request->title; 
        $caseStudy->content = $request->content; 
        $caseStudy->image = $resize_name; 
        $caseStudy->link =  $request->link;
        $caseStudy->save();
        
        return back()->with('success', 'Case study created successfully.');
    }
}
