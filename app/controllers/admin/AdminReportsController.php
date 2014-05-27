<?php

class AdminReportsController extends AdminController {
    
    /**
     * User Model
     * @var User
     */
    protected $user;
    
    /**
     * Report Model
     *  @var Report
     */
    protected $report;
    
    
    public function __construct(User $user, Report $report)
    {
        parent::__construct();
        $this->user = $user;
        $this->report = $report;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        // Title
        //$title = Lang::get('admin/users/title.user_management');

        // Grab all the users
        $reports = $this->report;

        // Show the page
        return View::make('admin/reports/index', compact('reports'));
    }
    
    
    public function getBlockUser($idReport){
        $title = 'Block User';
        $report = $this->report->where('id','=',$idReport)->first();
        if ($report){
            $user = $this->user->where('id','=',$report->receptor_id)->first();
            
            return View::make('admin/reports/block', compact('title', 'user', 'report'));
        } else {
            return Redirect::to('admin/reports')->with('error', 'Error al bloquear el usuario' );
        }
        
    }
    
    public function postBlockUser($idReport){
        $report = $this->report->where('id','=',$idReport)->first();
        $user = $this->user->where('id','=',$report->receptor_id)->first();
        
        

        if ( $user ) {
            // TODO needs to delete all of that user's content
            $user->status = 1;
            $user->save();
            //$report->delete();      //almenos el delete lo hace xDD
        }
        else
        {
            // There was a problem deleting the user
            return Redirect::to('admin/reports')->with('error', 'Error al bloquear el usuario');
        }
    }
    
    public function getRejectReport($id){
        $report = $this->report->where('id','=',$id)->first();
        
        if ($report){
            $report->delete();
            return Redirect::to('admin/reports')->with('success');
        }
    }
    
    /**
     * Show a list of all the reports formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function getData()
    {
        $reports = Report::leftjoin('users', 'users.id', '=', 'reports.receptor_id')
                ->select(array('reports.id', 'users.username','reports.descripcion','reports.created_at'));
        
        return Datatables::of($reports)

        ->add_column('actions', '@if ($username == \'admin\')
                                 @else
                                    <a href="{{{ URL::to(\'admin/reports/\' . $id . \'/blockUser\' ) }}}" class="iframe btn btn-xs btn-danger">Bloquear usuario</a>
                                 @endif
                                 <a href="{{{ URL::to(\'admin/reports/\' . $id . \'/rejectReport\' ) }}}" class="btn btn-xs btn-default">Rechazar denuncia</a>

                                ')
                

        ->remove_column('id')
 
        ->make();
    }
    
}
