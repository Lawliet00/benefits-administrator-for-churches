<template>
    <v-client-table :columns="columns" :data="records" :options="table_options">
		<div slot="action" slot-scope="props" class="text-center">
			<button @click="editForm(props.row.id)"
					class="btn btn-warning btn-sm btn-icon" 
					title="Modificar registro" data-toggle="tooltip">
				<i class="fa fa-edit"></i>
			</button>
			<button @click="deleteRecord(props.index,'/churches')" 
					class="btn btn-danger btn-sm btn-icon" 
					title="Eliminar registro" data-toggle="tooltip">
				<i class="fa fa-trash"></i>
			</button>
		</div>
	</v-client-table>
</template>
<script>
	export default{
		props:['records_base'],
		data(){
			return{
				records:[],
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
			this.records = this.records_base;
		}
	};
</script>