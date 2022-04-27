<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class tax extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tax_rates')->insert(
            
    [
        [
            'name' =>'IVA',
            'rate'=>'13'
        ]
    ]
    
    );

    foreach(DB::table("tax_rates")->get() as $tax) {
        DB::table("tax_rates")
            ->where("id", $tax->id)
            ->update(array("created_at"=>Carbon::now()));
    }


    }
}
