<?php

class HomeController extends BaseController {

 /**
     * Service Model
     * @var Services
     */
    protected $service;

    /**
     * User Model
     * @var User
     */
    protected $user;
	 /**
     * Inject the models.
     * @param User $user
     */
    public function __construct(Service $service, User $user)
    {
        parent::__construct();
        $this->service = $service;
        $this->user = $user;
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return View
	 */
	public function getIndex()
	{
          // Get all the SERVICES
            $services = $this->service->orderBy('created_at', 'ASC')->take(3)->get();
          // Show the page
            return View::make('site/index', compact('services'));
	}
	
	public function postIndex()
        {
            $search = Input::get('search');
            
            $services = $this->service->where('slug', 'LIKE', '%'.$search.'%')->get();
            $users = $this->user->where('username', 'LIKE', '%'.$search.'%')->get();
            
            return View::make('site/search', compact('search','services', 'users'));
        }



}
