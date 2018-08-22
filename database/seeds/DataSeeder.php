<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Data;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('data')->truncate();
 
		Data::create(array(
			'category_data'=>'Hewan',
			'name_data'=>'Kucing'
		));
		Data::create(array(
			'category_data'=>'Hewan',
			'name_data'=>'Anjing'
		));
		Data::create(array(
			'category_data'=>'Hewan',
			'name_data'=>'Jerapah'
		));
 		Data::create(array(
			'category_data'=>'Hewan',
			'name_data'=>'Kancil'
		));
		Data::create(array(
			'category_data'=>'Hewan',
			'name_data'=>'Katak'
		));
		Data::create(array(
			'category_data'=>'Tumbuhan',
			'name_data'=>'Beringin'
		));
		Data::create(array(
			'category_data'=>'Tumbuhan',
			'name_data'=>'Melati'
		));
		Data::create(array(
			'category_data'=>'Tumbuhan',
			'name_data'=>'Mawar'
		));
		Data::create(array(
			'category_data'=>'Tumbuhan',
			'name_data'=>'Anggur'
		));
		Data::create(array(
			'category_data'=>'Tumbuhan',
			'name_data'=>'Kelapa'
		));
		Data::create(array(
			'category_data'=>'Kendaraan',
			'name_data'=>'Mobil'
		));
		Data::create(array(
			'category_data'=>'Kendaraan',
			'name_data'=>'Motor'
		));
		Data::create(array(
			'category_data'=>'Kendaraan',
			'name_data'=>'Sepeda'
		));
		Data::create(array(
			'category_data'=>'Kendaraan',
			'name_data'=>'Kereta Api'
		));
		Data::create(array(
			'category_data'=>'Kendaraan',
			'name_data'=>'Pesawat'
		));
		Data::create(array(
			'category_data'=>'Kendaraan',
			'name_data'=>'Kapal'
		));
		Data::create(array(
			'category_data'=>'Bangunan',
			'name_data'=>'Rumah'
		));
		Data::create(array(
			'category_data'=>'Bangunan',
			'name_data'=>'Kantor'
		));
		Data::create(array(
			'category_data'=>'Bangunan',
			'name_data'=>'Ruko'
		));
		Data::create(array(
			'category_data'=>'Bangunan',
			'name_data'=>'Gedung'
		));
		Data::create(array(
			'category_data'=>'Bangunan',
			'name_data'=>'Sekolah'
		));
    }
}
