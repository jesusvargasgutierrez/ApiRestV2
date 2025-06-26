<template>
   <div>
      <div class="table-responsive">
         <table class="table table-striped gy-7 gs-7">
            <thead>
               <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                  <th>&nbsp;</th>
                  <th># Usuario</th>
                  <th>Nombre Completo</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>Estado</th>
               </tr>
            </thead>
            <tbody>
               <tr v-for="(p,index) in records" :key="index">
                  <td>
                     <a href="#">
                        <i class="text-danger fa fa-edit"></i>
                     </a>
                     <a href="#" v-on:click="click_delete(p.id)">
                        <i class="text-danger fa fa-trash"></i>
                     </a>
                  </td>
                  <td>{{ p.id }}</td>
                  <td>{{ p.fname }}{{ p.lname }}</td>
                  <td>{{ p.email }}</td>
                  <td>{{ p.phone }}</td>
                  <td v-if="p.id_status == 1">
                     <span class="label label-info">Activo</span>
                  </td>
                  <td v-else>
                     <span class="label label-info">Inactivo</span>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</template>
<script>
   export default{
      props:[],
      data(){ 
         return {
            jsonfrm: {},
            records: [],
            csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      },
      created() {
         axios.get('http://testapp.test/ws/listrecord'
         ,{ params: { '_token': 'Um4dP8K5tYZ6yGVYZRQIYJiRE0l706PAyB48oS2l', 'EndpointName': 'users' }} )
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
         show_contact(contact_id){
            alert(contact_id);
         },
         click_delete(identity){
             let updateProperties = {
                  _token: this.csrfToken,
                  EndpointName: "users",
                  id:identity,
                  where: [{
                           id_status: 2
                        }]
               };

            console.log(JSON.stringify(updateProperties));

            axios.post('http://testapp.test/ws/updaterecordwhere', updateProperties, {
               headers: {
                  'X-CSRF-TOKEN': this.csrfToken
               }
            })
            .then(response => {
               toastr.success('Registro actualizado');
            })
            .catch(error => {
               toastr.error('Hubo un error actualizando el registro');
               //console.error('Hubo un error ingresando los usuarios:', error);
            });
         }
      }
   }
</script>