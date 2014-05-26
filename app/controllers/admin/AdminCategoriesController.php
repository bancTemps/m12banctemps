<?php

class AdminCategoriesController extends AdminController {

    /**
     * Category Model
     * @var Category
     */
    protected $category;

    /**
     * Service Model
     * @var Service
     */
    protected $service;

    /**
     * Inject the models.
     * @param Category $category
     * @param Service $service
     */
    public function __construct(Service $service, Category $category)
    {
        parent::__construct();
        $this->service = $service;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        // Title
        $title = Lang::get('admin/users/title.user_management');

        // Grab all the categories
        $categories = $this->category;

        // Show the page
        return View::make('admin/categories/index', compact('categories', 'title'));
    }
    
    
 
        public function getCreate()
    {
        // All roles
        $category = $this->category;


		$title = 'Crear nueva Categoria';

		// Mode
		$mode = 'create';

		// Show the page
		return View::make('admin/categories/create_edit', compact('category', 'title', 'mode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate()
    {

        $this->category->nom = Input::get( 'nom' );
        $this->category->descripcion = Input::get( 'descripcio' );
        $slug =Input::get('nom');
        $slugName = Str::slug($slug ,'-');
        $this->category->slug = $slugName;
        $this->category->save();

        if ( $this->category->slug )
        {
   
            return Redirect::to('admin/categories/' . $this->category->id . '/edit')->with('success', Lang::get('admin/users/messages.create.success'));
        }
        else
        {
            // Get validation errors (see Ardent package)
            $error = $this->category->errors()->all();

            return Redirect::to('admin/categories/create')
                ->withInput(Input::except('nom'))
                ->with( 'error', $error );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $user
     * @return Response
     */
    public function getShow($category)
    {
        // redirect to the frontend
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $user
     * @return Response
     */
    public function getEdit($category)
    {
        if ($category->id){
        	$title = 'Editar Categoria';
        	// mode
        	$mode = 'edit';

        	return View::make('admin/categories/create_edit', compact('category', 'title', 'mode'));
        }
        else
        {
            return Redirect::to('admin/categories')->with('error', Lang::get('admin/categories/messages.does_not_exist'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $user
     * @return Response
     */
    public function postEdit($category)
    {
        // Validate the inputs
                 $rules = array(
            'nom' => 'required',
            'descripcio' =>'required',
        );

        $validator = Validator::make(Input::all(), $rules);


        if ($validator->passes())
        {
            $oldCategory = clone $category;
            $category->nom = Input::get( 'nom' );
            $category->descripcion = Input::get( 'descripcio' );
            $slug = Input::get( 'nom' );
            $slugName = Str::slug($slug ,'-');
            $this->category->slug = $slugName;
            $this->category->save();
            return Redirect::to('admin/categories/' . $user->id . '/edit')->with('success', Lang::get('admin/users/messages.edit.success'));
        } else {
                unset($category->slug);
                 return Redirect::to('admin/categories/' . $user->id . '/edit')->with('error', Lang::get('admin/users/messages.edit.error'));
        }
    }

    /**
     * Remove user page.
     *
     * @param $user
     * @return Response
     */
    public function getDelete($category)
    {
        // Title
        $title = 'Eliminar Categoria';

        // Show the page
        return View::make('admin/categories/delete', compact('category', 'title'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param $user
     * @return Response
     */
    public function postDelete($category)
    {
        $category->delete();
        if (empty($category) )
        {
            // TODO needs to delete all of that user's content

            return Redirect::to('admin/categories')->with('success', 'Categoria elminada satisfactoriamente');
        }
        else
        {
            // There was a problem deleting the user
            return Redirect::to('admin/categories')->with('error', 'Error al eliminar la categoria');
        }
    }

    /**
     * Show a list of all the users formatted for Datatables.
     *
     * @return Datatables JSON
     */
  public function getData()
   {
       $categories = Category::select(array('categories.id',  'categories.nom', 'categories.descripcion','categories.slug'));

        return Datatables::of($categories)
        //->edit_column('created_at','{{{ Carbon::now()->diffForHumans(Carbon::createFromFormat(\'Y-m-d H\', $test)) }}}')

         ->add_column('actions', '<a href="{{{ URL::to(\'admin/categories/\' . $id . \'/edit\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
              <a href="{{{ URL::to(\'admin/categories/\' . $id . \'/delete\' ) }}}" class="btn btn-xs btn-danger iframe">{{{ Lang::get(\'button.delete\') }}}</a>
                               
            ')

        ->remove_column('id')

        ->make();
   }
}
