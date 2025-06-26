<template>
   <div class="card card-flush" id="kt_contacts_list">
      <div class="mt-5">
         <label class="form-label">Matutino</label>
         <select class="form-select" aria-label="Select example">
            <option>Open this select menu</option>
            <option v-for="item in record" :value="item.id">{{ item.description }}</option>
         </select>
      </div>
      <div class="mt-5">
         <label class="form-label">Vespertino</label>
         <select class="form-select" aria-label="Select example">
            <option>Open this select menu</option>
            <option v-for="item in record" :value="item.id">{{ item.description }}</option>
         </select>
      </div>
   </div>
</template>
<script>
   export default{
      props:[
      ],
      data(){ 
         return {
            record: [],
            whereparams:[
               {
                  'id_type_schedule':2
               }
            ]
        }
      },
      created() {
         //var jsonwhere = JSON.parse(JSON.stringify(this.whereparams));
         var jsonwhere = JSON.stringify(this.whereparams);

         let jsonwherev1 = {
            where: [
                  {
                     'id_type_schedule': 2
                  }
               ]
            };

         axios.get('http://testapp.test/ws/getrecordwhere'
         ,{ 
            params: { '_token': 'A8Cpci371sTFgcURlVrF8dQUJXqyqJ4fxl6ZKQry', 
                      'EndpointName': 'schedule', 
                      'where':jsonwherev1
                    }
           } 
         )
         .then(response => {
            this.record = response.data.information;
            console.log(this.record);
         })
         .catch(error => {
            console.error('Hubo un error obteniendo los datos:', error);
         });
      },
      mounted() {
      },
      methods: {
      }
   }
</script>