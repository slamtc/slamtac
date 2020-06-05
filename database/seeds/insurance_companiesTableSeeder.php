<?php

use Illuminate\Database\Seeder;
use App\Insurance_company;


class insurance_companiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
$names[] = (object) ['company_name_ar' => 'الدوليه للتامين ','company_name_en'=> 'International Insurance'];
$names[] = (object) ['company_name_ar' => 'الغربيه للتامين','company_name_en'=> 'Western Insurance'];
$names[] = (object) ['company_name_ar' => 'الشرقيه للتامين','company_name_en'=> 'Eastern Insurance'];
$names[] = (object) ['company_name_ar' => 'ارمكو','company_name_en'=> 'Armco'];

       
        foreach ($names as $name_itm) { 
	    	Insurance_company::create([
	            'company_name_ar'  => $name_itm->company_name_ar,
	            'company_name_en'  => $name_itm->company_name_en,
	        ]);
    	}
    }
}
