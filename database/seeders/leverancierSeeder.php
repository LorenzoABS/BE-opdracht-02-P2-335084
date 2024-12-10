<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class leverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('leveranciers')->insert([
        [
            'naam' => 'Venco',
            'contactpersoon' => 'Bert van Linge',
            'leveranciernummer' => 'L1029384719',
            'mobiel' => '06-28493827',
            'aantal_verschillende_producten' => 4,
        ],
        [
            'naam' => 'Astra Sweets', 
            'contactpersoon' => 'Jasper del Monte',
            'leveranciernummer' => 'L1029284315',
            'mobiel' => '06-39398734',
            'aantal_verschillende_producten' => 4,
        ],
        [
            'naam' => 'Haribo',
            'contactpersoon' => 'Sven Stalman',
            'leveranciernummer' => 'L1029324748',
            'mobiel' => '06-24383291',
            'aantal_verschillende_producten' => 4,
        ],
        [
            'naam' => 'Basset',
            'contactpersoon' => 'Joyce Stelterberg',
            'leveranciernummer' => 'L1023845773',
            'mobiel' => '06-48293823',
            'aantal_verschillende_producten' => 4,
        ],
        [
            'naam' => 'De Bron',
            'contactpersoon' => 'Remco Veenstra',
            'leveranciernummer' => 'L1023857736',
            'mobiel' => '06-34291234',
            'aantal_verschillende_producten' => 4,
        ],
        [
            'naam' => 'Quality Street',
            'contactpersoon' => 'Johan Nooij',
            'leveranciernummer' => 'L1029234586',
            'mobiel' => '06-23458456',
            'aantal_verschillende_producten' => 4,
        ],
    ]);
}
}