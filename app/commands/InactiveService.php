<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InactiveService extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'inactive:service';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Desactivar servicio y avisar al ofertante de ello';

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
                $services = DB::table('services')->get();
                foreach($services as $serv){
                    $id = $serv->id;
                    $darreraConsumicio = DB::table('service_consumed')->where('id',$id)->first();
                    if ($darreraConsumicio){    //si el servicio ya ha sido consumido alguna vez
                        $this->info("LEL");
                    } else {                    //sino
                        $this->info("djfgbjksglsnepgfn");
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
