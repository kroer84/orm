
new Vue({
	el: '#clientes',
	created: function(){
		this.getclientes();
	},
	data:{
		lista:[]
	},
	methods:{
		getclientes: function(){
			var urlclientes = 'clientes';
			axios.get(urlclientes).then(response => {
				this.lista = response.data
			});
		},

		eliminarcliente: function(cliente){
			var url = 'clientes/'+ cliente.ID_CLIENTE;
			axios.delete(url).then(responce=>{
				this.getclientes();
				toastr.options.closeButton = true;
				toastr.options.progressBar = true;
				toastr.options.preventDuplicates = true;
				toastr.error('Eliminado correctamente','Nube web', {timeOut: 3000});
			});
		},
		crearcliente: function(nombrecliente){
			var url = 'clientes/'+ nombrecliente;
			axios.create(url).then(responce=>{
				this.getclientes();
				toastr.error('creado','Nube web',);
			});
		},


	}
});