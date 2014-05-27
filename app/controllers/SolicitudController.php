<?php

class SolicitudController extends BaseController {
	protected $solicitud;
 	protected $service;

    public function __construct(Solicitud $solicitud, Service $service)
    {
        parent::__construct();
        $this->solicitud = $solicitud;
        $this->service = $service;
    }


    public function createSolicitud($id){
    	$this->solicitud->service_id = $id;
    	$this->solicitud->solicita_id = Auth::user()->id;
    	$this->solicitud->save();
        $servicio = $this->service->where('id','=',$id)->first()->slug();
        return Redirect::to('service/'.$servicio)->with('solicitud', 'Solicitud añadida correctamente');
    }

    public function getRequests() {
        $requests = -Service::leftjoin('users', 'users.id', '=', 'services.user_id')
                    ->where('users.id','=',Auth::user()->id)
                    ->select(array('services.nom','services.id', 'services.dataInici', 'services.dataFinal','services.punts'));
        return Datatables::of($requests)
                ->add_column('action','<a class="iframe btn btn-xs btn-default" href="#">Editar</a>'
                        . '<a class="iframe btn btn-xs btn-danger" href="#">Eliminar</a>')->make();
    }


}
