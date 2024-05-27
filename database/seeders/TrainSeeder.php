<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker /* <-- = use Faker/Generator*/): void
    {

        //array delle aziende
        $aziende = ['Trenitalia SpA','Trentino Trasporti Esercizio Srl','Trenord Srl','Impresa Ferroviaria Italiana','RFI','Ferservizi'];

        //con i seeder generiamo i seeders e li salviamo nel db attraverso 
        // il model Train.php
        for($i = 0; $i < 100; $i++){
            $new_train = new Train(); // Creiamo l'istanza Train che si riferisce al model Train
            $new_train->azienda = $faker->randomElement($aziende);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->bothify('??########');
            $new_train->numero_carrozze = $faker->numberBetween(1,20);
            $new_train->in_orario = $faker->boolean() === true ? 'Si' : 'No';
            $new_train->cancellato  = $faker->boolean() === true ? 'Si' : 'No';
            $new_train->save(); //salviamo i dati nel db
        }
    }
}