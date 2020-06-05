<?php

use Illuminate\Database\Seeder;
use App\Privcy;

class privciesSeeder extends Seeder
{
     public function run()
    {
             
      $names[] = (object) [
      	        'privciy_ar' => '<h2>What is a privacy policy</h2>

<p>A privacy policy is a document that states what personal data you collect from your users, why, and how you keep it private.</p>
<p>The purpose of the privacy policy is to inform your users about how their data is being handled.</p>
<p>Hence, the privacy policy should be accessible for your users and kept in a plain and readable language.</p>',

      	        'privciy_en'=>'<h2>What is a privacy policy</h2>

<p>A privacy policy is a document that states what personal data you collect from your users, why, and how you keep it private.</p>
<p>The purpose of the privacy policy is to inform your users about how their data is being handled.</p>
<p>Hence, the privacy policy should be accessible for your users and kept in a plain and readable language.</p>',
      	        
      	        ];

               
       
      foreach ($names as $name_itm) { 
    	 Privcy::create([
            'privciy_ar'  => $name_itm->privciy_ar,
            'privciy_en'  => $name_itm->privciy_en,
         ]);
      }
    }
}
