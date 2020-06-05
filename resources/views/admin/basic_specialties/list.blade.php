@extends('template.template')
@section('title')
التخصصات الرئيسية
@endsection
@section('css')
<link href="{{ URL::asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') }}" rel="stylesheet" type="text/css" />

@endsection
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

<h1 class="page-title">
   <a class="btn btn-success btn sbold green" href="{{ route('basic_specialties.create') }}">اضافة تخصص جديد</a>
</h1>
       
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>التخصصات الرئيسيه</div>
                    <div class="tools"> </div>
                </div>
                
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="all">#</th>
                                <th class="all">التخصص الرئيسى  ( ع   )</th>
                                <th class="all">التخصص الرئيسى  (  e  )</th>
                                <th>الخيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($basic_specialties)
                          @foreach($basic_specialties as $index=>$basic_specialtie)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $basic_specialtie->specialty_name_ar }}</td>
                                <td>{{ $basic_specialtie->specialty_name_en }}</td>
                               
                                <td>
                                     <a class="btn btn-primary" href="{{ route('basic_specialties.edit',$basic_specialtie->id) }}">تحديث</a>
                                     <!--
                                     {!! Form::open(['method' => 'DELETE','route' => ['basic_specialties.destroy', $basic_specialtie->id],'style'=>'display:inline']) !!}
                                     {!! Form::submit('حذف', ['class' => 'btn btn-danger','onclick'=>"return  myFunction()"]) !!}
                                     {!! Form::close() !!}
                                   -->
                                </td>
                            </tr>
                          @endforeach  
                          @endif  
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
       
    </div>
</div>
  <!-- END CONTENT BODY -->
</div>


@endsection
@section('js')
<!-- Start Metroninc DataTable Js-->
<script src="{{ URL::asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/pages/scripts/table-three_feild-responsive.min.js') }}" type="text/javascript"></script>

@endsection     


        

