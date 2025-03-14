<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Superheroes;
class SuperSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
Superheroes::create([
'hero_name' => 'Spider-Man',
'secret_identity' => 'Peter Parker',
'powers'=> 'climb walls',
'power_catagory' => 'Spider',
'origin'=> 'New York'
]);
}
}
