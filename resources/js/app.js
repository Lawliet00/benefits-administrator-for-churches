/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/** Requerimiento del paquete vue-table-2 para la representación de consultas en tablas con vue */
import {ServerTable, ClientTable, Event} from 'vue-tables-2';

Vue.use(ClientTable);


/**
 * Componente para Listar la iglesias
 *
 * @author  Juan Rosas <JuanFBass17@gmail.com>
 */
Vue.component('list-churches', require('./components/app/churches/list-churches-Component.vue').default);

/**
 * Componente para crear y editar iglesias
 *
 * @author  Juan Rosas <JuanFBass17@gmail.com>
 */
Vue.component('churches-create-edit-form', require('./components/app/churches/create-edit-form-Component.vue').default);

/**
 * Componente para Listar lso eventos organizados
 *
 * @author  Juan Rosas <JuanFBass17@gmail.com>
 */
Vue.component('event-list', require('./components/app/formalize_events/index-Component.vue').default);

/**
 * Componente para crear y editar eventos
 *
 * @author  Juan Rosas <JuanFBass17@gmail.com>
 */
Vue.component('event-create-edit-form', require('./components/app/formalize_events/create-edit-form-Component.vue').default);



/**
 * Opciones de configuración global para utilizar en todos los componentes vuejs de la aplicación
 *
 * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
 * @param  {object} methods Métodos generales a implementar en CRUDS
 */
Vue.mixin({
	data() {
		return {
			errors:[],
			/**
			 * Opciones generales a implementar en tablas
			 * @type {JSON}
			 */
			table_options: {
				pagination: { edge: true },
				//filterByColumn: true,
				highlightMatches: true,
				texts: {
                    filter: "Buscar:",
                    filterBy: 'Buscar por {column}',
                    //count:'Página {page}',
                    count: ' ',
                    first: 'PRIMERO',
                    last: 'ÚLTIMO',
                    limit: 'Registros',
                    //page: 'Página:',
                    noResults: 'No existen registros',
				},
				sortIcon: {
					is: 'fa-sort cursor-pointer',
					base: 'fa',
					up: 'fa-sort-up cursor-pointer',
					down: 'fa-sort-down cursor-pointer'
				},
			},
		}
	},
	props: {
		route_list: {
			type: String,
			required: false,
			default: ''
		},
		route_create: {
			type: String,
			required: false,
			default: ''
		},
		route_edit: {
			type: String,
			required: false,
			default: ''
		},
		route_update: {
			type: String,
			required: false,
			default: ''
		},
		route_delete: {
			type: String,
			required: false,
			default: ''
		},
		route_show: {
			type: String,
			required: false,
			default: ''
		}
	},
	computed:{
		existErrors:function(){
			return (this.errors.length > 0);
		}
	},
	methods: {


		editForm(id) {
			location.href = (this.route_edit.indexOf("{id}") >= 0)
							? this.route_edit.replace("{id}", id)
							: this.route_edit + '/' + id;
		},

		/**
		 * Método para la eliminación de registros
		 *
		 * @author  Ing. Roldan Vargas <rvargas@cenditel.gob.ve> | <roldandvg@gmail.com>
		 * @param  {integer} index Elemento seleccionado para su eliminación
		 * @param  {string}  url   Ruta que ejecuta la acción para eliminar un registro
		 */
    	deleteRecord(index, url) {
    		var url = (url)?url:this.route_delete;
    		var records = this.records;
    		var confirmated = false;
    		var index = index - 1;
    		const vm = this;

			var r = confirm("¿Esta seguro de eliminar este registro? ");
			if (r == true) {
				axios.delete(url + '/' + records[index].id).then(response => {
					if (typeof(response.data.error) !== "undefined") {
						/** Muestra un mensaje de error si sucede algún evento en la eliminación */
						return false;
					}
					records.splice(index, 1);
					alert("eliminando.");
				}).catch(error => {});
			} else {
				// txt = "You pressed Cancel!";
			}

		},

		/**
		 * [onlyNumbers Solo permite escribir en los input los caracteres establecidos]
		 * @param  {[String]} string [cadena tecleada por el usuario]
		 * @param  {[String]} filter [cadena de caracteres que permitira]
		 * @author Juan Rosas <jrosas@cenditel.gob.ve | juan.rosasr01@gmail.com>
		 * @return {[String]}        [cadena permitida]
		 */
		onlyNumbers(string, filter = null){
			var out = '';

			/** Caracteres validos por defecto */
			var dafaultFilter = '1234567890';
			if(filter != null){
				dafaultFilter = filter;
			}
			
		    /** Recorrer el texto y verificar si el caracter se encuentra en la lista de validos  */
		    for (var i=0; i<string.length; i++)
		       if (dafaultFilter.indexOf(string.charAt(i)) != -1) 
		             //Se añaden a la salida los caracteres validos
			     out += string.charAt(i);
			
		    /** Retornar valor filtrado */
		    return out;
		}
	},
    created() {
    	// this.clearForm();
    },
});

/**
* Evento global Bus del modulo de Contabilidad
*/
window.EventBus = new Vue;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
