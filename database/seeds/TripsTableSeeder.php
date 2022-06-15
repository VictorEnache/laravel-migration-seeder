<?php

use App\Trip;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
                'destinazione' => 'Azzorre',
                'prezzo' => 1000,
                'giorni' => '7',
                'data_partenza' => '12/06/2022',
                'data_ritorno' => '19/06/2022',
                'attivita' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat debitis perferendis accusantium reiciendis earum? Culpa consectetur asperiores quas nihil, 
                qui sed error unde libero ab omnis neque ipsa hic nesciunt!,',
                'image' => 'https://picsum.photos/200/300'
            ],

            [
                'destinazione' => 'MOldavia',
                'prezzo' => 600,
                'giorni' => '7',
                'data_partenza' => '02/04/2022',
                'data_ritorno' => '09/04/2022',
                'attivita' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat debitis perferendis accusantium reiciendis earum? Culpa consectetur asperiores quas nihil, 
                qui sed error unde libero ab omnis neque ipsa hic nesciunt!,',
                'image' => 'https://picsum.photos/200/300'
            ],

            [
                'destinazione' => 'Malta',
                'prezzo' => 2000,
                'giorni' => '7',
                'data_partenza' => '20/09/2022',
                'data_ritorno' => '27/09/2022',
                'attivita' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat debitis perferendis accusantium reiciendis earum? Culpa consectetur asperiores quas nihil, 
                qui sed error unde libero ab omnis neque ipsa hic nesciunt!,',
                'image' => 'https://picsum.photos/200/300'
            ]

        ];

        foreach($trips as $trip){
            $new_trip = new Trip();
            $new_trip->destinazione = $trip['destinazione'];
            $new_trip->prezzo = $trip['prezzo'];
            $new_trip->giorni = $trip['giorni'];
            $new_trip->data_partenza = $trip['data_partenza'];
            $new_trip->data_ritorno = $trip['data_ritorno'];
            $new_trip->attivita = $trip['attivita'];
            $new_trip->image = $trip['image'];
            $new_trip->save();
        }
    }
}
