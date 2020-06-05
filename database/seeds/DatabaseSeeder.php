<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
          aboutsTableSeeder::class,
          Basic_specialtiesTableSeeder::class,
          CountriesTableSeeder::class,
          UsersTableDataSeeder::class,
          StatesTableSeeder::class,
          CitiesTableSeeder::class,
          TitlesTableSeeder::class,
          HospitalsTableSeeder::class,
          insurance_companiesTableSeeder::class,
          hospital_specialtiesTableSeeder::class,
          AdminsTableSeeder::class,
          nurseriesTableSeeder::class,
          branchesTableSeeder::class,
          pharmaciesTableSeeder::class,
          pharmacies_branchesTableSeeder::class,
          pharmacy_slidersTableSeeder::class,
          LabsTableSeeder::class,
          labs_branchesTableSeeder::class,
          insurance_usersTableSeeder::class,
          services_listsTableSeeder::class,
          labs_servicesTableSeeder::class,
          BriefsSeeder::class,
          DegreesTableSeeder::class,
          universitiesSeeder::class,
          Sub_specialtiesSeeder::class,
          privciesSeeder::class,
          doctorsTableSeeder::class,
          ClinicsSeeder::class,
          Doctors_operationsSeeder::class,
          Operations_reservationsSeeder::class,
      ]);
    }
}
