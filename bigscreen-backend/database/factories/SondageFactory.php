<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SondageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'q1' => 'kk@email.com',
            'q2' => 'Homme',
            'q3' => 28,
            'q4' => 2,
            'q5' => 'developpeur',
            'q6' => 'HTC Vive',
            'q7' => 'Occulus store',
            'q8' => 'Viveport',
            'q9' => 4,
            'q10' => 'regarder des films',
            'q11' => 3,
            'q12' => 2,
            'q13' => 5,
            'q14' => 1,
            'q15' => 2,
            'q16' => 'oui',
            'q17' => 'non',
            'q18' => 'oui',
            'q19' => 'non',
            'q20' => 'teleportation',            
        ];
    }
}
