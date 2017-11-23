<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('users')->insert([
    		[
	            'name' => 'admin',
	            'email' => 'admin@gmail.com',
	            'password' => bcrypt('password'),
	            'role' => 'root',
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
    		]
        ]);

        DB::table('types')->insert([
        	[
	            'name' => 'Farmacológicos',
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            [
	            'name' => 'Orgánicos',
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            [
	            'name' => 'Metales Pesados',
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
        ]);

        DB::table('pollutants')->insert([
        	[
	            'name' => 'Acetaminofen',
	            'type_id'=> 1,
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            [
	            'name' => 'Losartan',
	            'type_id'=> 1,
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            [
	            'name' => 'Ciprofloxacin',
	            'type_id'=> 2,
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
        ]);

        DB::table('year_maps')->insert([
        	[
	            'year' => 2000,
	            'iframe' => '<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.723178215048786&amp;lng=-74.16729712945556&amp;t=1&amp;z=13&amp;l=col2&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>',
	            'pollutant_id'=> 1,
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            [
	            'year' => 2001,
	            'iframe' => '<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.68949098430204&amp;lng=-74.22396684152221&amp;t=1&amp;z=13&amp;l=col2&amp;y=6&amp;tmplt=6&amp;hml=KML"></iframe>',
	            'pollutant_id'=> 1,
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            [
	            'year' => 2000,
	            'iframe' => '<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.723178215048786&amp;lng=-74.16729712945556&amp;t=1&amp;z=13&amp;l=col2&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>',
	            'pollutant_id'=> 2,
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            [
	            'year' => 2002,
	            'iframe' => '<iframe width="500" height="300" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col2+from+1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l&amp;viz=MAP&amp;h=false&amp;lat=4.723178215048786&amp;lng=-74.16729712945556&amp;t=1&amp;z=13&amp;l=col2&amp;y=2&amp;tmplt=2&amp;hml=KML"></iframe>',
	            'pollutant_id'=> 3,
	            'created_at' => date('Y-m-d'),
	            'updated_at' => date('Y-m-d')
            ],
            
        ]);
    }
}
