<?php

class DataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $seminar = Seminar::find(Auth::id());
  		// return View::make('data.show')->with('seminar', $seminar);
    	$seminar = Seminar::where('mahasiswa_id','=', Auth::id())->get();
        return View::make('data.index')->with('seminar', $seminar);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 $seminar = Seminar::find($id);
    	return View::make('data.show')->with('seminar', $seminar);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$seminar = Seminar::find($id);
    	return View::make('data.edit')->with('seminar', $seminar);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			//'mahasiswa_id'	 		=> 'required|unique:mahasiswa,id',
			'proposal_id'   		=> 'required|unique:proposal_kp,id',
			'dosen_id'   			=> 'required:dosen,id',
			'judul' 				=> 'required',
			'bidang' 				=> 'required',
			'tanggal_mulai' 		=> 'required',
			'tanggal_selesai' 		=> 'required',
			'pembimbing_lapangan' 	=> 'required',
			'tanggal_seminar' 		=> 'required',
			'nilai'	 				=> 'required'
    );
    $validator = Validator::make(Input::all(), $rules);
 
    if ($validator->fails()) {
        return Redirect::to('data/' . $id . '/edit')
            ->withErrors($validator);
    } else {
        // jika valid disimpan


        $seminar = Seminar::find($id); 
		$seminar->mahasiswa_id     		= Auth::id();//Input::get('mahasiswa_id');
		$seminar->proposal_id     		= Input::get('proposal_id');
		$seminar->dosen_id     			= Input::get('dosen_id');
		$seminar->judul     			= Input::get('judul');
		$seminar->bidang     			= Input::get('bidang');
		$seminar->tanggal_mulai     	= Input::get('tanggal_mulai');
		$seminar->tanggal_selesai   	= Input::get('tanggal_selesai');
		$seminar->pembimbing_lapangan   = Input::get('pembimbing_lapangan');
		$seminar->tanggal_seminar     	= Input::get('tanggal_seminar');
		$seminar->nilai     			= Input::get('nilai');

        $seminar->save();

		}
		 Session::flash('message', 'Berhasil melakukan perubahan data!');
        return Redirect::to('data/index'); 
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	$seminar = Seminar::find($id);
    $seminar->delete();
    Session::flash('message', 'Berhasil Menghapus Form Terdaftar');
    return Redirect::to('data/index');
	}


}
