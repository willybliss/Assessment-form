<?php
use App\Model\Assessment_Appraiser;
use Illuminate\Database\Seeder;

class AssessmentAppraiserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return factory(Assessment_Appraiser::class,6)->create();

    }
}
