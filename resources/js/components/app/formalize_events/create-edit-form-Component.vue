<template>
  <div>
    <!-- Información del Pastor Principal -->
    <h6 class="heading-small text-muted mb-4 text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Información de evento</font></font></h6>
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-6">
                <div class="form-group focused">
                    <label class="form-control-label text-uppercase" for="input-username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cantidad de cupos disponibles</font></font></label>
                    <input  type="text"
                            class="form-control form-control-alternative"
                            placeholder="Cantidad de cupos disponibles para el evento"
                            :onkeyup="infoEvent.space_available=onlyNumbers(infoEvent.space_available)"
                            v-model="infoEvent.space_available">
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <!-- Información de la Iglesia -->
    <div class="pl-lg-4">
        <div class="row">
            <div class="col-6">
                <h6 class="heading-small text-muted mb-4 text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iglesias disponibles</font></font></h6>
    
                <list-churches :records_base="churches" :action="'listAvailable'" />
            </div>
            <div class="col-6">
                <h6 class="heading-small text-muted mb-4 text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iglesias Asignadas</font></font></h6>
                <list-churches :records_base="churches" :action="'listAdded'" />
            </div>
        </div>
    </div>
    <hr class="my-4">
    <div class="text-right">
      <button class="btn btn-success" v-if="record == null" @click="InitRecord()">Guardar</button>
      <button class="btn btn-success" v-else @click="updateRecord()">Actualizar</button>
    </div>
  </div>
</template>

<script>
    export default{
        props:['record', 'denominations','states','cities','municipalities','parishes', 'churches'],
        data(){
            return{
                infoEvent:{
                    state:1,
                    space_available:'',
                },
            }
        },
        mounted(){
            if (this.record != null) {
                this.info = this.record;
            }
        },
        methods:{
            // InitRecord:function() {
            //     axios.post('/churches',this.info).then(response=>{
            //         alert('registro creado');
            //         location.href=this.route_list;
            //     });
            // },
            // updateRecord:function() {
            //     axios.put('/churches/'+this.record.id, this.info).then(response=>{
            //         alert('registro actualizado');
            //         location.href=this.route_list;
            //     });
            // }
        }
    };
</script>
