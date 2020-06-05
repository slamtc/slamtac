@extends('template.template')
@section('title')
المستشفيات
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

       
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>المستشفيات</div>
                    <div class="tools"> </div>
                </div>
                
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="all">#</th>
                                <th class="all">اسم المستشفى  ( ع   )</th>
                                <th class="all">اسم المستشفى  (  e  )</th>
                                <th class="all">الخيارات</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                          @if($hospitals)
                          @foreach($hospitals as $index=>$hospital)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $hospital->hospital_name_ar }}</td>
                                <td>{{ $hospital->hospital_name_en }}</td>
                                <td><a href="{{ route('hospitals.show',$hospital->id) }}" title="Show" class="btn-sm btn-success"> <span class="glyphicon glyphicon-folder-open"></span></a></td>
                              
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


        

