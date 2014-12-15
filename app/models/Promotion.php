<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Promotion extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'promotion';
	protected $primaryKey = 'promotion_id';
	public $timestamps = false;

	protected $fillable = array(
		'user_id',
		'detail',
		'timestamp',
		'time_start',
		'time_end',
		'picture',
		'active'
		);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('active','picture');

	
	
	
	
	
	
	
	
}
