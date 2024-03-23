<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Todo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        [
        'name' => 'Admin',

        'email' => 'admin@gmail.com',

        'email_verified_at' => now(),

        'password' => '$2y$12$/yzbNlOsTig4XdtT5u54NOn8781FWelCb198lrnZl/j'  
                    ,
        'remember_token' => Str::random(10),

        'is_admin' => true
        ]
        ;

    }
}
