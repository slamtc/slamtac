@extends('template.template')
@section('title')
جدول المواعيد
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
                        <i class="fa fa-globe"></i>جدول مواعيد يوم : {{ $reservation->appointment }}</div>
                    <div class="tools"> </div>
                </div>
                
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="all">#</th>
                                <th class="all">اسم المريض</th>
                                <th class="all">رقم الموبيل </th>
                                <th class="all">الحاله</th>
                                <th class="all">كود الحجز</th>
                                <th class="all">قيمة الكشف</th>
                            </tr>
                        </thead>
                        <tbody>
                          @if($doctores_reservations)
                          @foreach($doctores_reservations as $index=>$doctores_reservation)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $doctores_reservation->patient_name }}</td>
                                <td>{{ $doctores_reservation->phone }}</td>
                                <td>
                                  @if($doctores_reservation->status == 0)
                                    لم يتم الكشف
                                  @elseif($doctores_reservation->status == 1)
                                    تم الكشف
                                  @elseif($doctores_reservation->status == 2)
                                   تم الغاء الكشف
                                  @endif
                                </td>
                                <td>{{ $doctores_reservation->code }}</td>
                                <td>{{ $doctores_reservation->cl_price }}</td>
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


        

