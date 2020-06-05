@extends('template.template')
@section('title')
{{ $doctor->name_ar.$doctor->last_name_ar }}
@endsection
@section('css')
<link href="{{url('/')}}/assets/pages/css/profile-rtl.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<style>
.checked {
  color: orange;
}
.size{
    font-size: 16px;
}

</style>



<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ url('admin/home') }}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{{ $doctor->name_ar.$doctor->last_name_ar }}</span>
        </li>
    </ul>
                           
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> بيانات الطبيب
    <small></small>
</h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    {{ Html::image('images/'.$doctor->photo, $doctor->doctor, array('class'=>'img-responsive' )) }}
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">{{ $doctor->name_ar.$doctor->last_name_ar }} </div>
                    <div class="profile-usertitle-name">{{ $doctor->name_en.$doctor->last_name_en }}</div>
                </div>
                <div class="profile-usertitle">
                    @for($x = 1; $x <= 5; $x++)
                      @if($x > $doctor->rating)
                      <span class="fa fa-star"></span>
                      @else
                      <span class="fa fa-star  checked"></span>
                      @endif
                    @endfor
                </div>
                <hr>
                 <div class="profile-usertitle">
                    <div class="profile-usertitle-name size">{{ $doctor->title_ar }} </div>
                    <div class="profile-usertitle-name size">{{ $doctor->title_en }}</div>
                </div>
                <hr>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name size">{{ $doctor->Basic_specialtie->specialty_name_ar }}</div>
                    <div class="profile-usertitle-name size">{{ $doctor->Basic_specialtie->specialty_name_en }}</div>
                </div>
                <hr>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name size">
                    النوع : 
                     @if($doctor->gender == 'm')
                     ذكر 
                     @else
                     انثى 
                     @endif
                    </div>
                    <div class="profile-usertitle-name size" size>مدة الكشف : {{ $doctor->waittime }}</div>
                </div>
                 <hr>

                 <div class="profile-usertitle">
                    <div class="profile-usertitle-name size">تاريخ الميلاد : {{ $doctor->barthday}}</div>
                    <div class="profile-usertitle-name size">قيمة الكشف : {{ $doctor->cl_price}}</div>
                </div>


               
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                   
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
           

             
           
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PORTLET -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">المواعيد : </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                           
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                        <tr class="uppercase">
                                            <th> التاريخ  </th>
                                            <th> من </th>
                                            <th> الى  </th>
                                            <th> الحجوزات  </th>
                                        </tr>
                                    </thead>
                                  
                                   
                                    @if($doctor->all_reservation) 
                                    @foreach($doctor->all_reservation as $index=>$reservation)
                                     @if($index < 30)
                                    <tr>
                                        <td>
                                          @if($reservation->Doctores_reservation->count() >=1 )
                                            <a href="{{ url('admin/booking-info/'.$reservation->id)}}" >{{ $reservation->appointment }}</a>
                                          @else
                                            {{ $reservation->appointment }}
                                          @endif
                                        </td>
                                        <td> {{ $reservation->from}} </td>
                                        <td> {{ $reservation->to }} </td>
                                        <td> {{ $reservation->Doctores_reservation->count() }} </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    @endif


                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET -->
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PORTLET -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">نبذه عن الدكتور </span>
                               
                            </div>
                            
                        </div>
                        <div class="portlet-body">
                            <div class="scroller">
                                <div class="general-item-list">
                                    <div class="item">
                                        <div class="item-body">{{ $doctor->brief_ar}} </div>
                                        <hr>
                                         <div class="item-body">{{ $doctor->brief_en}} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET -->
                </div>
                
            </div>

           
        </div>
              <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-bubbles font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">التعليقات </span>
                                        </div>
                                          <div class="caption" style="float: left;">
                                            <a href="{{url('admin/more-reviews-doctor/'.$doctor->id)}}" >المزيد من التعليقات </a>

                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="portlet_comments_1">
                                                <!-- BEGIN: Comments -->
 
                                                @if($doctor->AvgRatingPath)
                                                @foreach($doctor->AvgRatingPath as $index=>$comment)
                                                @if($index < 5)
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                       
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">{{ $comment->patient_name}}</span>
                                                                <span class="mt-comment-date">
                                                                 {{  date(" H:i -- Y-m-d", strtotime($comment->created_at))}}
                                                                </span>
                                                            </div>
                                                            <div class="mt-comment-text">{{ $comment->comment}}</div>
                                                        </div>
                                                    </div>
                                                @endif    
                                                @endforeach    
                                                @endif    
                                                  
                                                    
                                                    
                                                </div>
                                                <!-- END: Comments -->
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@endsection

@section('js')
<script src="{{url('/')}}/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/assets/pages/scripts/profile.min.js" type="text/javascript"></script>
@endsection     


        

