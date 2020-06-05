@extends('template.template')
@section('title')
{{ $hospital->hospital_name_en }}
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

</style>



<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{ url('admin/main') }}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{{ $hospital->hospital_name_ar }}</span>
        </li>
    </ul>
                           
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> بيانات المستشفى
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
                    {{ Html::image('images/hospitals/'.$hospital->photo, $hospital->hospital_name_en, array('class'=>'img-responsive' )) }}
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">{{ $hospital->hospital_name_ar }} </div>
                    <div class="profile-usertitle-name">{{ $hospital->hospital_name_en }}</div>
                </div>
                 <div class="profile-usertitle">
                    @for($x = 1; $x <= 5; $x++)
                      @if($x > $hospital->rating)
                      <span class="fa fa-star"></span>
                      @else
                      <span class="fa fa-star  checked"></span>
                      @endif
                    @endfor
                </div>


               
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-phone"></i>{{ $hospital->users->phone }} </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="icon-home"></i>{{ $hospital->city->ci_name_ar }} : {{ $hospital->user->cl_street_name_ar }}</a>
                        </li>

                          <li style="text-align: left" class="active">
                            <a href="#">
                                {{ $hospital->city->ci_name_en }} : {{ $hospital->user->cl_street_name_en }}
                                <i class="icon-home"></i>
                              </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light ">
                <!-- STAT -->
                <div class="row list-separated profile-stat">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="uppercase profile-stat-title"> {{ $hospital->specialt->count() }} </div>
                        <div class="uppercase profile-stat-text"> التخصصات </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="uppercase profile-stat-title"> {{ $hospital->Doctor->count() }} </div>
                        <div class="uppercase profile-stat-text"> الاطباء </div>
                    </div>
                   
                </div>
                <!-- END STAT -->
               
             </div>
            

             <div class="portlet light " >
                 <span class="caption-subject font-blue-madison bold uppercase"> شركات التامين :  </span>
                 @if($hospital->Insurance_user)
                  @foreach($hospital->Insurance_user as $Insurance_users)                 
                   <p class="uppercase profile-stat-text" style="text-align: right;">{{ $Insurance_users->company_name_ar }}</p>
                  @endforeach  
                 @endif         
            </div>
             <div class="portlet light " >
                 <span class="caption-subject font-blue-madison bold uppercase"> التخصصات :  </span>
                 @if($hospital->hosp_specialt)
                  @foreach($hospital->hosp_specialt as $specialt)                 
                   <p class="uppercase profile-stat-text" style="text-align: right;">{{ $specialt->specialty_name }}</p>
                  @endforeach  
                 @endif         
            </div>
             <div class="portlet light " >
                 <span class="caption-subject font-blue-madison bold uppercase"> الفروع :  </span>
                 @if($hospital->branches)
                  @foreach($hospital->branches as $branche)                 
                   <p class="uppercase profile-stat-text" style="text-align: right;">{{ $branche->branche }}</p>
                  @endforeach  
                 @endif         
            </div>
             <div class="portlet light " >
                 <span class="caption-subject font-blue-madison bold uppercase"> الحضانه : </span>
                 @if($hospital->Nursery)
                                   
                   <p class="uppercase profile-stat-text" style="text-align: right;">سعر  اليوم : {{ $hospital->Nursery->cl_price }}</p>
                   <p class="uppercase profile-stat-text" style="text-align: right;">الحاله  : 
                   @if($hospital->Nursery->status == 0)
                    متاح الان
                   @else
                   غير متاح
                   @endif
                   </p>
                 @else
                 لا توجد حضانات
                 @endif         
            </div>
            <!-- END PORTLET MAIN -->
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
                                <span class="caption-subject font-blue-madison bold uppercase">الاطباء</span>
                            </div>
                             <div class="caption " style="float: left !important;">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <a href="{{url('admin/hospital-doctors/'.$hospital->user_id)}}"  >المزيد</a>
                            </div>
                            
                        </div>
                        <div class="portlet-body">
                           
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                        <tr class="uppercase">
                                            <th colspan="2"> الاسم  </th>
                                            <th> الكشف </th>
                                            <th> مدة الانتظار </th>
                                            <th> التقيم </th>
                                           
                                        </tr>
                                    </thead>
                                  
                                   
                                    @if($hospital->Doctor) 
                                    @foreach($hospital->Doctor as $index=>$doctor)
                                     @if($index < 20)
                                    <tr>
                                        <td class="fit">
                                            {{ Html::image('images/'.$doctor->photo, '', array('class'=>'user-pic' )) }} 
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/doctors-profile/'.$doctor->id)}}" class="primary-link">{{ $doctor->name_ar }}</a>
                                        </td>
                                        <td> {{ $doctor->cl_price}} </td>
                                        <td> {{ $doctor->waittime}} </td>
                                        <td> 
                                        @for($x = 1; $x <= 5; $x++)
                                          @if($x > $doctor->rating)
                                          <span class="fa fa-star"></span>
                                          @else
                                          <span class="fa fa-star  checked"></span>
                                          @endif
                                        @endfor
                                        </td>
                                       
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
          

           
        </div>
              <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class="icon-bubbles font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">احدث التعليقات : </span>
                                        </div>
                                        <div class="caption" style="float: left;">
                                            <a href="{{url('admin/more-reviews/'.$hospital->id)}}" >المزيد من التعليقات </a>

                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="portlet_comments_1">
                                                <!-- BEGIN: Comments -->
 
                                                @if($hospital->AvgRatingPath)
                                                @foreach($hospital->AvgRatingPath as $index=>$comment)
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


        

