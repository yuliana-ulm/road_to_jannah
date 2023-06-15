<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "nama" => "Muhammad Rizky Al Farabi",
            "nim" => "2110131310007",
            "alamat" => "jl perdagangan",
            "jobdesk" => "back end"
        ]);

        Admin::create([
            "nama" => "Yuliana",
            "nim" => "2110131310007",
            "alamat" => "jl kidaung",
            "jobdesk" => "laporan proposal"
        ]);

        Admin::create([
            "nama" => "Dzaki",
            "nim" => "2110131310007",
            "alamat" => "jl cendana",
            "jobdesk" => "front end"
        ]);

    }
}
