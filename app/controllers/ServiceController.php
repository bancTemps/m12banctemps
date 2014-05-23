<?php

use Illuminate\Support\Str;

class ServiceController extends BaseController {

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
     * @param Service $service
     * @param User $user
     */
    public function __construct(Service $service, User $user)
    {
        parent::__construct();

        $this->service = $service;
        $this->user = $user;
    }
    
	/**
	 * Returns all the blog posts.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		// Get all the blog posts
		$services = $this->service->orderBy('created_at', 'DESC')->paginate(10);

		// Show the page
		return View::make('service/index', compact('services'));
	}
        
        public function store(){
            
          $validator =             
            array(
                'nom' => 'required|unique:services|between:5,20|alpha_num',
                'descripcio' => 'required|min:4|alpha_dash',
                'dataInici' => 'required|date',
                'dataFinal' => 'required|date',
                'duracio' =>   'required|integer',
                'localitzacio' => 'required|alpha',
                'punts' => 'required|integer',
                'categoria' => 'required'
           ); 
        
          $v = Validator::make(Input::all(),$validator);
          
         if ($v->fails())
            {
                return Redirect::to('user/services/create')->withErrors($v);
            }else{
                $this->service->nom = Input::get( 'nom' );
                $this->service->descripcio = Input::get( 'descripcio' );
                $this->service->dataInici = Input::get( 'dataInici' );
                $this->service->dataFinal = Input::get( 'dataFinal' );
                $this->service->duracio = Input::get( 'duracio' );
                $this->service->localitzacio = Input::get( 'localitzacio' );
                $this->service->punts = Input::get( 'punts' );
                 $this->service->punts = Input::get( 'categoria' );
                $this->service->user_id = Auth::user()->id;;
                $slug =Input::get('nom');
                $slugName = Str::slug($slug ,'-');
                $this->service->slug = $slugName;
                $this->service->save();
                return Redirect::to('/user/services')
               ->with('servicio', 'Servicio añadido correctamente');
            }       
        }
        
    public function getDetail($slug) {
		$service = $this->service->where('slug', '=', $slug)->first();
		if (is_null($service))
		{
			return App::abort(404);
		}       
                
                $comments = $service->comments()->orderBy('created_at', 'ASC')->get();
                $user = $this->user->currentUser();
                $canComment = false;
                if(!empty($user)) {
                    $canComment = $user->can('post_comment');
                }
                
		return View::make('service/view_service', compact('service','comments', 'canComment'));
    }
    
    
    
    
    
    
    
    
    public function postDetail($slug){
        
        $user = $this->user->currentUser();
        $canComment = $user->can('post_comment');
		if ( ! $canComment)
		{
			return Redirect::to($slug . '#comments')->with('error', 'You need to be logged in to post comments!');
		}

		// Get this blog post data
		$service = $this->service->where('slug', '=', $slug)->first();

		// Declare the rules for the form validation
		$rules = array(
			'comment' => 'required|min:3'
		);

		// Validate the inputs
		$validator = Validator::make(Input::all(), $rules);

		// Check if the form validates with success
		if ($validator->passes())
		{
			// Save the comment
			$comment = new Valoration;
			$comment->user_id = Auth::user()->id;
			$comment->content = Input::get('comment');

			// Was the comment saved with success?
			if($service->comments()->save($comment))
			{
				// Redirect to this blog post page
				return Redirect::to( 'service/' .$slug . '#comments')->with('success', 'Your comment was added with success.');
			}

			// Redirect to this blog post page
			return Redirect::to('service/' .$slug . '#comments')->with('error', 'There was a problem adding your comment, please try again.');
		}

		// Redirect to this blog post page
		return Redirect::to('service/' .$slug)->withInput()->withErrors($validator);
	}

}
