@extends('template.template')
@section('title')
صفحات المقدمه
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
                        <i class="fa fa-globe"></i>صفحات المقدمه  </div>
                    <div class="tools"> </div>
                </div>
                
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="all">#</th>
                                <th class="all">الصفحه الاولى  ( عربي  ) </th>
                                <th class="all">الصفحه الاولى  ( انجلزى  ) </th>
                                <th class="all">الصفحه الثانيه  ( عربي ) </th>
                                <th class="all">الصفحه  الثانيه  ( انجلزى   ) </th>
                                <th>الخيارات</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($abouts)
                          @foreach($abouts as $index=>$about)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $about->page_one_ar }}</td>
                                <td>{{ $about->page_one_en }}</td>
                                <td>{{ $about->page_two_ar }}</td>
                                <td>{{ $about->page_two_en }}</td>
                               
                                <td>
                                     <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">تحديث</a>
                                     <!--
                                     {!! Form::open(['method' => 'DELETE','route' => ['abouts.destroy', $about->id],'style'=>'display:inline']) !!}
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

<script>
function myFunction() {
  
  var r = confirm("هل انت متاكد من عملية الحذف ؟");
if (r == true) {
  
} else {
 
  return false;
}
}
</script>

@endsection
@section('js')
<!-- Start Metroninc DataTable Js-->

<script src="{{ URL::asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/pages/scripts/table-two_feild-responsive.min.js') }}" type="text/javascript"></script>

@endsection     


        

