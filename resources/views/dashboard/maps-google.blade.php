@extends("dashboard.layouts.master")

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Google Maps</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                <li class="breadcrumb-item active">Google Maps</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Markers</h4>
                            <p class="card-title-desc">Example of google maps.</p>
                        </div>
                        <div class="card-body">
                            <div id="gmaps-markers" class="gmaps"></div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Overlays</h4>
                            <p class="card-title-desc">Example of google maps.</p>
                        </div>
                        <div class="card-body">
                            <div id="gmaps-overlay" class="gmaps"></div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Street View Panoramas</h4>
                            <p class="card-title-desc">Example of google maps.</p>
                        </div>
                        <div class="card-body">
                            <div id="panorama" class="gmaps-panaroma"></div>
                        </div>
                    </div>
                </div> <!-- end col -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Map Types</h4>
                            <p class="card-title-desc">Example of google maps.</p>
                        </div>
                        <div class="card-body">
                            <div id="gmaps-types" class="gmaps"></div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
            
        </div> <!-- container-fluid -->
    </div>
    
@endsection