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
                $this->info("lol");
            
		$dataAvui = date("Y-m-d");
                $services = DB::table('services')->get();
                
                $config = DB::table('banctemps')->first();
                $diesInactivitat = $config->dias_inactividad_servicio;
                
                foreach($services as $serv){
                    $id = $serv->id;
                    $darreraConsumicio = DB::table('service_consumed')->where('id',$id)->first();
                    
                    if ($darreraConsumicio){    //si el servicio ya ha sido consumido alguna vez
                        $fechaConsum = $darreraConsumicio->created_at;
                    } else {                    //sino
                        $fechaConsum = $serv->created_at;
                    }
                    
                    
                    if (strtotime($fechaConsum) < strtotime('-'.$diesInactivitat.' days', strtotime($dataAvui)) || $serv->estat == 1){
                        
                        DB::table('services')
                            ->where('id', $serv->id)
                            ->update(array('estat' => 1));
                        
                        
                        $user = DB::table('users')->where('id', $serv->user_id)->first();
                        $data = array(
                            'user' => $user->username,
                            'service' => $serv->nom,
                            'inactivity' => $diesInactivitat,
                        );
                        
                        Mail::send('emails.service_freeze_reminder', $data, function($message) use($serv, $user)
                        {
                            $message->from("donhorchy@gmail.com", "Sistema");
                            $message->to("donhorchy@gmail.com", 'Service freezed');
                        });
                        $this->info("Nose que coi es");
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
