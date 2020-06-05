<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




/// Registertion Part



Route::post('social_register', 'API\AuthController@SocialRegister');
Route::post('login', 'API\AuthController@login'); //


 Route::group(['namespace' => 'API\Patient'], function () {
     
    Route::post('patient_register', 'PatientController@register');
    Route::post('patient_active', 'PatientController@active_patient');
    Route::post('insurance_companies/{id}', 'PatientController@InsuranceCompanies');
    // Patient only Auth
    Route::middleware('auth:api')->group(function () {
       Route::get('doctors_bookings/{page?}', 'PatientController@doctorsBookings');
       Route::get('hospitals_bookings/{page?}', 'PatientController@hospitalsBookings');
       Route::post('cancel_booking', 'PatientController@CancelBooking');
       Route::post('hosp_cancel_booking', 'PatientController@HospCancelBooking');
       Route::get('pharmacies_requests', 'PatientController@PharmaciesRequests');
       Route::get('requests_details/{id}', 'PatientController@RequestsDetails');
       Route::get('list_of_appointments', 'PatientController@ListOfApointments');
       Route::post('profile_update_patient', 'PatientController@ProfileUpdate');
    });
 
 });

/// Pharmacies area
Route::group(['namespace' => 'API\Pharmacies'], function () {
 Route::post('pharmacies', 'PharmaciesController@PharmaciesByCity');
 Route::post('pharmacy_search_byname', 'PharmaciesController@PharmacySearchByname');
 Route::get('pharmacy_profile/{branches_id}/{token}', 'PharmaciesController@pharmacyProfile');
 Route::post('top_pharmacies', 'PharmaciesController@TopPharmacies'); 

 Route::middleware('auth:api')->group(function () {
   Route::post('booking_pharmacies', 'PharmaciesController@PharmacyBooking');
   Route::post('check_promocode/{code}', 'PharmaciesController@CheckPromocodeapi');

 }); 

});// end Pharmacies Area
Route::group(['namespace' => 'API\Hospitals'], function () {
     Route::post('advanced_search_hosp', 'HospitalController@advancedSearchHost');
     Route::get('hospital_specialties', 'HospitalController@hospitalSpecialties');
     Route::get('hospital_search/{page}/{special_id}/{city_id?}', 'HospitalController@search_host');
     Route::post('search_map_hospitals', 'HospitalController@searchMap');
     Route::get('hosp_profile/{id}/{token}', 'HospitalController@hos_profile');
     Route::get('doctor_of_hospital/{page}/{hos_id}/{splic_id?}', 'HospitalController@DoctorOfHospital');
     Route::get('doctor_of_hospital_profile/{id}/{token}', 'HospitalController@DoctorOfHospitalProfile');
     Route::get('nurseries/{hospital}', 'NurseriesController@index');
     Route::get('top_hospitals', 'HospitalController@TopHospitals'); 

     Route::middleware('auth:api')->group(function () {
       Route::post('booking_nursery', 'NurseriesController@bookingNursery');
       Route::get('my_nursery/{page?}', 'NurseriesController@mYnursery');
       Route::post('cancel_nursery', 'NurseriesController@CancelNursery');
      


     });   
});


//// Start Favorites
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
//// End Favorites
 

Route::group(['namespace' => 'API\Consultings'], function () {
     Route::post('tamnaa', 'ConsultingsController@store');
     Route::post('new_tamany_chat', 'ConsultingsController@NewTamanyChat');
     Route::get('tamnaa_get_chat/{id}/{doctor_id}', 'ConsultingsController@get_chat');
     Route::get('get_doctors_specialties/{id}', 'ConsultingsController@GetDoctorsSpecialties');
     Route::get('tamnaa_list_chat/{id}', 'ConsultingsController@TamnaaListChat');     
});

