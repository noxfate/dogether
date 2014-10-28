<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Profile extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'profile';
	public $timestamps = false;

	protected $fillable = array('firstname',
		'lastname',
		'name',
		'email',
		'password',
		'telephone',
		'gender',
		'birthday',
		'activated',
		'picture',
		'address',
		'category',
		'description',
		'role'
		);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password','activated','picture','role');

}
