<?php



//Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');



Route::group(['prefix' => 'admin','namespace'=>'Admin'], function(){

        
    
    //Route::post('login', 'AdminAuthController@dologin');
        
    Route::group(['middleware' => ['auth:admin']], function(){

      

      Route::namespace('Doctors')->group(function () {  
        Route::resource('doctor','DoctorsController'); 
        Route::get('doctors-profile/{id}', 'DoctorsController@DoctorsProfile');
        Route::get('booking-info/{reservation}', 'DoctorsController@BookingInfo');
        Route::get('doctors-centers', 'DoctorsController@DoctorsCenters');                  
        Route::get('more-reviews-doctor/{doctor}', 'DoctorsController@MoreReviewsdDoctor');
      });
 
      

      Route::post('logout', 'AdminAuthController@logout');

      Route::resource('basic_specialties', 'Basic_pecialtiesController');
      Route::resource('abouts','AboutController');

      Route::namespace('Main')->group(function () {  
         Route::get('main', 'MainController@index');      
      }); 

      Route::namespace('Hospitals')->group(function () {  
         Route::resource('hospitals','HospitalsController');
         Route::get('hospital-doctors/{id}', 'HospitalsController@HospitalDoctors');  
         Route::get('more-reviews/{hospital}', 'HospitalsController@MoreReviews');  



      });
 
    });
});