/// Start Labs
Route::group(['namespace' => 'API\Labs'], function () {
  Route::post('labs', 'LabsController@LabsByMap');
  Route::get('labs_byName/{page?}', 'LabsController@labsByName');
  Route::get('labs_byCity/{city_id}', 'LabsController@labs_byCity');
  Route::get('lab_profile/{id}/{token}', 'LabsController@LabsProfile');
  Route::get('lab_insurance_companies/{id}', 'LabsController@LabInsuranceCompanies');
  Route::get('top_labs', 'LabsController@topLabs'); 

  Route::middleware('auth:api')->group(function () {
     Route::post('inquiries', 'LabsController@inquiriesLabs');
     Route::post('booking_lab', 'LabsController@bookingLabs');
     Route::get('labs_request', 'LabsController@labsRequest');
     Route::post('cancel_labs', 'LabsController@CancelLabs');
  });

}); /// End Labs

Route::group(['namespace' => 'API\Contact'], function () {
 
  Route::middleware('auth:api')->group(function () {
     
     Route::post('Contacts_us', 'ContactsController@store');
  });

}); /// End Contact


/// Basic Specialties



/// Start Operations

Route::group(['namespace' => 'API\Operations'], function () {
 
  Route::get('get_operations/{page}/{specialtie_id}', 'DoctorsOperationsController@index');
  Route::get('operations_profile/{id}', 'DoctorsOperationsController@profile');
  Route::middleware('auth:api')->group(function () {
     
      Route::post('booking_operations', 'BookingOperationsController@store');
      Route::get('my_operations', 'BookingOperationsController@index');
      Route::post('cancel_operation', 'BookingOperationsController@CancelOperation');
  });

}); /// End Contact 
/// End Operations

 

Route::get('get_privcy', 'API\PrivciesController@index'); 

Route::get('basic_specialties', 'API\BasicSpecialtiesController@index'); 
Route::get('abouts', 'API\AboutController@index'); 
Route::get('states', 'API\StatesController@index'); 
Route::get('cities/{id}', 'API\StatesController@get_cities'); 
Route::get('doctors_reviews/{id}/{page?}', 'API\ReviewsController@index'); 
Route::get('hospitals_reviews/{id}/{page?}', 'API\ReviewsController@HospitalsReviews'); 
Route::get('labs_reviews/{id}/{page?}', 'API\ReviewsController@labsReviews');
Route::get('pharmacies_reviews/{id}/{page?}', 'API\ReviewsController@PharmaciesReviews'); 

Route::get('countries', 'API\StatesController@countries'); 

Route::get('degrees', 'API\StatesController@get_degrees'); 
Route::get('universities/{id}', 'API\StatesController@get_universities'); 



Route::get('search_list/{page}/{special_id}/{city_id?}', 'API\SearchController@index'); 
Route::get('special_doctor/{special_id}/{city_id?}', 'API\SearchController@specialdoctor'); 
Route::post('search_map', 'API\SearchController@map_search'); 

Route::get('doctor_profile/{clinic}/{token}', 'API\DoctorController@profile');
Route::get('doctor_clinics/{doctor_id}', 'API\DoctorController@DoctorClinics');

Route::get('slots/{id}', 'API\DoctorController@get_slots'); 

Route::post('search_advanced', 'API\SearchController@advanced_search'); 

Route::get('search_byname/{page?}', 'API\SearchController@search_name'); 

Route::get('Insurance_companies', 'API\CompaniesController@index');
Route::get('all_insurance_companies', 'API\CompaniesController@AllInsuranceCompanies');
Route::get('Briefs', 'API\Brief\BriefsController@index');
Route::get('Contact_num', 'API\Brief\BriefsController@ContactNum');

Route::get('all_basic_specialtie', 'API\BasicSpecialtiesController@AllBasicSpecialtie'); 


Route::post('forget_password', 'API\Patient\PatientController@ForgetPassword');

Route::post('rest_password', 'API\Patient\PatientController@RestPassword');


/// Top
Route::get('top_doctor', 'API\SearchController@TopDoctor'); 



/// End ToP

//// Auth
Route::middleware('auth:api')->group(function () {
 
  Route::post('book_doctor', 'API\BookingController@store');
  Route::post('book_doctor_hosp', 'API\BookingController@BookDoctorHosp');
  Route::post('change_password', 'API\AuthController@changePassword');
  Route::get('labs_message', 'API\ChatController@rooms');
  Route::get('labs_message_room/{id}', 'API\ChatController@labs_message_room');
  Route::post('new_message', 'API\ChatController@NewMessage');

  Route::get('professional_title', 'API\DoctorApp\Doctor\DoctorsController@ProfessionalTitle');
});



