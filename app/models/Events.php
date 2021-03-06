<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Events extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'event';
	protected $primaryKey = 'event_id';
	public $timestamps = false;

	protected $fillable = array(
		'user_id',
		'name',
		'size',
		'timestamp',
		'time_start',
		'detail',
		'category',
		'location',
		'time_end'
	);

	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('timestamp');

}
