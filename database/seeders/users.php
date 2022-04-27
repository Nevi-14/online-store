<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            
    [
        [
            'name'=>'Web Developer',
            'email' =>'workemailnelson@gmail.com',
            'password' =>'W3lcomeAb0ard',
            'role_id'=>'1'
        ],
        [ 'name'=>'Carnivorus Magic',
            'email' =>'carnivorousmagic@gmail.com',
            'password' =>'CM121020',
            'role_id'=>'4'
        ]

    ]
    
    );


    foreach(DB::table("users")->get() as $user) {
        DB::table("users")
            ->where("id", $user->id)
            ->update(array("password"=>Hash::make($user->password),"created_at"=>Carbon::now()));
            
    }


    }
}
