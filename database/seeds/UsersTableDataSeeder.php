<?php
  
use Illuminate\Database\Seeder;
use App\User;
  
class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $names= [{"email": 'sadasdas' }];
          
$names[] = (object) ['email' => 'ahmed_A_h_A','permissions'=>1,'cl_street_name_ar'=>'شارع التحرير  ','cl_street_name_en'=>'Tahrir street'];
$names[] = (object) ['email' => 'd_mona','permissions'=>1,'cl_street_name_ar'=>'شارع مدصق ','cl_street_name_en'=>'Mossadak Street'];


$names[] = (object) ['email' => 'ce_elAml','permissions'=>4,'cl_street_name_ar'=>'شارع الامل ','cl_street_name_en'=>'El-Amal St'];

$names[] = (object) ['email' => 'al-salam-hospital','permissions'=>3,'cl_street_name_ar'=>'كورنيش النعادى','cl_street_name_en'=>'Maadi Corniche'];




$names[] = (object) ['email' => 'dar-ElFouad-hospital','permissions'=>3,'cl_street_name_ar'=>'شارع  المنيل ','cl_street_name_en'=>'Manial Street'];




$names[] = (object) ['email' => 'patient1','permissions'=>2,'cl_street_name_ar'=>'شارع  المنيل ','cl_street_name_en'=>'Manial Street'];


$names[] = (object) ['email' => 'patient2','permissions'=>2,'cl_street_name_ar'=>'شارع  المنيل ','cl_street_name_en'=>'Manial Street'];



$names[] = (object) ['email' => 'el-Ezaby','permissions'=>5,'cl_street_name_ar'=>'شارع الاسلام','cl_street_name_en'=>'El-isalm st'];
$names[] = (object) ['email' => 'Misr-Pharmacies','permissions'=>5,'cl_street_name_ar'=>'شارع الاسلام','cl_street_name_en'=>'El-isalm st'];
$names[] = (object) ['email' => 'sayf-Pharmacies','permissions'=>5,'cl_street_name_ar'=>'شارع الاسلام','cl_street_name_en'=>'El-isalm st'];


$names[] = (object) ['email' => 'hayat-Hospital','permissions'=>3,'cl_street_name_ar'=>'ش مكة المكرمة','cl_street_name_en'=>'St. Mecca'];
$names[] = (object) ['email' => 'tabarak-hospital','permissions'=>3,'cl_street_name_ar'=>'شارع محور مصطفى كامل','cl_street_name_en'=>'Mostafa Kamel Street'];
$names[] = (object) ['email' => 'alrahma-hospital','permissions'=>3,'cl_street_name_ar'=>'ميدان الجامع','cl_street_name_en'=>'Jamea Square'];
$names[] = (object) ['email' => 'alfaruq-hospital','permissions'=>3,'cl_street_name_ar'=>'شارع الاسلام','cl_street_name_en'=>'El-isalm st'];
$names[] = (object) ['email' => 'aldamrdash-hospital','permissions'=>3,'cl_street_name_ar'=>'ش الدمرداش  ','cl_street_name_en'=>'aldamrdash st'];
$names[] = (object) ['email' => 'san-bitir-hospital','permissions'=>3,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];






$names[] = (object) ['email' => 'albaraj-labs','permissions'=>6,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'alfa-labs','permissions'=>6,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'almukhtabar-labs','permissions'=>6,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'alshams-labs','permissions'=>6,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'hisab-labs','permissions'=>6,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];












//// doctors
$names[] = (object) ['email' => 'omr_khayrat','permissions'=>1,'cl_street_name_ar'=>'شارع عمر خيرت','cl_street_name_en'=>'omr_khayrat st
'];


$names[] = (object) ['email' => 'salman_muhamad','permissions'=>1,'cl_street_name_ar'=>'شارع سلمان محمد','cl_street_name_en'=>'salman muhamad st 
'];

$names[] = (object) ['email' => 'omr_hasuna','permissions'=>1,'cl_street_name_ar'=>'عمر حسنوونه ','cl_street_name_en'=>'omr_hasuna st
'];

$names[] = (object) ['email' => 'nada_center','permissions'=>4,'cl_street_name_ar'=>'شارع الندا ','cl_street_name_en'=>'El nada center
'];

$names[] = (object) ['email' => 'oman_center','permissions'=>4,'cl_street_name_ar'=>'عمارات عمان','cl_street_name_en'=>'oman st
'];
$names[] = (object) ['email' => 'safa_center','permissions'=>4,'cl_street_name_ar'=>'شارع الصفا','cl_street_name_en'=>'Safa center
'];
$names[] = (object) ['email' => 'morad_morsy','permissions'=>1,'cl_street_name_ar'=>'شارع مراد','cl_street_name_en'=>'morad st
'];
$names[] = (object) ['email' => 'samy_elhendy','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'nawal_center','permissions'=>4,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'ali_quny','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'mona_elsyed','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'taype_center','permissions'=>4,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'alharm_center','permissions'=>4,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'al_tawfq_center','permissions'=>4,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'nacr_hassan','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'el_moner_center','permissions'=>4,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'nwaf_center','permissions'=>4,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'Emad_hassan','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'mostfa_nibul','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'ali_syed','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'nabil_syed','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];
$names[] = (object) ['email' => 'fathy_magdy','permissions'=>1,'cl_street_name_ar'=>'عبد الرحمن الرفاعي','cl_street_name_en'=>'eabd alruhmin alrifaei
'];








       
        foreach ($names as $name_itm) { 
	    	User::create([
	            'email'              => $name_itm->email.'@hotmail.com',
	            'password'           => bcrypt('123456'),
	            'phone'              => '01222222222',
	            'is_active'          => '1',
                'permissions'        =>  $name_itm->permissions,
	            'token_device'       => 'token_device',
	        ]);
    	}
    }
}