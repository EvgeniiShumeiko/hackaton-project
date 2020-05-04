<?php

use Illuminate\Database\Seeder;

class UserTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 1)->create([
            'role' => 'teacher'
        ]);
    }
}
