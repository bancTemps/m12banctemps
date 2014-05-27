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
     * Category Model
     * @var $category
     */
    protected $category;
    
	 /**
     * Inject the models.
     * @param User $user
     */
    public function __construct(Service $service, User $user, Category $category)
    {
        parent::__construct();
        $this->service = $service;
        $this->user = $user;
        $this->category = $category;
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
            $categories = array("(Todas las categorias)");
            foreach (Category::all() as $cat){
                array_push($categories,$cat->nom);
            }
          // Show the page
            return View::make('site/index', compact('services','categories'));
	}
	
	public function postIndex()
        {
            $search = Input::get('search');
            $category = Input::get('category');         //la categoria se muestra como el indice del dropdown
            
            if ($category == 0){
                $services = $this->service->where('slug', 'LIKE', '%'.$search.'%')->get();
            } else {
                $services = $this->service->where('categoria_id', '=', $category)
                                          ->where('slug', 'LIKE', '%'.$search.'%')->get();
            }
            $users = $this->user->where('username', 'LIKE', '%'.$search.'%')->get();
            
            $categories = array("(Todas las categorias)");
            foreach (Category::all() as $cat){
                array_push($categories,$cat->nom);
            }
            
            return View::make('site/search', compact('search','services', 'users', 'category', 'categories'));
        }



}
