<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Chamado;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::all()->each(function(User $user){
            Chamado::factory()->count(5)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}