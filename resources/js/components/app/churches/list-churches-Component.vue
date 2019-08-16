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
            <button @click="addChurch(props.index, props.row)"
                    class="btn btn-success btn-sm btn-icon" 
                    title="Agregar al listado" data-toggle="tooltip"
                    v-if="action == 'listAvailable'">
                <i class="fa fa-check"></i>
            </button>
            <button @click="removeChurch(props.index, props.row)"
					class="btn btn-danger btn-sm btn-icon" 
					title="Sacar registro del listado" data-toggle="tooltip"
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
				'church': 'Iglesia',
				'pastor': 'Pastor Principal',
				'id':'ACCIÓN'
			};
			this.table_options.sortable = ['church','pastor'];
			this.table_options.filterable = ['church','pastor'];
		},
		mounted(){
			this.records = this.records_base;
		},
		methods:{
			addChurch:function(index, record){
				EventBus.$emit('reload:table-added',{
					'index':index,
					'record':record
				});
			},
			removeChurch:function(index, record){
				EventBus.$emit('reload:table-available',{
					'index':index,
					'record':record
				});
			}
		}
	};
</script>
