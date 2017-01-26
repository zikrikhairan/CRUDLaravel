<?php

class SeminarController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			// 'mahasiswa_id'	 		=> 'required:mahasiswa,id',
			'proposal_id'   		=> 'required|unique:proposal_kp,id',
			'dosen_id'   			=> 'required:dosen,id',
			'judul' 				=> 'required',
			'bidang' 				=> 'required',
			'tanggal_mulai' 		=> 'required',
			'tanggal_selesai' 		=> 'required',
			'pembimbing_lapangan' 	=> 'required',
			'tanggal_seminar' 		=> 'required',
			'nilai'	 				=> 'required',
			'file_nilai' 			=> 'required',
			'file_laporan' 			=> 'required',
			'file_pernyataan' 		=> 'required'
	);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) 
		{
			return Redirect::to('create')->withErrors($validator)->withInput();
		} 
		else 
		{

		$image = 'public/images/';
		$filename = Input::file('file_nilai')->getClientOriginalName();
		$filename1 = Input::file('file_laporan')->getClientOriginalName();
		$filename2 = Input::file('file_pernyataan')->getClientOriginalName();
		$seminar = new Seminar();

		$seminar->mahasiswa_id     = Auth::id();//Input::get('mahasiswa_id');
		$seminar->proposal_id     = Input::get('proposal_id');
		$seminar->dosen_id     = Input::get('dosen_id');
		$seminar->judul     = Input::get('judul');
		$seminar->bidang     = Input::get('bidang');
		$seminar->tanggal_mulai     = Input::get('tanggal_mulai');
		$seminar->tanggal_selesai     = Input::get('tanggal_selesai');
		$seminar->pembimbing_lapangan     = Input::get('pembimbing_lapangan');
		$seminar->tanggal_seminar     = Input::get('tanggal_seminar');
		$seminar->nilai     = Input::get('nilai');
		$seminar->file_nilai     = $filename;
		$seminar->file_laporan     = $filename1;
		$seminar->file_pernyataan     = $filename2;

		$seminar->save();

		$file_nilai = Auth::id().'.'.Input::file('file_nilai')->getClientOriginalName();
			Input::file('file_nilai')->move(__DIR__.'/../../files/berkasnilai',$file_nilai);
		$file_laporan = Auth::id().'.'.Input::file('file_laporan')->getClientOriginalName();
			Input::file('file_laporan')->move(__DIR__.'/../../files/berkaslaporan',$file_laporan);
		$file_pernyataan = Auth::id().'.'.Input::file('file_pernyataan')->getClientOriginalName();
			Input::file('file_pernyataan')->move(__DIR__.'/../../files/berkaspernyataan',$file_pernyataan);
		
		}
		Session::flash('message', '<h4>Pendaftaran Seminar Kerja Praktek Berhasil</h4>');
		return Redirect::to('homepage')->with('pesan', 'Silahkankan login kembali untuk melihat data anda!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($mahasiswa_id)
	{
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
