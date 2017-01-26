<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//definisikan table lain dosen
		Schema::create('dosen',function($table){
			$table->string('id',20)->primary();
			$table->string('nama',45);
			$table->string('tempat_lahir',45);
			$table->string('tanggal_lahir',45);
			$table->integer('jenis_kelamin');
			$table->text('alamat',120);
			$table->integer('agama');
			$table->integer('status_perkawinan');
			$table->string('email',45);
			$table->string('no_telp',45);
			$table->integer('tahun_masuk');
			$table->string('no_ktp',45);
			$table->string('photo',45);
			$table->string('bank',45);
			$table->string('no_rek',45);
			$table->string('no_sertifikasi',45);
			$table->integer('tahun_sertifikasi');
			$table->string('file_sertifikasi',45);
			$table->string('no_npwp',45);
			$table->string('file_npwp',45);

		}); 
		//defini tabel identitas mahasiswa
		Schema::create('mahasiswa', function($table){
			$table->string('id',10);
			$table->string('password',64);
			$table->string('nama',45);
			$table->string('tempat_lahir',45);
			$table->date('tanggal_lahir');
			$table->integer('angkatan');
			$table->string('status',45);
			$table->integer('agama');
			$table->string('photo',45);
			$table->text('alamat_sekarang');
			$table->text('alamat_asal');
			$table->string('kota_asal',45);
			$table->string('dosen_id',20);
			$table->date('tanggal_masuk');
			$table->string('jalur_masuk',45);
			$table->string('pt_asal',45);
			$table->string('prodi_asal',45);
			$table->integer('sks_asal');
			$table->float('nilai_un');
			$table->string('sumber_dana', 45);
			$table->string('no_hp',45);
			$table->integer('jenis_kelamin');
			$table->string('sekolah_asal',45);
			$table->string('remember_token'); $table->timestamps(); 
			$table->primary('id');
			
		}); 
		//definisi proposal kp
		Schema::create('proposal_kp',function($table){
			$table->increments('id');
			$table->string('nama_instansi',128);
			$table->string('lokasi_instansi',45);
			$table->date('tanggal_mulai');
			$table->date('tanggal_selesai');
			$table->string('file_surat_permohonan',128);
			$table->string('file_proposal',45);
			$table->string('file_surat_balasan',45);
		});
		//definisi kerja praktek
		Schema::create('seminar_kp', function($table){
			$table->increments('id');
			$table->string('mahasiswa_id', 10);
			$table->unsignedInteger('proposal_id');
			$table->string('dosen_id', 20);
			$table->string('judul',128);
			$table->string('bidang', 45);
			$table->date('tanggal_mulai');
			$table->date('tanggal_selesai');
			$table->string('pembimbing_lapangan', 45);
			$table->date('tanggal_seminar');
			$table->string('nilai',3);
			$table->string('file_nilai',45);
			$table->string('file_laporan',45);
			$table->string('file_pernyataan',45);
			//$table->primary('id');
			
		}); 
		
		/* Schema::table('mahasiswa', function($table) {
			$table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
		}); */
		Schema::table('seminar_kp', function($table) {
			$table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('proposal_id')->references('id')->on('proposal_kp')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('dosen_id')->references('id')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
		}); 
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
