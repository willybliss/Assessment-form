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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AppraiserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(AssessmentAppraiserTableSeeder::class);
        $this->call(AssessmentStaffTableSeeder::class);
    }
}
