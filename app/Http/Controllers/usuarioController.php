<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use Session;
use Redirect;

class usuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users= User::All();
		return view('usuario.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		User::create([
			'name'=> $request['name'],
			'email'=> $request['email'],
			'password'=> bcrypt($request['password'])
		]);

		return redirect('/usuarios')->with('message', 'Usuario creado correctamente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return view('usuario.edit', ['user'=>$user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$user = User::find($id);
		$user->fill($request->all());
		$user->save();
		Session::flash('message','Usuario editado correctamente');
		return redirect('/usuarios');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		User::destroy($id);

		Session::flash('message','Usuario eliminado correctamente');
		return redirect('/usuarios');
	}

}
