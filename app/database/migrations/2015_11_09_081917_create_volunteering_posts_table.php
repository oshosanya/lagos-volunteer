<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolunteeringPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volunteering_posts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id');
			$table->text('company_name', 65535);
			$table->text('post_name', 65535);
			$table->string('requirements', 256);
			$table->string('expected_qualifications', 256);
			$table->text('duration_type', 65535);
			$table->date('start_date');
			$table->date('end_date');
			$table->text('status', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('volunteering_posts');
	}

}
