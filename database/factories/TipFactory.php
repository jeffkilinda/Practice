<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tip;
use Faker\Generator as Faker;


$factory->define(Tip::class, function (Faker $faker) {
    return [
        
        //'date'=>$faker->date('Y-m-d'),
        'date'=>$faker->randomElement($array = array ('2019-10-24')),
        'time'=>$faker->time('h:i'),
        'league'=>$faker->randomElement($array = array ('Champions League','Europa League','Premier League','Championship')), // 'b'
        'team1'=>$faker->randomElement($array = array ('Arsenal','Chelsea','Man U','Man City','Everton','Torino','Juventus','Bayern Munich','Barcelona','Real Madrid','Atalanta')),
        'team2'=>$faker->randomElement($array = array ('Arsenal','Chelsea','Man U','Man City','Everton','Torino','Juventus','Bayern Munich','Barcelona','Real Madrid','Atalanta')),
        'prediction_id'=>$faker->randomElement($array = array ('1','2','3','4')),
        'odd'=>$faker->randomFloat(2, 1, 9),
        'results'=>$faker->randomElement($array = array ('1-2','0-0','2-0','5-2','2-2','0-4')),
        'status_id'=>$faker->randomElement($array = array ('1','2','3','4')),
       
        'type_id'=>$faker->randomElement($array = array ('1','2'))
    ];
});
