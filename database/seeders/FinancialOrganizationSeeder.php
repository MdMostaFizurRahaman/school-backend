<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FinancialOrganization;

class FinancialOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FinancialOrganization::create([
            'name' => "Organization One",
            'short_name' => "OA",
            'address' => 'Dhaka, Bangladesh',
        ]);

        FinancialOrganization::create([
            'name' => "Organization Two",
            'short_name' => "ABC",
            'address' => 'Dhaka, Bangladesh',
        ]);

        FinancialOrganization::create([
            'name' => "Organization Three",
            'short_name' => "THR",
            'address' => 'Dhaka, Bangladesh',
        ]);
    }
}
