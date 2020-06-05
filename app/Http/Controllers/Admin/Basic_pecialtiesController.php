<?php

namespace App\Http\Controllers\Admin;

use App\Basic_specialtie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;



class Basic_pecialtiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basic_specialties = Basic_specialtie::get();
        return view('admin.basic_specialties.list',compact('basic_specialties'));
    }

     public function isexsit($id)
    {
      $count =  Basic_specialtie::where('id',$id)->count();
      return $count;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.basic_specialties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'specialty_name_ar' => 'required|max:150|min:2|unique:basic_specialties',
            'specialty_name_en' => 'required|max:150|min:2|unique:basic_specialties',
        ]);
        Basic_specialtie::create($request->all());
        session()->flash('msg','تم اضافة تخصص بنجاح');
        return redirect("admin/basic_specialties");
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basic_specialtie  $basic_specialtie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       if($this->isexsit($id) ==0)
       {
         return redirect(404);
       } 
       $basic_specialtie = basic_specialtie::find($id);
       return view('admin.basic_specialties.edit',compact('basic_specialtie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basic_specialtie  $basic_specialtie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'specialty_name_ar' =>  'required|max:150|min:2|'.Rule::unique('basic_specialties')->ignore($id),
            'specialty_name_en' =>  'required|max:150|min:2|'.Rule::unique('basic_specialties')->ignore($id),
        ]);
  
        basic_specialtie::find($id)->update($request->all());
        session()->flash('msg','تم تحديث بنجاح');
        return redirect("admin/basic_specialties");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basic_specialtie  $basic_specialtie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basic_specialtie $basic_specialtie)
    {
        //
    }
}
