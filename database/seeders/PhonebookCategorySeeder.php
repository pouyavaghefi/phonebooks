<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonebookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phonebook_categories')->insert(
            array(
                [
                    'name' => 'شخصی',
                ],
                [
                    'name' => 'تجاری',
                ],
            )
        );
    }
}
