<?php

class AdminDashboardController extends AdminController {

	/**
     * User Model
     * @var User
     */
    protected $user;
    protected $municipio;
    /**
     * Inject the models.
     * @param User $user
     */
    public function __construct(User $user, Municipio $municipio)
    {
        parent::__construct();
        $this->user = $user;
        $this->municipio = $municipio;
    }

	/**
	 * Admin dashboard
	 *
	 */
	public function getIndex(){        
        list($user,$redirect) = $this->user->checkAuthAndRedirect('user');
        if($redirect){return $redirect;}
        //$municipios = $this->municipio->get();
        $municipios = DB::select("select municipios.nombre , count(municipios.id) as valor from users, municipios where municipios.id = users.municipio_id group by municipios.nombre");
        //echo '<pre>';var_dump($municipios);

        // Show the page
        return View::make('admin/home/home', compact('user','municipios'));
        
	}

}