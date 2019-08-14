<template>
  <div>
    <!-- Información del Pastor Principal -->
    <h6 class="heading-small text-muted mb-4 text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Información del Pastor Principal</font></font></h6>
    <div class="pl-lg-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group focused">
            <label title="Este campo no puede llevar abreviaturas" class="form-control-label text-uppercase" for="input-username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombres</font></font></label>
            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nombres Completos" v-model="info.pastor_names">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apellidos</font></font></label>
            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Apellidos Completos" v-model="info.pastor_surnames">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label text-uppercase" for="input-email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Correo Electrónico</font></font></label>
            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Correo Electrónico" v-model="info.email">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-last-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cedula de Identidad</font></font></label>
            <input type="number" id="input-last-name" class="form-control form-control-alternative" placeholder="Cedula de identidad" v-model="info.ci">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-last-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telefono</font></font></label>
            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Telefono" v-model="info.phone">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-first-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección</font></font></label>
            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Dirección" v-model="info.pastors_address">
          </div>
        </div>
      </div>  
    </div>
    <hr class="my-4">
    <!-- Información de la Iglesia -->
    <h6 class="heading-small text-muted mb-4 text-uppercase"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Información de la iglesia</font></font></h6>
    <div class="pl-lg-4">
      <div class="row">
    <div class="col-lg-6">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nombre Completo" v-model="info.church_name">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Denominación</font></font></label>
            <select v-for="denomination in denominations" name="" id="" class="form-control form-control-alternative" v-model="info.denomination_id">
              <option value="0">Seleccione...</option>
              <option :value="denomination.id"> {{ denomination.name }} </option>
            </select>
          </div>
        </div>
    </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-city"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ciudad</font></font></label>
            <select v-for="city in cities" class="form-control form-control-alternative" v-model="info.city_id">
              <option value="0">Seleccione...</option>
              <option :value="city.id"> {{ city.name }} </option>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-city"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Municipio</font></font></label>
            <select v-for="municipality in municipalities" class="form-control form-control-alternative" v-model="info.municipality_id">
              <option value="0">Seleccione...</option>
              <option :value="municipality.id"> {{ municipality.name }} </option>
            </select>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-city"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Parroquia</font></font></label>
            <select v-for="parish in parishes" class="form-control form-control-alternative" v-model="info.parish_id">
              <option value="0">Seleccione...</option>
              <option :value="parish.id"> {{ parish.name }} </option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group focused">
            <label class="form-control-label text-uppercase" for="input-address"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección</font></font></label>
            <input id="input-address" class="form-control form-control-alternative" placeholder="Dirección" type="text" v-model="info.church_address">
          </div>
        </div>
      </div>
    </div>
    <hr class="my-4">
    <div class="text-right">
      <button class="btn btn-success" @click="InitRecord()">Guardar</button>
    </div>
  </div>
</template>

<script>
    export default{
        props:['record', 'denominations','states','cities','municipalities','parishes'],
        data(){
            return{
                info:{
                    pastor_names:'',
                    pastor_surnames:'',
                    ci:'',
                    pastors_address:'',
                    phone:'',
                    email:'',
                    church_name:'',
                    church_address:'',
                    municipality_id:0,
                    city_id:0,
                    parish_id:0,
                    denomination_id:0,
                }
            }
        },
        mounted(){
            if (this.record != null) {
                this.info = this.record;
            }
        },
        methods:{
            InitRecord:function() {
                axios.post('/churches',this.info).then(response=>{
                    alert('registro creado');
                });
            }
        }
    };
</script>