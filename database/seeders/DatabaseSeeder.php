<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // UWAGA!!!
        // Do wypełnienia prawidłowo seedera danymi, zapełniamy default'owy DatabaseSeeder,
        // i wykonujem instrukcję 'php artisan db:seed'

        // //admin
        // \DB::table('users')->insert([
        //     'name'=>'Marcin Stępień',
        //     'email'=>'dzafast@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Witolińska 2',
        //     'pesel'=>'71101401612',
        //     'phone'=>'607209696',
        //     'status'=>'active',
        //     'type'=>'admin',
        //     'car'=>'none',
        // ]);
        // //user
        // \DB::table('users')->insert([
        //     'name'=>'Adam Smith',
        //     'email'=>'adam@smith.com',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Ostrobramska 2',
        //     'pesel'=>'71101401216',
        //     'phone'=>'505458963',
        //     'status'=>'active',
        //     'type'=>'user',
        //     'car'=>'WO45226T',
        // ]);
        // //user
        // \DB::table('users')->insert([
        //     'name'=>'Robert Jendrysiak',
        //     'email'=>'jendrysiak@poczta.onet.pl',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Rodziwiczównu 12',
        //     'pesel'=>'74124503654',
        //     'phone'=>'402563584',
        //     'status'=>'active',
        //     'type'=>'user',
        //     'car'=>'WJ85695A',
        // ]);
        // //user
        // \DB::table('users')->insert([
        //     'name'=>'Magda Wojnacka',
        //     'email'=>'wojnacka@o2.pl',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Dobraniecka 152',
        //     'pesel'=>'7854062322',
        //     'phone'=>'608203698',
        //     'status'=>'active',
        //     'type'=>'user',
        //     'car'=>'WF03378T',
        // ]);
        // //user
        // \DB::table('users')->insert([
        //     'name'=>'Robert Kaczmarczyk',
        //     'email'=>'kaczka@gow.pl',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Myślenicka 3B',
        //     'pesel'=>'7854582322',
        //     'phone'=>'608205263',
        //     'status'=>'inactive',
        //     'type'=>'user',
        //     'car'=>'WO5699T',
        // ]);
        // //user-rentier
        // \DB::table('users')->insert([
        //     'name'=>'Tadeusz Mościcki',
        //     'email'=>'moscik12@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Krakowska 87',
        //     'pesel'=>'751132156',
        //     'phone'=>'905526987',
        //     'status'=>'active',
        //     'type'=>'rentier',
        //     'car'=>'WD789654J',
        // ]);
        // //user-rentier
        // \DB::table('users')->insert([
        //     'name'=>'Mariusz Kondratowicz',
        //     'email'=>'konradek@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Maratonu 569',
        //     'pesel'=>'961201536',
        //     'phone'=>'805635489',
        //     'status'=>'active',
        //     'type'=>'rentier',
        //     'car'=>'WR78965Y',
        // ]);
        // //user-rentier
        // \DB::table('users')->insert([
        //     'name'=>'Agnieszka Martynowicz',
        //     'email'=>'aga15@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'address'=>'ul. Samolotowa 1A',
        //     'pesel'=>'8414120452',
        //     'phone'=>'401235689',
        //     'status'=>'active',
        //     'type'=>'rentier',
        //     'car'=>'RT789654',
        // ]);
        // //user-rentier
        // \DB::table('users')->insert([
        //     'name'=>'Włodzimierz Zakościelny',
        //     'email'=>'none',
        //     'password'=>bcrypt('password'),
        //     'address'=>'Nowe Wiartaki 25A',
        //     'pesel'=>'69120201245',
        //     'phone'=>'601207895',
        //     'status'=>'active',
        //     'type'=>'rentier',
        //     'car'=>'RD45212J',
        // ]);
        // //user-rentier
        // \DB::table('users')->insert([
        //     'name'=>'Tomasz Radkowicz',
        //     'email'=>'radkow@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'address'=>'Nowy Targ 123',
        //     'pesel'=>'7812014236',
        //     'phone'=>'605563265',
        //     'status'=>'active',
        //     'type'=>'rentier',
        //     'car'=>'none',
        // ]);
        //parking    
        // \DB::table('parkings')->insert([
        //     'localization'=>'Warszawa-Praga',
        //     'description'=>'Miejsce postojowe w garażu podziemnym',
        //     'amount'=>'1',
        // ]); 

        // //parking    
        // \DB::table('parkings')->insert([
        //     'localization'=>'Wrocław_Stadion',
        //     'description'=>'Miejsce postojowe na podwórku posesji',
        //     'amount'=>'10',
        // ]); 

        // //parking    
        // \DB::table('parkings')->insert([
        //     'localization'=>'Radom',
        //     'description'=>'Garaż',
        //     'amount'=>'1',
        // ]); 
        // //parking    
        // \DB::table('parkings')->insert([
        //     'localization'=>'Kraków',
        //     'description'=>'Garaż podziemny',
        //     'amount'=>'3',
        // ]); 
        // //parking    
        // \DB::table('parkings')->insert([
        //     'localization'=>'Poznań',
        //     'description'=>'Miejsce garażowe (box) na parkingu podziemnym',
        //     'amount'=>'1',
        // ]); 
        // //visit    
        // \DB::table('visits')->insert([
        //     'rentier_id'=>'7',
        //     'user_id'=>'3',
        //     'date'=>'2022-11-28 09:00:00',
        // ]); 
        // //visit    
        // \DB::table('visits')->insert([
        //     'rentier_id'=>'9',
        //     'user_id'=>'4',
        //     'date'=>'2022-10-15 09:26:00',
        // ]); 
        // //visit    
        // \DB::table('visits')->insert([
        //     'rentier_id'=>'8',
        //     'user_id'=>'2',
        //     'date'=>'2022-10-15 09:26:00',
        // ]); 
        // //parking_users
        // \DB::table('parking_users')->insert([
        //     'parking_id'=>'1',
        //     'user_id'=>'8',
        // ]); 
        // //parking_users
        // \DB::table('parking_users')->insert([
        //     'parking_id'=>'3',
        //     'user_id'=>'7',
        // ]); 
        // //parking_users
        // \DB::table('parking_users')->insert([
        //     'parking_id'=>'4',
        //     'user_id'=>'9',
        // ]); 
        // //parking_users
        // \DB::table('parking_users')->insert([
        //     'parking_id'=>'5',
        //     'user_id'=>'10',
        // ]); 
        // //parking_users
        // \DB::table('parking_users')->insert([
        //     'parking_id'=>'2',
        //     'user_id'=>'6',
        // ]); 
        // //Country
        // \DB::table('countries')->insert([
        //     'name'=>'Polska',
        // ]); 
        // //Country
        // \DB::table('countries')->insert([
        //     'name'=>'Niemcy',
        // ]); 
        // //Country
        // \DB::table('countries')->insert([
        //     'name'=>'Włochy',
        // ]); 
        // //State
        // \DB::table('states')->insert([
        //     'name'=>'Mazowieckie',
        //     'country_id'=>'1',
        // ]); 
        // //State
        // \DB::table('states')->insert([
        //     'name'=>'Podkarpackie',
        //     'country_id'=>'1',
        // ]);
        // //State
        // \DB::table('states')->insert([
        //     'name'=>'Lubelskie',
        //     'country_id'=>'1',
        // ]);
        // //City
        // \DB::table('cities')->insert([
        //     'name'=>'Warszawa',
        //     'state_id'=>'1',
        // ]);
        // //City
        // \DB::table('cities')->insert([
        //     'name'=>'Wołomin',
        //     'state_id'=>'1',
        // ]);
        // //City
        // \DB::table('cities')->insert([
        //     'name'=>'Radzymin',
        //     'state_id'=>'1',
        // ]);
        // //City
        // \DB::table('cities')->insert([
        //     'name'=>'Pułtusk',
        //     'state_id'=>'1',
        // ]);
        // //specialization    
        // \DB::table('specializations')->insert([
        //     'name'=>'Miejsca postojowe',
        // ]);
        // //specialization    
        // \DB::table('specializations')->insert([
        //     'name'=>'Noclegi',
        // ]);
        // //specialization    
        // \DB::table('specializations')->insert([
        //     'name'=>'Garaż podziemny',
        // ]);
        // //specialization_user
        // \DB::table('specialization_users')->insert([
        //     'user_id'=>'6',
        //     'specialization_id'=>'1',
        // ]);
        // \DB::table('specialization_users')->insert([
        //     'user_id'=>'7',
        //     'specialization_id'=>'1',
        // ]);
        // \DB::table('specialization_users')->insert([
        //     'user_id'=>'8',
        //     'specialization_id'=>'1',
        // ]);
        // \DB::table('specialization_users')->insert([
        //     'user_id'=>'9',
        //     'specialization_id'=>'3',
        // ]);
        // \DB::table('specialization_users')->insert([
        //     'user_id'=>'9',
        //     'specialization_id'=>'2',
        // ]);
        // \DB::table('specialization_users')->insert([
        //     'user_id'=>'10',
        //     'specialization_id'=>'4',
        // ]);
    }
}
