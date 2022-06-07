<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Setting::create([
            'title' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
            'vision' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo suscipit quis quas tempore voluptate aliquid laboriosam in quibusdam sunt asperiores sapiente, enim ipsa, veniam non modi debitis aliquam voluptatibus placeat. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto consequuntur, assumenda illo ratione nobis ut, ipsum ducimus, aut asperiores impedit distinctio fuga consequatur labore. Fugit similique iste aut sequi ullam?',
            'email' => 'viganella@email.com',
            'phone' => '(+20)1111111100',
            'location' => 'El Sherouk, Gamaa Moul, Floor Number 2,',
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'instgram' => 'www.instgram.com',
        ]);
    }
}
