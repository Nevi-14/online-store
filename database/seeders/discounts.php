<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class discounts extends Seeder
{
    public function run()
    {
        DB::table('discounts')->insert(
            
            [
                [
                    'name' =>'Default',
                    'percentage' =>0
                 
                ]
            ]
            
            );
        
            foreach(DB::table("discounts")->get() as $discount) {
                DB::table("discounts")
                    ->where("id", $discount->id)
                    ->update(array("created_at"=>Carbon::now()));
            }

    }
}