//*************DoctorApp*********/ 
Route::group(['namespace' => 'API\DoctorApp\Doctor'], function () {

   Route::post('doctor_register', 'DoctorAuthController@store');
   Route::post('check_phon_eemail', 'DoctorAuthController@checkPhonEemail');
   Route::get('get_specialties', 'DoctorAuthController@GetSpecialties');
   
   //*************DoctorApp Auth *********/
   Route::middleware('auth:api')->group(function () {

   	Route::get('account_settings', 'DoctorAuthController@AccountSettings');
    Route::post('account_settings', 'DoctorAuthController@UpdateAccountSettings');

    Route::post('publish_account', 'DoctorAuthController@PublishAccount'); 

     /// only doctors
     Route::group(['middleware' => ['doctors']], function(){

        Route::get('doctorstamnaa_list_chat', 'ConsultingsController@DoctorstamnaaListChat');
        Route::get('doctorstamnaa_get_chat/{id}', 'ConsultingsController@GetChat');
        Route::post('doctorstamnaa_send_msg', 'ConsultingsController@SendMsg');

        Route::get('get_certificate', 'CertificatesController@index');
        Route::post('add_certificate', 'CertificatesController@store');

        Route::post('doctor_dates', 'DoctorsController@DoctorDates');
        Route::get('doctor_insurance_companies', 'DoctorsController@DoctorInsuranceCompanies');
        Route::post('add_insurance_companies', 'DoctorsController@AddInsuranceCompanies');
        Route::get('get_fees', 'DoctorsController@GetFees');
        Route::post('edite_fees', 'DoctorsController@EditeFees');

        Route::get('get_brief', 'DoctorsController@GetBrief');
        Route::post('edite_brief', 'DoctorsController@EditeBrief');

        Route::get('get_clinics_photo/{id}', 'DoctorsController@GetClinicsPhoto');
        Route::post('add_clinic_photo', 'DoctorsController@UploadClinicsPhoto');
        Route::post('remove_clinics_photo', 'DoctorsController@RemoveClinicsPhoto');

        Route::get('get_professional_info', 'DoctorsController@GetProfessionalInfo');
        Route::post('edite_professional_info', 'DoctorsController@EditeProfessionalInfo');

        Route::get('summary_appointment/{id}', 'DoctorsController@SummaryAppointment');
        Route::get('doctor_booking_list/{id}', 'DoctorsController@DoctorBookingList');
        Route::get('doctor_profile', 'DoctorsController@DoctorProfile');


        Route::get('clinic_address/{id}', 'DoctorsController@ClinicAddress');
        Route::post('clinic_address', 'DoctorsController@saveClinicAddress');

        Route::get('clinics_name/{id}', 'DoctorsController@ClinicsName');
        Route::post('clinics_name', 'DoctorsController@saveClinicsName');

         Route::post('clinic_cancel_day', 'DoctorsController@CancelDay');
         Route::post('clinic_day_close', 'DoctorsController@DayCondition'); 

         Route::get('clinic_times/{id}', 'DoctorsController@ClinicTimes');
         Route::post('change_clinic_times', 'DoctorsController@ChangeClinicTimes');
      
         Route::get('clinic_specialties', 'DoctorsController@ClinicSpecialties');
         Route::post('clinic_specialties', 'DoctorsController@AddClinicSpecialties');

         Route::get('get_clinics', 'ClinicsController@index');
         Route::post('delete_cli', 'ClinicsController@DeleteCli');
        
         Route::post('add_clinic', 'ClinicsController@store');
         Route::post('update_clinic', 'ClinicsController@update');
         Route::get('update_clinic/{id}', 'ClinicsController@edite');
         Route::get('clinics_droup', 'ClinicsController@ClinicsAdress');


        

     });/// end  doctors permissios
  
   });//*************End DoctorApp Auth *********///
 
});//*************DoctorApp Auth *********///



