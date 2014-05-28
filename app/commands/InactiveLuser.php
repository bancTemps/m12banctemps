<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InactiveLuser extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'inactive:luser';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Descripcion? pa que?';

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
                $users = DB::table('users')->get();
                $dataAvui = date('Y-m-d');
                
                $config = DB::table('banctemps')->first();
                $diesInactivitat = $config->dias_inactividad_luser;
                
                foreach($users as $user){
                    $id = $user->id;
                    if ($id != 1){ //id 1 és el admin
                        $ultimServeiConsumit = DB::table('service_consumed')->where('idUsuari',$id)->first();

                        if ($ultimServeiConsumit){      //si ha consumit algun servei, s'agafarà la data de l'últim que ha consumit
                            $darreraConsumicio = date("Y-m-d", strtotime($ultimServeiConsumit->created_at));
                        } else {        //si no ha consumit cap servei, s'agafarà la data de la creació de l'usuari
                            $darreraConsumicio = date('Y-m-d', strtotime($user->created_at));
                        }
//                        $this->info(strtotime($darreraConsumicio));
//                        $this->info(strtotime('-'.$diesInactivitat.' days', strtotime($darreraConsumicio)));

                        //si la data de la darrera consumició és més petita que la data d'avui - els dies marcats, llavors s'envia el mail
                        if (strtotime($darreraConsumicio) < strtotime('-'.$diesInactivitat.' days', strtotime($dataAvui))){

                            //$this->info('Fa mes de 60 dies que no ');

                            $data = array(
                                'services' => DB::table('services')->where('municipi_id',$user->municipi_id)->take(5)->get(),
                                'user' => $user->username,
                            );

                            Mail::send('emails.recomendation', $data, function($message) use($user)
                            {
                              $message->from("donhorchy@banctemps.com", "Sistema");
                              $message->to($user->email, 'Services recomendations');
                            });

                        }
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
