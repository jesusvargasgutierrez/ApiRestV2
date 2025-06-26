<template>
   <div class="">
      <!--begin::Sidebar-->
      <div class="flex-column flex-lg-row-auto mb-10">
         <!--begin::Card-->
         <div class="card mb-5 mb-xl-8">
            <!--begin::Card body-->
            <div class="card-body pt-15">
               <!--begin::Summary-->
               <div class="d-flex flex-center flex-column mb-5">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-100px symbol-circle mb-7">
                     <img src="assets/media/avatars/300-1.jpg" alt="image" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Name-->
                  <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{ record.fname }} {{ record.lname }}</a>
                  <!--end::Name-->
                  <!--begin::Position-->
                  <div class="fs-5 fw-semibold text-muted mb-6">Software Enginer</div>
                  <!--end::Position-->
               </div>
               <!--end::Summary-->
               <!--begin::Details toggle-->
               <div class="d-flex flex-stack fs-4 py-3">
                  <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details 
                  <span class="ms-2 rotate-180">
                     <i class="ki-outline ki-down fs-3"></i>
                  </span></div>
                  <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                     <a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
                  </span>
               </div>
               <!--end::Details toggle-->
               <div class="separator separator-dashed my-3"></div>
               <!--begin::Details content-->
               <div id="kt_customer_view_details" class="collapse show">
                  <div class="py-5 fs-6">
                     <div class="fw-bold mt-5">Full Name</div>
                     <div class="col">
                        <div class="row">
                           <div class="col-4">
                              <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" :value="record.fname" />
                           </div>
                           <div class="col-4">
                              <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" :value="record.lname" />
                           </div>
                        </div>
                     </div>
                     <div class="fw-bold mt-5">Fecha de nacimiento</div>
                     <div class="text-gray-600">
                        <input type="date" name="birthday" class="form-control form-control-solid"/>
                     </div>
                     <div class="fw-bold mt-5">Email</div>
                     <div class="text-gray-600">
                        <a href="#" class="text-gray-600 text-hover-primary">
                           <input type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Company email" :value="record.email" />
                        </a>
                     </div>
                     <div class="fw-bold mt-5">Password</div>
                     <div class="text-gray-600">
                        <input type="text" name="password" class="form-control form-control-lg form-control-solid" placeholder="Password" />
                     </div>
                     <div class="fw-bold mt-5">Cellphone</div>
                     <div class="text-gray-600">
                        <input type="text" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" :value="record.phone" />
                     </div>
                     <div class="fw-bold mt-5">Country</div>
                     <div class="text-gray-600">
                        <select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
                           <option value="">Select a Country...</option>
                           <option data-kt-flag="flags/afghanistan.svg" value="AF" selected="selected">Afghanistan</option>
                        </select>
                     </div>
                     <div class="fw-bold mt-5">Gender</div>
                     <div class="text-gray-600">
                        <div class="d-flex align-items-center mt-3">
                           <!--begin::Option-->
                           <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                              <input class="form-check-input" type="checkbox" value="1" />
                              <span class="fw-semibold ps-2 fs-6">Male</span>
                           </label>
                           <!--end::Option-->
                           <!--begin::Option-->
                           <label class="form-check form-check-custom form-check-inline form-check-solid">
                              <input class="form-check-input" type="checkbox" value="2" />
                              <span class="fw-semibold ps-2 fs-6">female</span>
                           </label>
                           <!--end::Option-->
                        </div>
                        <!--end::Options-->
                        <input class="form-check-input" name="gender" type="text" value="1" />
                     </div>
                     <div class="fw-bold mt-5">Status</div>
                     <div class="text-gray-600">
                        <div class="col-lg-8 d-flex align-items-center">
                           <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                              <input class="form-check-input w-45px h-30px" type="checkbox" name="id_status" id="allowmarketing" checked="checked" />
                              <label class="form-check-label" for="allowmarketing"></label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end::Details content-->
            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
               <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
               <button type="button" class="btn btn-primary" v-on:click="click_update" id="kt_account_profile_details_submit">Save Changes</button>
            </div>
            <!--end::Actions-->
         </div>
         <!--end::Card-->
      </div>
      <!--end::Sidebar-->
   </div>
</template>
<script>
   export default{
      props:[
      ],
      data(){ 
         return {
            jsonfrm: {},
            record: [],
            csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      },
      created() {
         axios.get('http://testapp.test/ws/getrecord'
         ,{ params: { '_token': 'A8Cpci371sTFgcURlVrF8dQUJXqyqJ4fxl6ZKQry', 'EndpointName': 'users', 'id':11 }} )
         .then(response => {
            this.record = response.data.information[0];
            console.log(this.record);
         })
         .catch(error => {
            console.error('Hubo un error obteniendo los usuarios:', error);
         });
      },
      mounted() {
      },
      methods: {
         click_update(identity){
             this.jsonfrm = json_update_form();

             let additionalProperties = {
                  _token: this.csrfToken,
                  EndpointName: "users",
                  id:this.record.id,
               };

            Object.assign(this.jsonfrm, additionalProperties);

            console.log(JSON.stringify(this.jsonfrm));

            axios.post('http://testapp.test/ws/updaterecordwhere', this.jsonfrm, {
               headers: {
                  'X-CSRF-TOKEN': this.csrfToken
               }
            })
            .then(response => {
               toastr.success('Registro agregado');
            })
            .catch(error => {
               toastr.error('Hubo un error ingresando los usuarios');
            });
         }
      }
   }
</script>