@extends(config('app.layout'))

@section('content')
    <div class="card-body p-lg-17">
        <h1 class="fw-bold text-gray-900 mb-9">Contacto</h1>
        <div class="row g-5 mb-5 mb-lg-15">
            <!--begin::Col-->
            <div class="col-sm-6 pe-lg-10">
                <!--begin::Phone-->
                <div class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
                    <!--begin::Icon-->
                    <i class="ki-outline ki-briefcase fs-3tx text-primary"></i>
                    <!--end::Icon-->
                    <!--begin::Subtitle-->
                    <h1 class="text-gray-900 fw-bold my-5">RECEPCI&Oacute;N</h1>
                    <!--end::Subtitle-->
                    <!--begin::Number-->
                    <div class="text-gray-700 fw-semibold fs-2">+52 639 472 57 90 Ext. 101</div>
                    <div class="text-gray-700 fw-semibold fs-2">+52 639 120 30 20 Ext. 101</div>
                    <!--end::Number-->
                </div>
                <!--end::Phone-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 ps-lg-10">
                <!--begin::Address-->
                <div class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
                    <!--begin::Icon-->
                    <i class="ki-outline ki-geolocation fs-3tx text-primary"></i>
                    <!--end::Icon-->
                    <!--begin::Subtitle-->
                    <h1 class="text-gray-900 fw-bold my-5">ADMINISTRAC&Oacute;N</h1>
                    <!--end::Subtitle-->
                    <!--begin::Description-->
                    <div class="text-gray-700 fs-3 fw-semibold">+52 639 472 57 90 Ext. 104</div>
                    <div class="text-gray-700 fs-3 fw-semibold">+52 639 120 29 23 Ext. 104</div>
                    <!--end::Description-->
                </div>
                <!--end::Address-->
            </div>
            <!--end::Col-->
        </div>
    </div>
@endsection