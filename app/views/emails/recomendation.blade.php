<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Dear user {{ $user }}</h2>
 
    <div>It's been a long time since the last time you consumed any offered service.</div>
    <div>If the reason is that you don't have time, here is a list of the latest services offered next to you:</div>
    {{ if (sizeof($services) > 0) 
     foreach ($services as $serv) }}
        <div>
            <h2><b>{{ $serv->nom }}</b></h2>
            <h3>{{ $serv->descripcio }}</h3>
            <h4>Fecha de inicio: {{ $serv->dataInici }}, fecha de fin: {{ $serv->dataFinal }}</h4>
        </div>
    {{ endforeach
     endif }}
  </body>
</html>
