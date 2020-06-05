@extends('template.template')
@section('title')
الاطباء
@endsection
@section('css')
<link href="{{ URL::asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
<style>
.checked {
  color: orange;
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

       
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>الاطباء</div>
                    <div class="tools"> </div>
                </div>
                
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="all">#</th>
                                <th class="all">اسم   ( ع  )</th>
                                <th class="all">اسم  (  e  )</th>
                                <th class="all">الكشف </th>
                                <th class="all">مدة الانتظار  </th>
                                <th class="all">التقيم  </th>                               
                            </tr>
                        </thead>
                        <tbody>
                          @if($doctors)
                          @foreach($doctors as $index=>$doctor)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td><a href="{{(url('admin/doctors-profile/'.$doctor->id))}}" >{{ $doctor->name_ar.$doctor->last_name_ar }}</a></td>
                                <td>{{ $doctor->name_en.$doctor->last_name_en }}</td>
                                <td>{{ $doctor->cl_price }}</td>
                                <td>{{ $doctor->waittime }}</td>
                                <td>
                                   @for($x = 1; $x <= 5; $x++)
                                    @if($x > $doctor->rating)
                                      <span class="fa fa-star "></span>
                                        @else
                                      <span class="fa fa-star  checked"></span>
                                     @endif
                                    @endfor
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
<script src="{{ URL::asset('assets/pages/scripts/table-six_feild-responsive.min.js') }}" type="text/javascript"></script>

@endsection     


        

