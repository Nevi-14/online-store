<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Statuses extends Seeder
{
    public function run()
    {
        DB::table('statuses')->insert(
            
            [
                [
                    'name' =>'Active'
                 
                ],
                [
                    'name' =>'Discontinued'
                 
                ],
                [
                    'name' =>'Not in stock'
                 
                ],
                [
                    'name' =>'Not Published'
                 
                ]
            ]
            
            );
        
            foreach(DB::table("statuses")->get() as $status) {
                DB::table("statuses")
                    ->where("id", $status->id)
                    ->update(array("created_at"=>Carbon::now()));
            }

    }
}
