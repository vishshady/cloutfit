<?php

use Illuminate\Database\Seeder;

class StagingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             // Connect to production database
     $live_database = DB::connection('mysql');

     // Get table data from production
     foreach($live_database->table('table_name')->get() as $data){

        // Save data to staging database - default db connection
        // DB::table('table_name')->insert((array) $data);
        print($data);

     }

    //  // Get table_2 data from production
    //  foreach($live_database->table('table_2_name')->get() as $data){

    //     // Save data to staging database - default db connection
    //     DB::table('table_2_name')->insert((array) $data);

    //  }
    }
}
