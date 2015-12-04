<?php

class ApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$id = Auth::id();
		$applications = Application::Where('user_id', '=', $id)->get();
		// load the view and pass the nerds
        return View::make('applications.index')
            ->with('applications', $applications);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('applications.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showVolunteeringPosts($id)
	{
		$volunteeringpost = Volunteeringpost::find($id);
		return View::make('applications.show')
			->with('volunteeringpost', $volunteeringpost);

	}

	public function applyVolunteeringPost()
	{	

		
		$dup = Application::Where(function($query)
			{	
				$appid = Input::get('appid');
				$id = Auth::id();
				$query->where('user_id', '=', $id)
					  ->where('post_id', '=', $appid);
					})->get();
		if($dup == '[]') {
		$appid = Input::get('appid');
		$id = Auth::id();
		$volunteeringposts = Volunteeringpost::Where('id', '=', $appid)->get();
		$application = new Application;
		foreach ($volunteeringposts as $volunteeringpost) {
		$application->user_id = $id;
		$application->post_id = $appid;
		$application->job_title = $volunteeringpost->job_title;
		$application->organization_name = $volunteeringpost->organization_name;
		$application->status = $volunteeringpost->status;
		$application->start_date = $volunteeringpost->start_date;
		$application->end_date = $volunteeringpost->end_date;
		$application->save();
		return 'applied';
	}
}else{
		return 'exists';
	}
}
	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

	
}
