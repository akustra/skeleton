<?php

namespace Database\Seeders;

use App\Models\Client;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'surname' => "Stefan",
            'name' => 'Kowalski'
        ]);

        Client::create([
            'surname' => "Józef",
            'name' => 'Nowak'
        ]);
    }
}
