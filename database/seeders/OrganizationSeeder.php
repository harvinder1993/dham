<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationSeeder extends Seeder
{
    public function run()
    {
        $organizationsData = [
            [
                'user_id' => 1,
                'name' => 'Company A',
                'email' => 'companya@example.com',
                'phone' => '123-456-7890',
                'address' => '123 Main Street',
                'estd' => '2020-01-01',
                'contact_person' => 'John Doe',
                'helping_center_id' => 1
            ],
            [
                'user_id' => 1,
                'name' => 'Company B',
                'email' => 'companyb@example.com',
                'phone' => '987-654-3210',
                'address' => '456 Elm Street',
                'estd' => '2019-05-15',
                'contact_person' => 'Jane Smith',
                'helping_center_id' => 1
            ],
            [
                'user_id' => 1,
                'name' => 'Company C',
                'email' => 'companyc@example.com',
                'phone' => '555-555-5555',
                'address' => '789 Oak Avenue',
                'estd' => '2018-10-20',
                'contact_person' => 'Alice Johnson',
                'helping_center_id' => 3
            ],
            [
                'user_id' => 1,
                'name' => 'Company D',
                'email' => 'companyd@example.com',
                'phone' => '777-777-7777',
                'address' => '321 Cedar Lane',
                'estd' => '2017-12-05',
                'contact_person' => 'Bob Wilson',
                'helping_center_id' => 2
            ],
            [
                'user_id' => 1,
                'name' => 'Company E',
                'email' => 'companye@example.com',
                'phone' => '111-222-3333',
                'address' => '555 Maple Road',
                'estd' => '2016-08-15',
                'contact_person' => 'Eve Adams',
                'helping_center_id' => 2
            ],
            // Add more organization data as needed
        ];

        foreach ($organizationsData as $data) {
            Organization::create($data);
        }
    }
}
