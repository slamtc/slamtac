@extends('template.template')    
@section('title')
  صفحات المقدمه 
@stop()
@section('content')
@if(Session::has('msg'))
<div class="alert alert-success alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>{{Session::get('msg')}}</strong> 
</div>
@endif
@if(Session::has('msgError'))
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>{{Session::get('msgError')}}</strong> 
</div>
@endif 
<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-gift"></i>  صفحات المقدمه   </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>

  
    <div class="portlet-body form">
        <div class="form-body">
            <div class="form-group">
             <form action="{{ route('abouts.update',$about->id) }}" method="POST">
             @csrf
             @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group{{ $errors->has('page_one_ar') ? ' has-error' : '' }}" >
                                <label class="control-label"> الصفحه الاولى   ( عربى   ) </label>
                                <textarea name="page_one_ar" rows="5" style="resize: none;" class="form-control">{{ $about->page_one_ar }}</textarea>
                                @if ($errors->has('page_one_ar'))
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                {{ $errors->first('page_one_ar') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-group{{ $errors->has('page_two_ar') ? ' has-error' : '' }}" >
                                <label class="control-label"> الصفحه الثانيه  ( عربى   ) </label>
                                <textarea name="page_two_ar" rows="5" style="resize: none;" class="form-control">{{ $about->page_two_ar }}</textarea>
                                @if ($errors->has('page_two_ar'))
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                {{ $errors->first('page_two_ar') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-group{{ $errors->has('page_one_en') ? ' has-error' : '' }}" >
                                <label class="control-label"> الصفحه  الاولى  ( انجلزى   ) </label>
                                <textarea name="page_one_en" rows="5" style="resize: none; text-align: left;" class="form-control">{{ $about->page_one_en }}</textarea>
                                @if ($errors->has('page_one_en'))
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                {{ $errors->first('page_one_en') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-group{{ $errors->has('page_two_en') ? ' has-error' : '' }}" >
                                <label class="control-label"> الصفحه   الثانيه  ( انجلزى   ) </label>
                                <textarea name="page_two_en" rows="5" style="resize: none; text-align: left;" class="form-control">{{ $about->page_two_en }}</textarea>
                                @if ($errors->has('page_two_en'))
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                {{ $errors->first('page_two_en') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>    
               <div class="form-actions right">
                      <button type="submit" class="btn blue" id="add_btn">
                          <i class="fa fa-check"></i> تحديث </button>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop()

