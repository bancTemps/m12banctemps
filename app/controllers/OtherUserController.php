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
        
        return View::make('site/user/otherUser', compact('user'));
    }
    
    
    public function viewOtherService($view) {
        $userModel = new User;
        $user = $userModel->getUserByUsername($view);        
        if (is_null($user)){
            App::abort(404);
        }       
        return View::make('site/user/otherUserService', compact('user'));
    }
    
    
    public function getOtherServices($slug)
    {       $userModel = new User;
            $user = $userModel->getUserByUsername($slug);
            $services = Service::leftjoin('users', 'users.id', '=', 'services.user_id' )
                    ->where('users.id','=',$user->id)
                    ->select(array('services.nom','services.id', 'services.dataInici', 'services.dataFinal','services.punts'));

            return Datatables::of($services)->make();

    }
    
    // Report method
    public function reportForm($slug){
        $userModel = new User;
        $user = $userModel->getUserByUsername($slug);
        
        list($reporter,$redirect) = User::checkAuthAndRedirect('user/messages');
        if($redirect){return $redirect;}
        
        return View::make('site/user/report', compact('user','reporter'));
    }
    
    //POST Report method
    public function postReport($slug){
        $userModel = new User;
        $user = $userModel->getUserByUsername($slug);
        
        list($reporter,$redirect) = User::checkAuthAndRedirect('user/messages');
        if($redirect){return $redirect;}
        
        $this->report->emisor_id = $reporter->id;
        $this->report->receptor_id = $user->id;
        $this->report->descripcion = Input::get( 'description' );
        
        $this->report->save();

        // the data that will be passed into the mail view blade template
        $data = array(
            'reporter' => $reporter->username,
            'reported' => $reported->username,
            'detail' => $this->report->descripcion,
        );

        // use Mail::send function to send email passing the data and using the $user variable in the closure
        Mail::send('emails.report', $data, function($message) use($reporter)
        {
          $message->from($reporter->email, $reporter->name);
          $message->to('donhorchy@gmail.com', 'Denuncia nueva');
        });
        
        
        return View::make('site/user/postReport', compact('user'));
    }
}

?>
