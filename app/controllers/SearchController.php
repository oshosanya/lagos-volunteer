<?php

class SearchController extends \BaseController {

	public function executeSearch() 
	{
		$keyword = Input::get('keywords');
		$searchparam = Input::get('searchparam');
		//return $keyword;
		$posts = Volunteeringpost::all();
		foreach ($posts as $post) {
			if($post->status=='open'&&Str::contains($post->$searchparam, Str::lower($keyword)))
			{
				return "<div id='post'><p><strong>Organization:</strong>".$post->organization_name.'</p>'
				.'<p><strong>Job Title:</strong>'.$post->job_title.'</p>'
				.'<p><strong>Qualifications:</strong>'.$post->qualification.'</p>'
				."</div>";
			}
			else
			{
				return "No Record Matches your Search";
			}
		}
	}
}