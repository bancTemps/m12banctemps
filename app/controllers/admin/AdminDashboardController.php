<?php

class AdminDashboardController extends AdminController {

	/**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Inject the models.
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct();
        $this->user = $user;
    }

	/**
	 * Admin dashboard
	 *
	 */
	public function getIndex()
	{

		list($user,$redirect) = $this->user->checkAuthAndRedirect('user');
        if($redirect){return $redirect;}

        // Show the page
        return View::make('admin/home/home', compact('user'));
        //return View::make('admin/home/home');
	}

}