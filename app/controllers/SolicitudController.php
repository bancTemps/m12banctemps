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


}
