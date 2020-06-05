@extends('template.template')    
@section('title')
   اضافة  تخصص
@stop()
@section('content')
<style type="text/css">
  .alg{
    text-align: left;
  }
</style>
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
            <i class="fa fa-gift"></i>  اضافة  تخصص</div>
        <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="javascript:;" class="remove"> </a>
        </div>
    </div>
    <div class="portlet-body form">
        <div class="form-body">
            <div class="form-group">
                {!! Form::open(array('route' => 'basic_specialties.store','method'=>'POST')) !!}    
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group{{ $errors->has('specialty_name_ar') ? ' has-error' : '' }}" >
                                <label class="control-label"> التخصص الرئيسى  ( ع   ) </label>
                                {{ Form::text('specialty_name_ar', null, ['class' => 'form-control','autocomplete'=>'off']) }}
                                @if ($errors->has('specialty_name_ar'))
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                {{ $errors->first('specialty_name_ar') }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group form-group{{ $errors->has('specialty_name_en') ? ' has-error' : '' }}" >
                                <label class="control-label"> التخصص الرئيسى  ( e )  </label>
                                {{ Form::text('specialty_name_en', null, ['class' => 'form-control alg','autocomplete'=>'off']) }}
                                @if ($errors->has('specialty_name_en'))
                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                {{ $errors->first('specialty_name_en') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>    
               <div class="form-actions right">
                      <button type="submit" class="btn blue" id="add_btn">
                          <i class="fa fa-check"></i> اضافة</button>
                  </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop()

