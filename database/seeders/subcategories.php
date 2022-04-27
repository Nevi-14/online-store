<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class subcategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert(
            
    [
        [
            'category_id' =>'1',
            'name' =>'Dioneas',
            'description' =>'Dioneas en general.'
        ],
        [
            'category_id' =>'1',
            'name' =>'Sarracenias',
            'description' =>'Sarracenias en general.'
        ],
        [
            'category_id' =>'1',
            'name' =>'Nepenthes',
            'description' =>'Nepenthes en general.'
        ],
        [
            'category_id' =>'1',
            'name' =>'Droseras',
            'description' =>'Droseras en general.'
        ],
        [
            'category_id' =>'1',
            'name' =>'Utricularias',
            'description' =>'Utricularias en general.'
        ],
        [
            'category_id' =>'1',
            'name' =>'Heliamphoras',
            'description' =>'Heliamphoras en general.'
        ],
        [
            'category_id' =>'2',
            'name' =>'Suculentas',
            'description' =>'Suculentas en general.'
        ],
        [
            'category_id' =>'3',
            'name' =>'Sustratos',
            'description' =>'Sustratos en general.'
        ],
        [
            'category_id' =>'3',
            'name' =>'Macetas',
            'description' =>'Macetas en general.'
        ],
        [
            'category_id' =>'3',
            'name' =>'Articulos',
            'description' =>'Articulos en general.'
        ],
    

    ]
    
    );

    foreach(DB::table("subcategories")->get() as $sub) {
        DB::table("subcategories")
            ->where("id", $sub->id)
            ->update(array("created_at"=>Carbon::now()));
    }


    }
}
