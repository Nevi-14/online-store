<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            
    [
        [
            'name' =>'Carnivoras',
            'description' =>'Hace referencia a todas las plantas carnivoras en general.'
        ],
    
        [
     
            'name' =>'No Carnivoras',
            'description' =>'Hace referencia a cualquier tipo de planta.'
        ]
        ,
        [
     
            'name' =>'Otros Productos',
            'description' =>'Hace referencia a cualquier otro tipo de producto.'
        ]

    ]
    
    );

    foreach(DB::table("categories")->get() as $cat) {
        DB::table("categories")
            ->where("id", $cat->id)
            ->update(array("created_at"=>Carbon::now()));
    }


    }
}
