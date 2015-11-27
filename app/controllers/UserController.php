<?php

class UserController extends \BaseController {

	//public $restful = true;

	public function index() {
		$url = URL::action('UserController@loginUser');
		return View::make('user.login');
	}

	public function loginUser() {
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password), true)) {
			return 'loggedin';
			}else{
				return "Login Credentials incorrect";
			}
		}

	public function logoutUser() {
		Auth::logout();
		return Redirect::intended('home');
	}

	public function checkLogin() {
		if (Auth::check()) {
			return 'loggedin';
		}
	}


	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	
	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
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
	 * GET /user/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}