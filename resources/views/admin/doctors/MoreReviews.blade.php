@extends('template.template')
@section('title')
{{ $doctor->name_ar.' '.$doctor->last_name_ar }}
@endsection
@section('css')

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
            <a href="{{ url('admin/doctors-profile/'.$doctor->id) }}">{{ $doctor->name_ar.' '.$doctor->last_name_ar}}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>التعليقات</span>
        </li>
    </ul>
                           
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title"> التعليقات 
    <small></small>
</h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
              <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="portlet_comments_1">
                                                <!-- BEGIN: Comments -->
 
                                                @if($doctor_reviews)
                                                @foreach($doctor_reviews as $reviews)
                                                <div class="mt-comments">
                                                    <div class="mt-comment">
                                                        <div class="mt-comment-body">
                                                            <div class="mt-comment-info">
                                                                <span class="mt-comment-author">{{ $reviews->patient_name }}</span>
                                                                <span class="mt-comment-date">{{ $reviews->created_at }}</span>
                                                                <span class="mt-comment-author" style="margin-right: 20px;">
                                                                 @for($x = 1; $x <= 5; $x++)
                                                                  @if($x > $reviews->rating)
                                                                  <span  class="fa fa-star"></span>
                                                                 @else
                                                                 <span class="fa fa-star  checked"></span>
                                                                @endif
                                                                @endfor
                                                                </span>
                                                            </div>
                                                            <div class="mt-comment-text">{{ $reviews->comment }}</div>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <hr>
                                                @endforeach
                                                @endif

                                                <!-- END: Comments -->
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                <?php echo $doctor_reviews->render(); ?>
                            </div>
                            
                        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@endsection


        

