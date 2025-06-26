<template>
   <div>
      <div class="table-responsive">
         <table class="table table-striped gy-7 gs-7">
            <thead>
               <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                  <th>RANKING</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Marco Ali</td>
               </tr>
               <tr>
                  <td>Marco Ali</td>
               </tr>
            </tbody>
         </table>
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
         // Hacemos la petición GET cuando el componente es creado
         axios.get('http://testapp.test/ws/listrecord'
         ,{ params: { '_token': 'Um4dP8K5tYZ6yGVYZRQIYJiRE0l706PAyB48oS2l', 'EndpointName': 'contacts' }} )
            .then(response => {
               this.records = response.data;
            })
            .catch(error => {
               console.error('Hubo un error obteniendo los usuarios:', error);
            });
      },
      mounted() {
      },
      methods: {
         show_contact(contact_id){
            alert(contact_id);
         }
      }
   }
</script>