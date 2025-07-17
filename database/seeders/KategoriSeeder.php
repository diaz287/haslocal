<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\User;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            $user = User::factory()->create();
        }

        Kategori::create([
            'nama' => 'Bathimetri',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nostrum!',
            'user_id' => $user->id,
        ]);

        Kategori::create([
            'nama' => 'Topographi',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nostrum!',
            'user_id' => $user->id,
        ]);

        Kategori::create([
            'nama' => 'Geodetik',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nostrum!',
            'user_id' => $user->id,
        ]);

        Kategori::create([
            'nama' => 'Cadastral',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nostrum!',
            'user_id' => $user->id,
        ]);

        Kategori::create([
            'nama' => 'Hidrografi',
            'keterangan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, nostrum!',
            'user_id' => $user->id,
        ]);
    }
}
