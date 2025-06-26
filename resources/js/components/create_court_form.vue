<template>
   <div class="card card-flush" id="kt_contacts_list">
      <form>
         <div class="mt-5">
            <label class="form-label">Crear cancha</label>
            <input type="text" name="txtdescription" class="form-control" />
         </div>
         <div class="mt-5">
            <button type="button" class="form-control form-control-md btn btn-primary">Crear</button>
         </div>
      </form>
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