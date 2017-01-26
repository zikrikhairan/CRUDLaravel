<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSeminarKpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			DB::table('dosen')->insert(
				array(
					array(
					'id'=>'111',
					),
					array(
					'id'=>'112',	
					),
					array(
					'id'=>'113',	
					),
					array(
					'id'=>'114',
					),
					array(
					'id'=>'115',	
					),
					array(
					'id'=>'116',	
					),
				));
			DB::table('mahasiswa')->insert(
				array(
					array(
					'id'=>'1311521032',
					'password'=>Hash::make ('1234'),
					'nama'=>'Zikri Khairan',
					'tempat_lahir'=>'Padangpanjang',
					'status'=>'Aktif',
					
					),
					array(
					'id'=>'1311522006',
					'password'=>Hash::make ('1234'),
					'nama'=>'Rahmat Hidayanto',
					'tempat_lahir'=>'Sibolga',
					'status'=>'Aktif',
					),
					array(
					'id'=>'1311521004',
					'password'=>Hash::make ('1234'),
					'nama'=>'Suci Ramadhani',
					'tempat_lahir'=>'Dumai',
					'status'=>'Aktif',
					),
				));
			DB::table('proposal_kp')->insert(
				array(
					array(
					'id'=>'1311521032',
					'nama_instansi'=>'Microsoft',
					'lokasi_instansi'=>'USA',
					),
					array(
					'id'=>'1311522006',
					'nama_instansi'=>'Sony',
					'lokasi_instansi'=>'Japan',
					),
					array(
					'id'=>'1311521004',
					'nama_instansi'=>'Blackberry',
					'lokasi_instansi'=>'Canada',
					),
				));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('dosen')->delete();
		DB::table('mahasiswa')->delete();
		DB::table('proposal_kp')->delete();
	}

}
