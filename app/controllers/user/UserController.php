<?php

class UserController extends BaseController {

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Conversation Model
     * @var Conversation
     */
    protected $conversation;

    /**
     * Message Model
     * @var Message
     */
    protected $message;
      /**
     * Service Model
     * @var Service
     */
    protected $service;
    /**
     * ServiceConsumed Model
     * @var ServiceConsumed
     */
    protected $serviceConsumed;
    
    /**
     * Inject the models.
     * @param User $user
     */
    
    public function __construct(User $user, Conversation $conversation, Message $message, Service $service, ServiceConsumed $serviceConsumed)
    {
        parent::__construct();
        $this->user = $user;
        $this->conversation = $conversation;
        $this->message = $message;
        $this->service = $service;
        $this->serviceConsumed = $serviceConsumed;
    }

    /**
     * Users settings page
     *
     * @return View
     */
    public function getIndex()
    {
        list($user,$redirect) = $this->user->checkAuthAndRedirect('user');
        if($redirect){return $redirect;}
        $services = $user->service();
        $solicitud = $user->solicitud();
        return View::make('site/user/services/index', compact('user','services','solicitud'));
    }

    /**
     * Stores new user
     *
     */
    public function postIndex()
    {
        // Natu
        $this->user->name = Input::get( 'name' );
        $this->user->surname = Input::get( 'surname' );
        // !Natu

        $this->user->username = Input::get( 'username' );
        $this->user->email = Input::get( 'email' );

        $password = Input::get( 'password' );
        $passwordConfirmation = Input::get( 'password_confirmation' );

        if(!empty($password)) {
            if($password === $passwordConfirmation) {
                $this->user->password = $password;
                $this->user->password_confirmation = $passwordConfirmation;
            } else {
                // Redirect to the new user page
                return Redirect::to('user/create')
                    ->withInput(Input::except('password','password_confirmation'))
                    ->with('error', Lang::get('admin/users/messages.password_does_not_match'));
            }
        } else {
            unset($this->user->password);
            unset($this->user->password_confirmation);
        }

        // Save if valid. Password field will be hashed before save
        $this->user->save();

        if ( $this->user->id ) {
            // Redirect with success message, You may replace "Lang::get(..." for your custom message.
            return Redirect::to('user/login')
                ->with('notice', Lang::get('user/user.user_account_created') );
        } else {
            // Get validation errors (see Ardent package)
            $error = $this->user->errors()->all();

            return Redirect::to('user/create')
                ->withInput(Input::except('password'))
                ->with( 'error', $error );
        }
    }
    
    /**
     * Edits a service from user
     *
     */
    public function getEditService($servicio){
        
        if ($servicio){        
            $title = 'Editar Servicio';
            return View::make('site/user/services/edit', compact('servicio', 'title'));
        }else{
            return Redirect::to('site/user/services')->with('error', 'Error al editar servicio');
        }
    }
    
