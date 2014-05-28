<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
      <h2>Dear user <b>{{ $user }}</b></h2>
 
    <div>It's been a long time since the last time your service <b>{{ $service }}</b> was consumed, so the system has temporaly freezed.</div>
    
    <div>To unfreeze it, simply login in your account and check the services page in your profile.</div>
    
    <div>If in the next <b>{{ $inactivity }}</b> days the service keeps frozen, it will be erased from our database.</div>
    
  </body>
</html>
