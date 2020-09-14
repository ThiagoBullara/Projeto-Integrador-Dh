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

        $admin->save();

        $admin1 = new User();
        $admin1 -> id = '2';
        $admin1 -> name = 'Rei dos Whisky';
        $admin1 -> email = 'reidoswhisky@email.com';
        $admin1 -> password = Hash::make('picanha22');
        $admin1 -> fotoPerfil = 'fotoLogo1.jpg';

        $admin1->save();


        $admin2 = new User();
        $admin2 -> id = '3';
        $admin2 -> name = 'Coco Bambu';
        $admin2 -> email = 'cocobambu@email.com';
        $admin2 -> password = Hash::make('picanha22');
        $admin2 -> fotoPerfil = 'fotoLogo2.jpg';

        $admin2->save();
        
        $admin3 = new User();
        $admin3 -> id = '4';
        $admin3 -> name = 'Manish';
        $admin3 -> email = 'manish@email.com';
        $admin3 -> password = Hash::make('picanha22');
        $admin3 -> fotoPerfil = 'fotoLogo3.jpg';

        $admin3->save();


        $admin4 = new User();
        $admin4 -> id = '5';
        $admin4 -> name = 'O Sal';
        $admin4 -> email = 'osal@email.com';
        $admin4 -> password = Hash::make('picanha22');
        $admin4 -> fotoPerfil = 'fotoLogo4.jpg';

        $admin4->save();

        $admin5 = new User();
        $admin5 -> id = '6';
        $admin5 -> name = 'Restaurante ShiFu';
        $admin5 -> email = 'shifu@email.com';
        $admin5 -> password = Hash::make('picanha22');
        $admin5 -> fotoPerfil = 'fotoLogo5.jpg';

        $admin5->save();

        $admin6 = new User();
        $admin6 -> id = '7';
        $admin6 -> name = 'PAO Padarias';
        $admin6 -> email = 'paopadarias@email.com';
        $admin6 -> password = Hash::make('picanha22');
        $admin6 -> fotoPerfil = 'fotoLogo6.jpg';

        $admin6->save();      
        

    }
}
