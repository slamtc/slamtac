<?php

namespace App\Http\Controllers\Admin;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $abouts_count  = About::count();
       if($abouts_count == 0)
       {
         $date['page_one_ar'] = 'الصفحه الاولى   سلامتك  ';
         $date['page_one_en'] = 'First Page for salmtic ';
         $date['page_two_ar'] = 'الصفحه  الثانيه  سلامتك   ';
         $date['page_two_en'] = 'Second  Page for salmtic ';
         About::create($date);
       }
       $abouts = About::get();
       return view('admin.about.list',compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
      return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'page_one_ar' => 'required|max:500',
            'page_one_en' => 'required|max:500',
            'page_two_ar' => 'required|max:500',
            'page_two_en' => 'required|max:500',
        ]);
  
        $about->update($request->all());
        session()->flash('msg','تم التحديث بنجاح   ');
        return redirect('admin/abouts');
    }

   
}
