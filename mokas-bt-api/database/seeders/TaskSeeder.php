<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory()->count(3)->create();
        $tasks = [
            [
                'title' => 'helysin foglalas',
            ],
            [
                'title' => 'egyeztetes',
                'description' => 'igazgatoval megbeszeles',
                'status' => 'folyamatban',
            ],
        ];
    }
}
