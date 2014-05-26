<?php

class OtherUserController extends BaseController {

    /**
     * User Model
     * @var User
     */
    protected $user;
    protected $report;
    protected $service;

    /**
     * User Model
     * @var User
     */
    protected $conversation;    
    /**
     * Inject the models.
     * @param Conversation $conversation
     * @param Service $service
     * @param User $user
     */
    public function __construct(Conversation $conversation, Service $service, User $user)
    {
        parent::__construct();
        $this->conversation = $conversation;
        $this->service = $service;
        $this->user = $user;
    }
    /**
     * Inject the models.
     * @param User $user
     */
    public function __construct(User $user, Report $report)
    {
        parent::__construct();
        $this->user = $user;
        $this->report = $report;
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

    public function addOther($view) {
        $userModel = new User;
        $receptor = $userModel->getUserByUsername($view);
        
        if (is_null($receptor)){
            App::abort(404);
        }
        $this->conversation->nom = Input::get( 'nom' );
        $this->conversation->descripcio = Input::get( 'descripcio' );
        $this->conversation->dataInici = Input::get( 'dataInici' );
      
        $this->conversation->save();
        return Redirect::to('/user/services')
       ->with('servicio', 'Servicio añadido correctamente');
        
        return View::make('site/user/otherUser', compact('receptor'));
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
            'reported' => $user->username,
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
