<?php

use App\Models\SectionOne;
use Illuminate\Database\Seeder;

class SectionOneSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = SectionOne::create([
            'name' => 'Viganella',
            'title' => '2022 Fabrics',
            'paragraph' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa fuga quae aut sunt incidunt, architecto, nam voluptatem rem doloremque voluptatibus possimus voluptas sequi saepe quia natus perspiciatis doloribus, veritatis eligendi?',
            'offer_name' => '25% Offers On Fabrics',
        ]);
    }
}
