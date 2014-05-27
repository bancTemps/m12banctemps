<?php

class SolicitudController extends BaseController {
	protected $solicitud;
 	protected $service;
    protected $conversation;

    public function __construct(Solicitud $solicitud, Service $service, Conversation $conversation)
    {
        parent::__construct();
        $this->solicitud = $solicitud;
        $this->service = $service;
        $this->conversation = $conversation;
    }


    public function createSolicitud($id, $user_id){
    	$this->solicitud->service_id = $id;
    	$this->solicitud->solicita_id = Auth::user()->id;
    	$this->solicitud->save();

        $servicio = $this->service->where('id','=',$id)->first()->slug();

        $this->conversation->id_emisor = Auth::user()->id;
        $this->conversation->id_receptor = $user_id;
        $this->conversation->save();

        return Redirect::to('service/'.$servicio)->with('solicitud', 'Solicitud añadida correctamente');
    }

    // Listar solicitudes pendientes de un usuario
    public function getRequests() {
        $requests = -Service::leftjoin('users', 'users.id', '=', 'services.user_id')
            ->where('users.id','=',Auth::user()->id)
            ->select(array('services.nom','services.id', 'services.dataInici', 'services.dataFinal', 'services.punts'));
        return Datatables::of($requests)
            ->add_column('action','<a class="iframe btn btn-xs btn-default" href="#">Editar</a>'
                        . '<a class="iframe btn btn-xs btn-danger" href="#">Eliminar</a>')->make();
    }

    public function ajax(){
        $datos =  DB::table('municipios')->where('id_provincia','=',Input::get('id_municipio'))->lists('nombre','id_municipio',null,'borra');
        return Form::select('municipi_id',$datos);
         
    }
}
