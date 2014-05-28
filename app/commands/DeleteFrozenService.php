<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DeleteFrozenService extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'delete:frozen';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Delete unconfirmed frozen service.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$dataAvui = date("Y-m-d");
                $services = DB::table('services')->where('estat',1)->get();
                
                $config = DB::table('banctemps')->first();
                $diesFreeze = $config->dias_confirmacion_servicio;
                
                foreach($services as $serv){
                    $fechaMod = $serv->updated_at;
                    
                    if (strtotime($fechaMod) < strtotime('-'.$diesFreeze.' days', strtotime($dataAvui))){
                        
                        DB::table('services')->where('id',$serv->id)->delete();
                        $this->info("The service has been deleted");
                    }
                }
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('example', InputArgument::OPTIONAL, 'An example argument.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
