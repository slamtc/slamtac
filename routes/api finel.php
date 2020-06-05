

 Doctors

php artisan make:migration create_operations_bookings_table

php artisan make:seeder Operations_reservationsSeeder 


php artisan migrate:fresh --seed
php artisan passport:install

review
////
1 - Be sure return coorcert clinics_reservations in all fisrt lists
2 - Route::post('book_doctor', 'API\BookingController@store');



<?php

Route::middleware('auth:api')->group(function () {
  Route::post('change_password', 'API\AuthController@changePassword');
  //Route::get('labs_message', 'API\ChatController@rooms');
  //Route::get('labs_message_room/{id}', 'API\ChatController@labs_message_room');
  //Route::post('new_message', 'API\ChatController@NewMessage');
});



 Route::middleware('auth:api')->group(function () {
     
     Route::post('booking_lab', 'LabsController@bookingLabs');
     Route::get('labs_request', 'LabsController@labsRequest');
     Route::post('cancel_labs', 'LabsController@CancelLabs');
  });



/// Ask him why it make klash
Route::get('lab_insurance_companies/{id}', 'LabsController@LabInsuranceCompanies');







Route::get('requests_details/{id}', 'PatientController@RequestsDetails');
Route::get('pharmacies_requests', 'PatientController@PharmaciesRequests');  


Route::get('clinic_times', 'DoctorsController@ClinicTimes');

Route::group(['namespace' => 'API\Favorites'], function () {
  Route::middleware('auth:api')->group(function () {
     Route::post('add_favorites', 'FavoriteController@store');       
     Route::get('hospital_favorites/{page?}', 'FavoriteController@HospitalFavorites');
     Route::get('lab_favorites/{page?}', 'FavoriteController@LabFavorites');
     Route::get('pharmacies_favorites/{page?}', 'FavoriteController@PharmaciesFavorites');
     Route::get('doctors_favorites/{page?}', 'FavoriteController@DoctorsFavorites');
     Route::get('favorites_count', 'FavoriteController@FavoritesCount'); 
     Route::post('is_favorite', 'FavoriteController@IsFavorite');      
  });

});



 Route::group(['namespace' => 'API\Patient'], function () {
    Route::post('insurance_companies/{id}', 'PatientController@InsuranceCompanies');
 });

//// End Favorites


/// Start Labs
Route::group(['namespace' => 'API\Labs'], function () {
  Route::post('labs', 'LabsController@LabsByMap');
  Route::get('labs_byName/{page?}', 'LabsController@labsByName');
  Route::get('labs_byCity/{city_id}', 'LabsController@labs_byCity');
  Route::get('lab_profile/{id}/{token}', 'LabsController@LabsProfile');
  
  Route::get('top_labs', 'LabsController@topLabs'); 

 

}); /// End Labs
 
Route::get('doctors_reviews/{id}/{page?}', 'API\ReviewsController@index'); 
Route::get('hospitals_reviews/{id}/{page?}', 'API\ReviewsController@HospitalsReviews'); 
Route::get('labs_reviews/{id}/{page?}', 'API\ReviewsController@labsReviews');
Route::get('pharmacies_reviews/{id}/{page?}', 'API\ReviewsController@PharmaciesReviews'); 
 
Route::get('Insurance_companies', 'API\CompaniesController@index');










         

        

         



//*************HospitalApp*********/ 
Route::group(['namespace' => 'API\DoctorApp\Hospital'], function () {
  
    
     
    //*************HospitalApp Auth *********/ 
    Route::middleware('auth:api')->group(function () {
      Route::group(['middleware' => ['hospital']], function(){  
        Route::post('hospital_doctor_dates', 'HospitalsController@DoctorDates');  
      });   
    });//*************End HospitalApp Auth *********///  
});//*************HospitalApp Auth *********///
//*************PharmacyApp*********/ 
Route::group(['namespace' => 'API\DoctorApp\Pharmacy'], function () {
    Route::post('pharmacy_register', 'PharmaciesAuthController@store');     
    //*************HospitalApp Auth *********/ 
    Route::middleware('auth:api')->group(function () {
      Route::group(['middleware' => ['pharmacy']], function(){
      Route::get('pharmacy_name_number', 'PharmaciesController@GetNameNumber');
      Route::post('pharmacy_name_number', 'PharmaciesController@AddNameNumber');
      Route::get('about_pharmacy', 'PharmaciesController@GetAboutPharmacy');
      Route::post('about_pharmacy', 'PharmaciesController@AddAboutPharmacy');   
      Route::get('pharmacy_insurance_companies', 'InsuranceCompaniesController@DoctorInsuranceCompanies');
      Route::post('pharmacy_insurance_companies', 'InsuranceCompaniesController@AddInsuranceCompanies'); 
      Route::post('pharmacy_slider', 'PharmacySliderController@AddPharmacySlider');
      Route::post('del_pharmacy_slider', 'PharmacySliderController@DelPharmacySlider');
      Route::post('add_pharmacy_branche', 'PharmaciesBranchesController@store');
      Route::get('list_pharmacy_branche', 'PharmaciesBranchesController@index');
      Route::post('del_pharmacy_branche', 'PharmaciesBranchesController@delete');
      Route::post('edite_pharmacy_branche', 'PharmaciesBranchesController@update');
      Route::post('accept_requests_pharmacy', 'PharmaciesOrdersController@AcceptRequestsPharmacy');
    });   
      
    });//*************End HospitalApp Auth *********///  
});//*************HospitalApp Auth *********///





// Route::group(['namespace' => 'API\Hospitals'], function () {
//      Route::post('advanced_search_hosp', 'HospitalController@advancedSearchHost');
//      Route::get('hospital_specialties', 'HospitalController@hospitalSpecialties');
//      Route::get('hospital_search/{page}/{special_id}/{city_id?}', 'HospitalController@search_host');
//      Route::post('search_map_hospitals', 'HospitalController@searchMap');      
//      Route::get('nurseries/{hospital}', 'NurseriesController@index');
//      Route::get('top_hospitals', 'HospitalController@TopHospitals'); 
//      Route::middleware('auth:api')->group(function () 
//        Route::post('booking_nursery', 'NurseriesController@bookingNursery');
//        Route::get('my_nursery/{page?}', 'NurseriesController@mYnursery');
//        Route::post('cancel_nursery', 'NurseriesController@CancelNursery');
      


//      });   
// });




//////////***********Under Review**************///////////////

Route::get('slots/{id}', 'API\DoctorController@get_slots');
Route::post('advanced_search_hosp', 'HospitalController@advancedSearchHost');


Route::group(['namespace' => 'API\Consultings'], function () {
     //Route::post('tamnaa', 'ConsultingsController@store');
     //Route::post('new_tamany_chat', 'ConsultingsController@NewTamanyChat');
    // Route::get('tamnaa_get_chat/{id}', 'ConsultingsController@get_chat');
     //Route::get('get_doctors_specialties/{id}', 'ConsultingsController@GetDoctorsSpecialties');
});