@extends("dashboard.layouts.master")

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Apexcharts</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                <li class="breadcrumb-item active">Apexcharts</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Line with Data Labels</h4>
                        </div>
                        <div class="card-body">

                            <div id="line_chart_datalabel" data-colors='["#5156be", "#2ab57d"]' class="apex-charts" dir="ltr"></div>                              
                        </div>
                    </div><!--end card-->
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Dashed Line</h4>
                        </div>
                        <div class="card-body">
                            
                            <div id="line_chart_dashed" data-colors='["#5156be", "#fd625e", "#2ab57d"]' class="apex-charts" dir="ltr"></div>        
                        </div>
                    </div><!--end card-->
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Spline Area</h4>
                        </div>
                        <div class="card-body">
                            <div id="spline_area" data-colors='["#5156be", "#2ab57d"]' class="apex-charts" dir="ltr"></div>                      
                        </div>
                    </div><!--end card-->
                </div>

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Column Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="column_chart" data-colors='["#2ab57d", "#5156be", "#fd625e"]' class="apex-charts" dir="ltr"></div>                                      
                        </div>
                    </div><!--end card-->
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Column with Data Labels</h4>
                        </div>
                        <div class="card-body">
                            <div id="column_chart_datalabel" data-colors='["#5156be"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Bar Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="bar_chart" data-colors='["#2ab57d"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!--end card-->
                </div>
            </div>  
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Line, Column & Area Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="mixed_chart" data-colors='["#fd625e", "#5156be", "#2ab57d"]' class="apex-charts" dir="ltr"></div> 
                        </div>
                    </div><!--end card-->
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Radial Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="radial_chart" data-colors='["#5156be", "#2ab57d", "#fd625e", "#ffbf53"]' class="apex-charts" dir="ltr"></div>  
                        </div>
                    </div><!--end card-->
                    
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Pie Chart</h4>
                        </div>
                        <div class="card-body">
                            
                            <div id="pie_chart" data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Donut Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="donut_chart" data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]' class="apex-charts"  dir="ltr"></div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            
        </div> <!-- container-fluid -->
    </div>
                
@endsection
