<?php

    class Application extends Eloquent
    {
    	protected $guarded = array('id');
    	protected $fillable = array('organization_name', 'user_id', 'job_title', 'status', 'start_date', 'end_date', 'post_id');
    }