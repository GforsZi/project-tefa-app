<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\vidios;
use App\Models\User;

class VidiosSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    vidios::factory(5)
      ->recycle([User::factory(3)->create()])
      ->create();
  }
}
