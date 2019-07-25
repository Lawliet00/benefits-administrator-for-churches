<template>
	<!-- <div class="table table-responsive">
       <table class="table align-items-center table-flush">
               <thead class="thead-light">
                 <tr>
                   <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">IGLESIA</font></font></th>
                   <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PASTOR</font></font></th>
                   <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DENOMINACION</font></font></th>
                   <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ESTADO</font></font></th>
                   <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CIUDAD</font></font></th>
                   <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MUNICIPIO</font></font></th>
                   <th scope="col"></th>
                 </tr>
               </thead>
               <tbody>
                 <tr v-for="record in records">
                   <th scope="row">
                     <div class="media align-items-center">
                       <div class="media-body">
                         <span class="mb-0 text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ record.church_name }}</font></font></span>
                       </div>
                     </div>
                   </th>
                   <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                     {{ record.pastor_surnames+' '+record.pastor_names }}
                   </font></font></td>
                   <td>
                           <span class="badge badge-dot mr-4">
                             <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ record.denomination.name }}

		            </font></font></span>
	            </td>

	            <td>
	            	<div class="d-flex align-items-center">
	                <span class="mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ record.city.name }}</font></font></span>
	              </div>
	            </td>

	            <td>
	              <div class="d-flex align-items-center">
	                <span class="mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ record.municipality.name }}</font></font></span>
	              </div>
	            </td>
				<td>
					<div class="d-flex align-items-center">
		                <span class="mr-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ record.parish.name }}</font></font></span>
		              </div>
				</td>
	            <td class="text-right">
	              <div class="dropdown">
	                <a class="btn btn-primary btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  <i class="fas fa-ellipsis-v" style="margin-top: 8px;"></i> 
	                </a>
	                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
	                  <a class="dropdown-item" href="">Actualizar</a>
	                  <a class="dropdown-item" href="">Eliminar</a>
	                </div>
	              </div>
	            </td>
	          </tr>
	        </tbody>
      	</table>

      	<div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anterior</font></font></span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 </font></font><span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actual)</font></font></span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Siguiente</font></font></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
    </div> -->

    <v-client-table :columns="columns" :data="records" :options="table_options">
		<div slot="action" slot-scope="props" class="text-center">
			<button @click="editForm(props.row.id)"
					class="btn btn-warning btn-sm btn-icon" 
					title="Modificar registro" data-toggle="tooltip">
				<i class="fa fa-edit"></i>
			</button>
			<button @click="deleteRecord(props.index,'/accounting/accounts')" 
					class="btn btn-danger btn-sm btn-icon" 
					title="Eliminar registro" data-toggle="tooltip">
				<i class="fa fa-trash"></i>
			</button>
		</div>
	</v-client-table>
</template>
<script>
	export default{
		props:['records'],
		data(){
			return{
				columns: ['id', 'church', 'pastor', 'action']
			}
		},
		created(){
			this.table_options.headings = {
				'id': '__checkbox',
				'church': 'Iglesia',
				'pastor': 'Pastor Principal',
				'action':'ACCIÓN'
			};
			this.table_options.sortable = ['church','pastor'];
			this.table_options.filterable = ['church','pastor'];
			this.table_options.fields = [ {
				          name: '__checkbox',   // <----
				          titleClass: 'center aligned',
				          dataClass: 'center aligned'
				        }];
		},
		mounted(){
			// alert("montado");
		}
	};
</script>