<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class sizes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sizes')->insert(
            
    [
        [
            'name' =>'N/A'
        ],
    
        [
     
            'name' =>'S'
        ]
        ,
        [
     
            'name' =>'M'
        ],
        [
     
            'name' =>'L'
        ]

    ]
    
    );

    foreach(DB::table("product_sizes")->get() as $size) {
        DB::table("product_sizes")
            ->where("id", $size->id)
            ->update(array("created_at"=>Carbon::now()));
    }


    }
}
