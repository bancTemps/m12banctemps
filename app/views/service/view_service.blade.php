@extends('site.layouts.default')

@section('styles')
@parent
body {
    background: #f2f2f2;
}
@stop

{{-- Content --}}
@section('content')


    <div class="row" >
        <!-- Columna del srevicio -->
        <div class="col-md-9 col-sm-9 col-xs-12" id="service">
            
                <h2>Titulo servicio</h2>
                <h3>Descripcion del servicio : Inventore, aspernatur, facere, totam vel provident excepturi recusandae sint voluptatum</h3>

    mo, similique odio velit quod dolore optio illo ipsa sint libero fugiat accusamus aliquam distinctio architecto dolores porro quisquam sed quasi quia aperiam repellendus consequuntur odit quis aliquid!
    Inventore, aspernatur, facere, totam vel provident excepturi recusandae sint voluptatum voluptatibus necessitatibus quod et veniam eos vero deleniti asperiores amet sequi veritatis perferendis sit repudiandae quam quisquam culpa repellendus cum.
    Fuga molestiae nesciunt harum incidunt perspiciatis recusandae totam quidem et nulla cupiditate. Sit, beatae, hic reprehenderit facere sed inventore saepe neque veritatis ea odio explicabo dignissimos harum provident amet tempore!
    Eaque, corporis, enim, in nam quidem quis dolorem soluta saepe provident

                <br/>
                <ul class="col-md-offset-1 col-md-6 col-sm-6 col-xs-6 cuadro-flotante embossed">
                    <li>Dato1</li>
                    <li>Dato2</li>
                    <li>Dato3</li>
                    <li>Dato4</li>
                    <li>Dato5</li>
                </ul>
   
                
        </div>
        
        <!-- columna del usuario que ofrece el servicio -->
        <div class="col-md-3 col-sm-3 col-xs-12" id="profile-in-service">
            <center>
            <h3>Informacion del usuario solicitante</h3>
            <div id="user-info">
            <ul>
                <li>Dato1</li>
                <li>Dato2</li>
                <li>Dato3</li>
                <li>Dato4</li>
                <li>Dato5</li>
            </ul>
            </div><br/>
            <input type="button" class="col-md-offset-1 btn-primary" value="Envia una sol·licitud"/></center>
        </div>
    </div>

@stop