//*************HospitalApp*********/ 
Route::group(['namespace' => 'API\DoctorApp\Hospital'], function () {
  
    Route::post('hospital_register', 'HospitalsAuthController@store');
     
    //*************HospitalApp Auth *********/ 
    Route::middleware('auth:api')->group(function () {

      Route::group(['middleware' => ['hospital']], function(){
   
        Route::post('add_hospitals_specialty', 'HospitalsAuthController@AddHospitalsSpecialty');
        Route::post('add_hospitals_doctors', 'HospitalsController@AddHospitalsDoctors');
        Route::get('get_hospital_specialties', 'HospitalsController@GetHospitalSpecialties');
        Route::get('get_hospital_doctors_byname/{page?}', 'HospitalsController@GetGospitalDoctorsByname');
        Route::get('hospital_doctors_profile/{id}', 'HospitalsController@HospitalDoctorsProfile');
        Route::get('profile_hospital', 'HospitalsController@ProfileHospital');
        Route::get('hospital_photos', 'HospitalsController@HospitalPhotos');
        Route::post('hospital_photos', 'HospitalsController@AddHospitalPhotos');
        Route::post('del_hospital_photos', 'HospitalsController@DelHospitalPhotos');
        
        Route::get('hospital_nicu', 'HospitalsController@HospitalNicu');
        Route::post('hospital_nicu', 'HospitalsController@EditeHospitalNicu');

        Route::get('hospital_doctor_certificate/{id}', 'CertificatesController@index');
        Route::post('hospital_doctor_certificate', 'CertificatesController@store'); 
        
        Route::get('hospital_doctor_certificate/{id}', 'CertificatesController@index');
        
        Route::get('hospital_address', 'HospitalsController@HospitalAddress');
        Route::post('hospital_address', 'HospitalsController@EditeHospitalAddress');


        Route::get('hospital_name', 'HospitalsController@HospitalName');
        Route::post('hospital_name', 'HospitalsController@EditeHospitalName');


        Route::get('summary_appointment_hospital/{id}', 'HospitalsController@SummaryAppointment');

        Route::get('professional_info_hospital/{id}', 'HospitalsController@GetProfessionalInfo');
        Route::post('professional_info_hospital', 'HospitalsController@EditeProfessionalInfo');         
        
        Route::get('hospital_get_fees/{id}', 'HospitalsController@GetFees');
        Route::post('hospital_edite_fees', 'HospitalsController@EditeFees');

        Route::get('hospital_get_brief/{id}', 'HospitalsController@GetBrief');
        Route::post('hospital_edite_brief', 'HospitalsController@EditeBrief');  

        Route::post('add_branches', 'HospitalsController@AddBranches');
        Route::get('BranchesByStates/{id}', 'HospitalsController@BranchesByStates');

        Route::get('hospital_insurance_companies', 'HospitalsController@DoctorInsuranceCompanies');
        Route::post('hospital_insurance_companies', 'HospitalsController@AddInsuranceCompanies');
        
        Route::post('hospital_doctor_dates', 'HospitalsController@DoctorDates');
        Route::get('hospital_schedule', 'HospitalsController@schedule');


        Route::get('hospital_doctor_schedule/{id}', 'HospitalsController@HospitalDoctorSchedule');


        Route::get('hospital_booking_list/{id}/{doctor_id}', 'HospitalsController@DoctorBookingList');
        Route::get('hospital_branches', 'BranchesController@HospitalBranches');

        Route::post('hospital_del_branches', 'BranchesController@HospitalDelBranches');
        
        Route::post('hospital_edite_branches', 'BranchesController@HospitalEditeBranches');


        Route::post('hospital_cancel_day', 'ReservationsController@CancelDay');
        Route::post('hospital_day_close', 'ReservationsController@DayCondition'); 

      });  	
      
    });//*************End HospitalApp Auth *********///  
    

});//*************HospitalApp Auth *********///



