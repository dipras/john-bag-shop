<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WebInfo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        
        $webinfo = new WebInfo;
        $webinfo->name = "web_title";
        $webinfo->value = "JOHN BAG SHOP";

        $webinfo->save();
    }
}