    public function postEditService($servicio){
         $rules =             
            array(
                'nom' => 'required|unique:services|between:5,20',
                'descripcio' => 'required|min:4',
                'duracio' =>   'required|integer',
                'punts' => 'required|integer',
                'categoria' => 'required'
           ); 
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->passes()){
            $oldservice = clone $servicio;
            $servicio->nom = Input::get( 'nom' );
            $servicio->descripcio = Input::get( 'descripcio' );
            $servicio->duracio = Input::get( 'duracio' );
            $servicio->punts = Input::get( 'punts' );
            $slug = Input::get( 'nom' );
            $slugName = Str::slug($slug ,'-');
            $servicio->slug = $slugName;
            $servicio->save();
            return Redirect::to('user/services/')->with('success', 'Servicio Editado.');
        } else {
                unset($servicio->slug);
                return Redirect::to('user/services')->with('error', 'Error al editar el servicio');
        }
    }

    /**
     * Remove the specified user from storage.
     *
     * @param $user
     * @return Response
     */
    public function getDeleteService($service){
         $service->estat=1;
         $service->save();
        return Redirect::to('user/services')->with('success', 'Servicio congelado temporalmente.');
       
    }
       
    public function postEdit($user)
    {
        // Validate the inputs
        $validator = Validator::make(Input::all(), $user->getUpdateRules());


        if ($validator->passes()) {
            $file = Input::file("photo");

            $oldUser = clone $user;
            
            // Guardar la imagen actual
            if ($file != "") {
                $file->move("public/img/avatar", $file->getClientOriginalName());
                // Borrar la imagen anterior
                if ($user->photo != "user-avatar.jpg" && $user->photo != "") {
                    unlink("public/".$user->photo);
                }
                $user->photo =  'img/avatar/'.Input::file("photo")->getClientOriginalName();
            }
            

            
            $user->username = Input::get( 'username' );
            $user->email = Input::get( 'email' );
            $user->name = Input::get( 'name' );
            $user->surname = Input::get( 'surname' );
            $user->municipi_id = Input::get( 'municipi_id' );
            //$user->city = Input::get( 'city' );
            //$user->postalCode = Input::get( 'postalCode' );
            $user->telephone = Input::get( 'telephone' );

            $password = Input::get( 'password' );
            $passwordConfirmation = Input::get( 'password_confirmation' );

            if(!empty($password)) {
                if($password === $passwordConfirmation) {
                    $user->password = $password;
                    // The password confirmation will be removed from model
                    // before saving. This field will be used in Ardent's
                    // auto validation.
                    $user->password_confirmation = $passwordConfirmation;
                } else {
                    // Redirect to the new user page
                    return Redirect::to('users')->with('error', Lang::get('admin/users/messages.password_does_not_match'));
                }
            } else {
                unset($user->password);
                unset($user->password_confirmation);
            }

            $user->prepareRules($oldUser, $user);

            // Save if valid. Password field will be hashed before save
            $user->amend();
        }

        // Get validation errors (see Ardent package)
        $error = $user->errors()->all();

        if(empty($error)) {
            return Redirect::to('user')
                ->with( 'success', Lang::get('user/user.user_account_updated') );
        } else {
            return Redirect::to('user')
                ->withInput(Input::except('password','password_confirmation'))
                ->with( 'error', $error );
        }
    }

    /**
     * Displays the form for user creation
     *
     */
    public function getCreate()
    {
        return View::make('site/user/create');
    }


    /**
     * Displays the login form
     *
     */
    public function getLogin()
    {
        $user = Auth::user();
        if(!empty($user->id)){
            return Redirect::to('/');
        }

        return View::make('site/user/login');
    }

    /**
     * Attempt to do login
     *
     */
    public function postLogin()
    {
        $input = array(
            'email'    => Input::get( 'email' ), // May be the username too
            'username' => Input::get( 'email' ), // May be the username too
            'password' => Input::get( 'password' ),
            'remember' => Input::get( 'remember' ),
        );
        if ( Confide::logAttempt( $input, true ) )
        {
            $r = Session::get('loginRedirect');
            if (!empty($r))
            {
                Session::forget('loginRedirect');
                return Redirect::to($r);
            }
            return Redirect::to('/');
        }
        else
        {
            // Check if there was too many login attempts
            if ( Confide::isThrottled( $input ) ) {
                $err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
            } elseif ( $this->user->checkUserExists( $input ) && ! $this->user->isConfirmed( $input ) ) {
                $err_msg = Lang::get('confide::confide.alerts.not_confirmed');
            } else {
                $err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
            }

            return Redirect::to('user/login')
                ->withInput(Input::except('password'))
                ->with( 'error', $err_msg );
        }
    }

    /**
     * Attempt to confirm account with code
     *
     * @param  string  $code
     */
    public function getConfirm( $code )
    {
        if ( Confide::confirm( $code ) )
        {
            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('confide::confide.alerts.confirmation') );
        }
        else
        {
            return Redirect::to('user/login')
                ->with( 'error', Lang::get('confide::confide.alerts.wrong_confirmation') );
        }
    }

    /**
     * Displays the forgot password form
     *
     */
    public function getForgot()
    {
        return View::make('site/user/forgot');
    }

    /**
     * Attempt to reset password with given email
     *
     */
    public function postForgot()
    {
        if( Confide::forgotPassword( Input::get( 'email' ) ) )
        {
            return Redirect::to('user/login')
                ->with( 'notice', Lang::get('confide::confide.alerts.password_forgot') );
        }
        else
        {
            return Redirect::to('user/forgot')
                ->withInput()
                ->with( 'error', Lang::get('confide::confide.alerts.wrong_password_forgot') );
        }
    }

    /**
     * Shows the change password form with the given token
     *
     */
    public function getReset( $token )
    {

        return View::make('site/user/reset')
            ->with('token',$token);
    }


    /**
     * Attempt change password of the user
     *
     */
    public function postReset()
    {
        $input = array(
            'token'=>Input::get( 'token' ),
            'password'=>Input::get( 'password' ),
            'password_confirmation'=>Input::get( 'password_confirmation' ),
        );

        // By passing an array with the token, password and confirmation
        if( Confide::resetPassword( $input ) )
        {
            return Redirect::to('user/login')
            ->with( 'notice', Lang::get('confide::confide.alerts.password_reset') );
        }
        else
        {
            return Redirect::to('user/reset/'.$input['token'])
                ->withInput()
                ->with( 'error', Lang::get('confide::confide.alerts.wrong_password_reset') );
        }
    }

    /**
     * Log the user out of the application.
     *
     */
    public function getLogout()
    {
        Confide::logout();

        return Redirect::to('/');
    }

    /**
     * Get user's profile
     * @param $username
     * @return mixed
     */
    public function getProfile($username)
    {
        $userModel = new User;
        $user = $userModel->getUserByUsername($username);

        // Check if the user exists
        if (is_null($user))
        {
            return App::abort(404);
        }

        return View::make('site/user/profile', compact('user'));
    }

    // Settings del usuario
    public function getSettings()
    {
        list($user,$redirect) = User::checkAuthAndRedirect('user/settings');
        if($redirect){return $redirect;}

        return View::make('site/user/profile', compact('user'));
    }

    // Amigos del usuario
    public function getFriends()
    {
        list($user,$redirect) = User::checkAuthAndRedirect('user/friends');
        if($redirect){return $redirect;}

        return View::make('site/user/friends', compact('user'));
    }


    // Mensajes del usuario
        public function getMessages() {
            list($user,$redirect) = User::checkAuthAndRedirect('user/messages');
            if($redirect){return $redirect;}

            $conversations = $this->conversation
                ->where('id_emisor', '=', Auth::user()->id)
                ->orwhere('id_receptor','=', Auth::user()->id)
                ->get();

            return View::make('site/user/messages', compact('user', 'conversations'));
        }

        // Ajax
        public function listMessages($id) {
            $messages = $this->message
                ->where('conversation_id', '=', $id)
                ->orderBy('created_at', 'asc')
                ->get();
            $cadena = "";

            $receptor = $messages->first();
            
            if ($messages->first()->emisor_id == Auth::user()->id) {
                //$receptor = $messages->first()->receptor_id;
                $receptor = $this->user
                    ->where('users.id', '=', $messages->first()->receptor_id)->first()->username;
            } else {
                $receptor = $messages->first()->emisor_id;
            }

            foreach ($messages as $message) {
                
                if ($message->emisor_id == Auth::user()->id) {
                    $cadena .= "<div class='emisor'><span>Yo</span><br>".$message->content."</div><br>";
                } else {
                    $cadena .= "<div class='receptor'><span>".$receptor."</span><br>".$message->content."</div><br>";
                }                
            }

            return $cadena;
        }

        public function viewConversation($conversation_id) {
            list($user,$redirect) = User::checkAuthAndRedirect('user/messages');
            if($redirect){return $redirect;}

            //$message = new Message;
            $messages = $this->message->getMessages($conversation_id);
            $conversations = $this->conversation
                ->where('id_emisor', '=', Auth::user()->id)
                ->orwhere('id_receptor','=', Auth::user()->id)
                ->get();
            
            if (is_null($messages)){
                App::abort(404);
            }
            
            return View::make('site/user/messages', compact('user', 'messages', 'conversations'));
        }

    public function postMessage($conversation_id, $comment) {
        $this->message->conversation_id = $conversation_id;
        $user_id = Auth::user()->id;
        $this->message->emisor_id = $user_id;


        $receptor = $this->conversation
            ->where('id', '=', $conversation_id)
            ->first();

        if ($receptor->id_emisor == $user_id) {
            $receptor = $receptor->id_receptor;
        } else {
            $receptor = $receptor->id_emisor;
        }

        $this->message->receptor_id = $receptor;
        $this->message->content = $comment;
        $this->message->save();
    }

    
    /*Aqui estan todas las acciones relacionadas con modificar/crear/eliminar servicios
     * 
     * getServices
     * Esto extrae los servicios y crea un json para que el dataTables lo pueda interpretar
     */
    public function getServices()
    {
        $services = Service::leftjoin('users', 'users.id', '=', 'services.user_id')
                    ->where('users.id','=',Auth::user()->id)
                    ->select(array('services.estat','services.nom','services.id', 'services.dataInici', 'services.dataFinal','services.punts'));
        return Datatables::of($services)
                ->add_column('action','@if ($estat==1)
                                       <a href="{{{ URL::to(\'user/services/\' . $id . \'/descongelarService\' ) }}}" class="btn btn-xs btn-default">Descongelar</a>
                                       @else
                                       <a href="{{{ URL::to(\'user/services/\' . $id . \'/editService\' ) }}}" class="iframe btn btn-xs btn-default">{{{ Lang::get(\'button.edit\') }}}</a>
                                       <a href="{{{ URL::to(\'user/services/\' . $id . \'/deleteService\' ) }}}" class="btn btn-xs btn-danger">{{{ Lang::get(\'button.delete\') }}}</a>        
                                       @endif')
                ->remove_column('id')
                ->remove_column('idConsumit')
                ->remove_column('estat')
                ->make();
 
    }

    /* Aqui estan todas las acciones relacionadas con modificar/crear/eliminar servicios
     * 
     * getDoServices
     * Esto extrae los servicios solicitados y crea un json para que el dataTables lo pueda interpretar
     */
    public function getDoServices() {
        $solicituds = Solicitud::leftjoin('services', 'services.id', '=', 'solicituds.service_id')
             //solicitud.estat = 0 ---> pendiente de confirmacion
             ->where('solicituds.estat','=',0)
             ->where('solicituds.solicita_id','=',Auth::user()->id)
            ->select(array('solicituds.id','services.nom','services.dataInici', 'services.dataFinal','services.punts'));
            return Datatables::of($solicituds)
             ->add_column('action','<a href="{{{ URL::to(\'user/services/\' . $id . \'/deleteSolicitud\' ) }}}" class="btn btn-xs btn-default">Cancelar</a>')
             ->remove_column('id')
             ->make(); 
    }
    public function descongelarService($service){
       $service->estat=0;
       $service->save();
       return Redirect::to('user/services')->with('success', 'Servicio descongelado');  
    }
 
    public function getDeleteSolicitud($id){
        $solicitud = Solicitud::find($id);
        $solicitud->estat=1;
        $solicitud->save();
        return Redirect::to('user/services')->with('success','Solicitud eliminada');
    }
    
    // Solicitudes del usuario
    public function getRequest()
    {
        list($user,$redirect) = User::checkAuthAndRedirect('user/request');
        if($redirect){return $redirect;}

        return View::make('site/user/request', compact('user'));
    }


    // Lista las solicitudes que debe aceptar/rechazar un usuario
    public function getRequests() {
         $solicituds = Solicitud::leftjoin('services', 'services.id', '=', 'solicituds.service_id')
                                 ->leftjoin('users', 'users.id', '=', 'solicituds.solicita_id')
             //solicitud.estat = 0 ---> pendiente de confirmacion
             ->where('solicituds.estat','=',0)
             ->where('services.user_id','=',Auth::user()->id)
            ->select(array('solicituds.id','users.username','services.nom','services.dataInici'));
            return Datatables::of($solicituds)
             ->add_column('action','<a href="{{{ URL::to(\'user/services/\' . $id . \'/acceptSolicitud\' ) }}}" class="btn btn-xs btn-default">Aceptar</a>
                     <a href="{{{ URL::to(\'user/services/\' . $id . \'/rejectSolicitud\' ) }}}" class="btn btn-xs btn-danger">Rechazar</a>')
             ->remove_column('id')
             ->make();
    }
    
  public function getConsumedServices() {         
      $serviceConsumed = ServiceConsumed::leftjoin('users', 'users.id', '=', 'service_consumeds.idUsuari')
               ->leftjoin('services', 'services.id', '=', 'service_consumeds.id')  
               ->where('service_consumeds.idUsuari','=',Auth::user()->id)
               ->select(array('service_consumeds.id','service_consumeds.estat','services.nom','services.user_id as idUsuari','services.dataInici'));
               return Datatables::of($serviceConsumed)
               ->add_column('pep','@if ($idUsuari)
                                      <?php $user = User::find($idUsuari)?>
                                       {{{$user->username}}}
                                      @endif')
               ->add_column('action','@if ($estat == 1)
                                        Ya consumido
                                      @else
                                   <a href="{{{ URL::to(\'user/services/\' . $id . \'/consumService\' ) }}}" class="btn btn-xs btn-default">Consumir</a>
                                      @endif')
               
                       ->remove_column('id')
                       ->remove_column('idUsuari')
                       ->remove_column('estat')
               ->make();
    }
  public function consumService ($id){
       $consum = ServiceConsumed::find($id);
       $consum->estat=1;
       $consum->save();
       return Redirect::to('user/services')->with('success', 'Servicio consumido');  
  }
    public function getAcceptSolicitud($id){
        $solicitud = Solicitud::find($id);
        $solicitud->estat=1;
        $solicitud->save();
        $service = $this->service->where('id', '=', $solicitud->service_id)->first();
        $user = $this->user->where('id', '=', $solicitud->solicita_id)->first();
        $user->points = $user->points+$service->punts;
        $user->amend();
        $this->serviceConsumed->id = $service->id;
        $this->serviceConsumed->idUsuari = $solicitud->solicita_id;
        $this->serviceConsumed->estat = 0;
        $this->serviceConsumed->save();
        
        return Redirect::to('user/services')->with('success', 'Servicio aceptado');  
    }
     public function getRejectSolicitud($id){
        $solicitud = Solicitud::find($id);
        $user = $this->user->where('id', '=', $solicitud->solicita_id);
        $user->points = $user->points+$service->punts;
        $user->amend();
        $solicitud->estat=2;
        $solicitud->save();
        return Redirect::to('user/services')->with('error', 'Servicio rechazado');  
    }

    
    
    /*Muestra el template index.    
    */
    public function getServiceIndex()
    {
          
          list($user,$redirect) = User::checkAuthAndRedirect('user/account');
          if($redirect){return $redirect;}
          $services = $user->service();
          $solicitud = $user->solicitud();
          return View::make('site/user/services/index', compact('user','services','solicitud'));
    }

    // Cuenta del usuario
    public function getAccount()
    {
        list($user,$redirect) = User::checkAuthAndRedirect('user/account');
        if($redirect){return $redirect;}

        return View::make('site/user/account', compact('user'));
    }

    // Formulario para borrar usuario
    public function getDelete()
    {
        list($user,$redirect) = User::checkAuthAndRedirect('user/friends');
        if($redirect){return $redirect;}

        return View::make('site/user/delete', compact('user'));
    }


    // Borrar usuario
    public function postDelete($user) {       

        AssignedRoles::where('user_id', $user->id)->delete();

        $id = $user->id;
        $user->delete();

        // Was the comment post deleted?
        $user = User::find($id);
        if ( empty($user) ) {
            // TODO needs to delete all of that user's content
            return Redirect::to('admin/users')->with('success', Lang::get('admin/users/messages.delete.success'));
        } else {
            // There was a problem deleting the user
            return Redirect::to('admin/users')->with('error', Lang::get('admin/users/messages.delete.error'));
        }
    }

    /**
     * Process a dumb redirect.
     * @param $url1
     * @param $url2
     * @param $url3
     * @return string
     */
    public function processRedirect($url1,$url2,$url3)
    {
        $redirect = '';
        if( ! empty( $url1 ) )
        {
            $redirect = $url1;
            $redirect .= (empty($url2)? '' : '/' . $url2);
            $redirect .= (empty($url3)? '' : '/' . $url3);
        }
        return $redirect;
    }
    
    public function createService(){
        
        return View::make('service/signup_service_view');
    }
}
