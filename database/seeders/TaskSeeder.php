<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel tasks.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'task Example 1',
                'description' => 'deskripsi test example1',
                'is_done' => false,
            ],
            [
                'title' => 'Deskripsi Test example2',
                'description' => 'deskripsi test example2',
                'is_done' => true,
            ],
            [
                'title' => 'Deskripsi Test example3',
                'description' => 'deskripsi test example3.',
                'is_done' => false,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
