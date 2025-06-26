<template>
   <div class="card card-flush" id="kt_contacts_list">
      <div class="mt-5">
         <label class="form-label">Cancha</label>
         <select class="form-select" aria-label="Select example">
            <option>Open this select menu</option>
            <option v-for="item in records" :value="item.id">{{ item.description }}</option>
         </select>
      </div>

      <div class="mt-5">
         <label class="form-label">Fecha:</label>
         <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_3"/>
      </div>

     <div class="mt-5">
         <label class="form-label">Hora</label>
         <input class="form-control form-control-solid" type="time"/>
     </div>
   </div>
</template>
<script>
   export default{
      props:[
      ],
      data(){ 
         return {
            records: []
        }
      },
      created() {
         axios.get('http://testapp.test/ws/listrecord'
         ,{ params: { '_token': 'A8Cpci371sTFgcURlVrF8dQUJXqyqJ4fxl6ZKQry', 'EndpointName': 'court'}} )
         .then(response => {
            this.records = response.data;
            console.log(this.records);
         })
         .catch(error => {
            console.error('Hubo un error obteniendo los usuarios:', error);
         });
      },
      mounted() {
      },
      methods: {
      }
   }
</script>