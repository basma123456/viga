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
         $this->call(AdminSeederTable::class);
         $this->call(GovernorateSeederTable::class);
         $this->call(CitySeederTable::class);
         $this->call(SectionOneSeederTable::class);
         $this->call(SettingSeederTable::class);
    }
}
