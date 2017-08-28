@extends('app')

@section('content')

<html lang="es">
    
    <body background="img/greyzz.png">
        <header>
           <div class="container">
               <h1>Ventas</h1>
               <br>
               
           </div>
            
        </header>
   		<div class="container margen-inferior">
            <form data-toggle="validator" role="form" method="post" action="categorias.php" class="form-inline">
                 
                <div  class="form-group">
                    <label for="cliente">Cliente:</label>
                    <input type="text" name="nom_cliente" class="form-control" id="clienteboton" data-error="Ingresa nombre del cliente" required>
					 <a href="#" class="btn btn-default" v-on:click.prevent="crearcliente(nom_cliente)">Crear cuenta</a>
                    
                </div>
              	<div><br></div>

				<div   class="container">
            		<div  class="row">                          
                	    <div v-for="lista in lista" class="col-md-6">
                    	    <div   class="thumbnail">
								<h3>Cliente: @{{ lista.NOMBRE_CLIENTE }} </h3>
                                <p>
                                    Fecha: @{{ lista.FECHA_ENTRADA }}  Hora: @{{ lista.HORA_ENTRADA }}<br>
                                    No. de ticket: @{{ lista.id }}<br>
                                </p>
								<a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="eliminarcliente(lista)">Eliminar</a>
							</div>
						</div>

						<div class="col-md-6">
                    	    <pre>
								@{{ $data }}
								
							</pre>
						</div>

					</div>
				</div>
            </form>
        </div>

	</body>
</html>


@endsection