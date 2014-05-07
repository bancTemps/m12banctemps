<?php

class HomeController extends BaseController {

	/**
     * User Model
     * @var User
     */
    protected $user;
	

	 /**
     * Inject the models.
     * @param User $user
     */
    public function __construct(Post $post, User $user)
    {
        parent::__construct();
        $this->user = $user;
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		return View::make('site/index');

	}



}
