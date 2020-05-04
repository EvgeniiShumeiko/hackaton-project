<?php

use Illuminate\Database\Seeder;

class UserStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 3)->create([
            'role' => 'student'
        ]);
    }
}
