<?php
use App\Model\Appraiser;
use Illuminate\Database\Seeder;

class AppraiserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        return factory(Appraiser::class,10)->create();
    }
}
