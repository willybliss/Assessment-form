<?php
use App\Model\Assessment_Staff;
use Illuminate\Database\Seeder;

class AssessmentStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return factory(Assessment_Staff::class,6)->create();

    }
}
