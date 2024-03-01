<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {

        $images = ['thumb1.png', 'thumb2.png', 'thumb3.png'];

        for ($i = 0; $i < 30; $i++) { 
            DB::table('posts')->insert([
                'title' => 'Nova unidade Simetra ' . ($i + 1),
                'description' => 'Para sua comodidade nós inauguramos mais uma unidade...',
                'content' => 'O laboratório Simetra traz mais uma novidade para sua clínica: novos exames de bioquímica básica em até 6 horas. Ampliamos nossa estrutura para melhor atendê-lo. O Simetra está em constante investimento para atender você cada vez melhor.',
                'thumb' => $images[rand(0, 2)],
                'image' => 'image.png',
            ]);
        }
    }
}
