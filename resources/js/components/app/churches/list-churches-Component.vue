<template>
    <v-client-table :columns="columns" :data="records" :options="table_options">
		<div slot="id" slot-scope="props" class="text-center">
			<button @click="editForm(props.row.id)"
					class="btn btn-warning btn-sm btn-icon" 
					title="Modificar registro" data-toggle="tooltip"
					v-if="action == 'list'">
				<i class="fa fa-edit"></i>
			</button>
			<button @click="deleteRecord(props.index,'/churches')" 
					class="btn btn-danger btn-sm btn-icon" 
					title="Eliminar registro" data-toggle="tooltip"
					v-if="action == 'list'">
				<i class="fa fa-trash"></i>
			</button>
            <button @click="addChurch(porps.index, props.row)"
                    class="btn btn-success btn-sm btn-icon" 
                    title="Agregar al listado" data-toggle="tooltip"
                    v-if="action == 'listAvailable'">
                <i class="fa fa-check"></i>
            </button>
            <button 
					class="btn btn-danger btn-sm btn-icon" 
					title="Eliminar registro del listado" data-toggle="tooltip"
					v-if="action == 'listAdded'">
				<i class="fa fa-trash"></i>
			</button>
		</div>
	</v-client-table>
</template>
<script>
	export default{
		props:['records_base', 'action'],
		data(){
			return{
				records:[],
				columns: ['church', 'pastor', 'id']
			}
		},
		created(){
			this.table_options.headings = {
				// 'id': '__checkbox',
				'church': 'Iglesia',
				'pastor': 'Pastor Principal',
				'id':'ACCIÓN'
			};
			this.table_options.sortable = ['church','pastor'];
			this.table_options.filterable = ['church','pastor'];
		},
		mounted(){
			this.records = this.records_base;
		}
	};
</script>
