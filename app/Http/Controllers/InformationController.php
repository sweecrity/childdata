<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Childinfo;

class InformationController extends Controller
{
   public function index()
   {
     $childinfos=Childinfo::all();
     return view('childinfo',compact('childinfos'));
   }

   public function delete($id)
   {
      $childinfo=Childinfo::findorFail($id);
      $childinfo->delete();
      return redirect('/')->with('success', 'Information deleted successfully');
   }

   public function register(Request $request)
   {
     $infos=$request->validate(
        [
            'childfirstname'=>'required|alpha',
            'childmiddlename'=>'required|string|alpha',
            'childlastname'=>'required|string|alpha',
            'childage'=>'required|numeric',
            'gender'=>['required', Rule::in(['Male', 'Female', 'Other'])],
            'childaddress'=>'alpha_num',
            'childcity'=>'alpha_num',
            'childstate'=>'alpha_num',
            'childzipcode'=>'numeric'

        ]
        );

     
        $childinfo=new Childinfo();
        $childinfo->firstname=$request->childfirstname;
        $childinfo->middlename=$request->childmiddlename;
        $childinfo->lastname=$request->childlastname;
        $childinfo->age=$request->childage;
        $childinfo->gender=$request->gender;
        $childinfo->differentaddress=$request->has('differentaddress') ? true : false;
        $childinfo->country=$request->country;
        $childinfo->address=$request->childaddress;
        $childinfo->city=$request->childcity;
        $childinfo->state=$request->childstate;
        $childinfo->zipcode=$request->childzipcode;
        $childinfo->save();
        return redirect('/')->with('success','Information Added Successfully');

   }

   public function edit($id)
   {
      $childinfos=Childinfo::all();
      $childinfo=Childinfo::findorFail($id);
      return view('edit', compact('childinfos','childinfo'));
   }

   public function update(Request $request,$id)
   {
      $childinfo=Childinfo::findorFail($id);
      $infos=$request->validate(
         [
             'childfirstname'=>'required|alpha',
             'childmiddlename'=>'required|string|alpha',
             'childlastname'=>'required|string|alpha',
             'childage'=>'required|numeric',
             'gender'=>['required', Rule::in(['Male', 'Female', 'Other'])],
             'childaddress'=>'alpha_num',
             'childcity'=>'alpha_num',
             'childstate'=>'alpha_num',
             'childzipcode'=>'numeric'
 
 
         ]
         );
 
      
         
         $childinfo->firstname=$request->childfirstname;
         $childinfo->middlename=$request->childmiddlename;
         $childinfo->lastname=$request->childlastname;
         $childinfo->age=$request->childage;
         $childinfo->gender=$request->gender;
         $childinfo->differentaddress=$request->has('differentaddress') ? true : false;
         $childinfo->country=$request->country;
         $childinfo->address=$request->childaddress;
         $childinfo->city=$request->childcity;
         $childinfo->state=$request->childstate;
         $childinfo->zipcode=$request->childzipcode;
         $childinfo->update();
         return redirect('/')->with('success','Information Edited Successfully');
   }
}
