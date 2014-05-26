<?php

class OtherUserController extends BaseController {

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

    public function getIndex() {
        $userModel = new User;
        $user = $userModel->getUserByUsername($view);
        
        if (is_null($user)){
            App::abort(404);
        }
        
        return View::make('site/user/login', compact('user'));
    }
    public function viewOther($view) {
        $userModel = new User;
        $user = $userModel->getUserByUsername($view);
        
        if (is_null($user)){
            App::abort(404);
        }
        
        return View::make('site/user/otheruser', compact('user'));
    }
    
    
    public function viewOtherService($view) {
        $userModel = new User;
        $user = $userModel->getUserByUsername($view);        
        if (is_null($user)){
            App::abort(404);
        }       
        return View::make('site/user/otheruserservice', compact('user'));
    }
    
    
    public function getOtherServices($slug)
    {       $userModel = new User;
            $user = $userModel->getUserByUsername($slug);
            $services = Service::leftjoin('users', 'users.id', '=', 'services.user_id' )
                    ->where('users.id','=',$user->id)
                    ->select(array('services.nom','services.id', 'services.dataInici', 'services.dataFinal','services.punts'));

            return Datatables::of($services)->make();

    }
}

?>
