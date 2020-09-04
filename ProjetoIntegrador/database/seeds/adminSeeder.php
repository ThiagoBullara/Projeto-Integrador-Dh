<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin -> id = '1';
        $admin -> name = 'BuyHood Admin';
        $admin -> email = 'buyhoodlocalfoods@gmail.com';
        $admin -> password = Hash::make('picanha22');
        $admin -> fotoPerfil = 'BuyHood.png';
        $admin -> admin = true;

        $admin->save();

    }
}
