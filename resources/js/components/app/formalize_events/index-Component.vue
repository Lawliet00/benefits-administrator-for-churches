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
                columns: ['dateInit', 'dateFinish', 'space_available', 'state', 'id']
            }
        },
        created(){
            this.table_options.headings = {
                'dateInit': 'Fecha de Inicio',
                'dateFinish': 'Fecha de Finalización',
                'space_available': 'Cupos Disponibles',
                'state': 'Estado del evento',
                'id':'ACCIÓN'
            };
            this.table_options.sortable = ['dateInit', 'dateFinish'];
            this.table_options.filterable = ['dateInit', 'dateFinish'];
        },
        mounted(){
            this.records = this.records_base;
        }
    };
</script>