//*************PharmacyApp*********/ 
Route::group(['namespace' => 'API\DoctorApp\Pharmacy'], function () {
  
    Route::post('pharmacy_register', 'PharmaciesAuthController@store');
     
    //*************HospitalApp Auth *********/ 
    Route::middleware('auth:api')->group(function () {

      Route::group(['middleware' => ['pharmacy']], function(){
      
      Route::get('pharmacy_profile_doctors', 'PharmaciesController@PharmacyProfile'); 

      Route::get('pharmacy_name_number', 'PharmaciesController@GetNameNumber');
      Route::post('pharmacy_name_number', 'PharmaciesController@AddNameNumber');

      Route::get('about_pharmacy', 'PharmaciesController@GetAboutPharmacy');
      Route::post('about_pharmacy', 'PharmaciesController@AddAboutPharmacy');   
      

      Route::get('pharmacy_insurance_companies', 'InsuranceCompaniesController@DoctorInsuranceCompanies');
      Route::post('pharmacy_insurance_companies', 'InsuranceCompaniesController@AddInsuranceCompanies'); 


      Route::get('pharmacy_slider/{page?}', 'PharmacySliderController@GetPharmacySlider');
      Route::post('pharmacy_slider', 'PharmacySliderController@AddPharmacySlider');
      Route::post('del_pharmacy_slider', 'PharmacySliderController@DelPharmacySlider');


      Route::post('add_pharmacy_branche', 'PharmaciesBranchesController@store');
      Route::get('list_pharmacy_branche', 'PharmaciesBranchesController@index');

      Route::post('del_pharmacy_branche', 'PharmaciesBranchesController@delete');
      Route::post('edite_pharmacy_branche', 'PharmaciesBranchesController@update');


      Route::get('requests_pharmacy/{status}', 'PharmaciesOrdersController@RequestsPharmacy');
      Route::post('accept_requests_pharmacy', 'PharmaciesOrdersController@AcceptRequestsPharmacy');





    });   
      
    });//*************End HospitalApp Auth *********///  
    

});//*************HospitalApp Auth *********///



//*************LabApp*********/ 
Route::group(['namespace' => 'API\DoctorApp\Lab'], function () {
  
    Route::post('lab_register', 'LabsAuthController@store');
     
    //*************HospitalApp Auth *********/ 
    Route::middleware('auth:api')->group(function () {

       Route::group(['middleware' => ['lab']], function(){
       
         Route::get('about_lab', 'LabsController@GetAboutLab');
         Route::post('about_lab', 'LabsController@AddAboutLab');

         Route::get('lab_name_number', 'LabsController@GetNameNumber');
         Route::post('lab_name_number', 'LabsController@AddNameNumber');


         Route::get('lab_insurance_companies', 'InsuranceCompaniesController@DoctorInsuranceCompanies');
         Route::post('lab_insurance_companies', 'InsuranceCompaniesController@AddInsuranceCompanies');


         Route::post('add_lab_branche', 'LabsBranchesController@store');
         Route::get('list_lab_branche', 'LabsBranchesController@index');

         Route::post('del_lab_branche', 'LabsBranchesController@delete');
         Route::post('edite_lab_branche', 'LabsBranchesController@update');

         Route::get('lab_examination', 'LabsController@GetExamination');
         Route::post('lab_examination', 'LabsController@AddExamination');

         Route::get('lab_dotor_profile', 'LabsController@LabDotorProfile');


         Route::get('lab_serivice', 'Labs_servicesController@DoctorInsuranceCompanies');
         Route::post('lab_serivice', 'Labs_servicesController@AddInsuranceCompanies');


         Route::get('lab_photo', 'LabsPhotosController@index');
         Route::post('lab_photo', 'LabsPhotosController@store');
         Route::post('remove_lab_photo', 'LabsPhotosController@RemoveLabsPhoto');


         Route::post('lab_add_appointment', 'labsAppointmentsController@store');
         Route::get('lab_summary_appointment', 'labsAppointmentsController@SummaryAppointment');

         Route::post('lab_cancel_day', 'labsAppointmentsController@CancelDay');
         
         
         Route::get('lab_booking/{id}', 'LabsReservationsController@index'); 
         Route::post('lab_close_bookimg', 'LabsReservationsController@LabCloseBookimg');
         

         Route::get('lab_list_chat', 'ChatLabsController@index');
         Route::get('lab_message_chat/{room}', 'ChatLabsController@LabMessageChat');
         Route::post('lab_send_message', 'ChatLabsController@LabSendMessage');
           
  

       });   
      
    });//*************End LabsApp Auth *********///  
    

});//*************LabApp Auth *********///




















