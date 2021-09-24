@extends('layout')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/') }}">

@endsection

@section('content')
    <h1>Task Status</h1>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <!-- Draggable Without Images card start -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Draggable Grid with cards</h5>
                    </div>
                    <div class="card-block">
                        <div class="row" id="sortable">
                            <div class="col-md-6 m-b-20" draggable="false" style="">
                                <div class="card-sub"> <img class="card-img-top img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557925704/doruk-yemenici-1593970-unsplash.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Product 1</h4>
                                        <p class="card-text">That might be little bit risky to have crew member like them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-sub m-b-20"> <img class="card-img-top img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557925739/marek-levak-1591308-unsplash.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Product 2</h4>
                                        <p class="card-text">That might be little bit risky to have crew member like them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="">
                                <div class="card-sub"> <img class="card-img-top img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557925652/tomas-robertson-1594346-unsplash.jpg" alt="Card image cap" draggable="false">
                                    <div class="card-block">
                                        <h4 class="card-title">Product 3</h4>
                                        <p class="card-text">That might be little bit risky to have crew member like them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 m-b-20" draggable="false" style="">
                                <div class="card-sub"> <img class="card-img-top img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557925704/doruk-yemenici-1593970-unsplash.jpg" alt="Card image cap">
                                    <div class="card-block">
                                        <h4 class="card-title">Product 4</h4>
                                        <p class="card-text">That might be little bit risky to have crew member like them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="" draggable="false">
                                <div class="card-sub m-b-20">
                                    <div class="card-block"> <img class="card-img-top img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557925606/chen-feng-1594580-unsplash.jpg" alt="Card image cap">
                                        <h4 class="card-title">Product 5</h4>
                                        <p class="card-text">That might be little bit risky to have crew member like them.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-sub m-t-20">
                                    <div class="card-block"> <img class="card-img-top img-fluid" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557925652/tomas-robertson-1594346-unsplash.jpg" alt="Card image cap" draggable="false">
                                        <h4 class="card-title">Product 6</h4>
                                        <p class="card-text">That might be little bit risky to have crew member like them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Draggable Without Images card end -->
            </div>
        </div>
    </div>
</div>
@endsection

@section ('script')
<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
<script src="{{ asset('/js/jquery.ui.js') }}"></script>
<script>
$( document ).ready(function() {
    $("#sortable").sortable();
    $("#sortable").disableSelection();
    });
</script>
@endsection
