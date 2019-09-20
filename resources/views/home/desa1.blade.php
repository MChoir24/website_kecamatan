@extends('/layouts.app')

@section('title')
desa
@endsection

@section('active5')
active
@endsection

@section('content')
<div class="row">
    <div class="col-xl-3 mx-auto">
        <div class="rounded whiteA shadow mb-2">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul style="list-style-type:none;">
                                <li><a href="#">link1</a></li>
                                <li><a href="#">link2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul style="list-style-type:none;">
                                <li><a href="#">link1</a></li>
                                <li><a href="#">link2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul style="list-style-type:none;">
                                <li><a href="#">link1</a></li>
                                <li><a href="#">link2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 mx-auto">
        <div class="cta-inner rounded">
            <h2 class="section-heading text-center mb-3">
                <span class="section-heading-lower">Geografis</span>
            </h2>
            <ul style="list-style-type:disc;">
                <div class="row justify-content-md-center">
                    <div class="col-sm-4">
                        <li>Luas</li>
                    </div>
                    <div class="col-sm">: xxxx</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm">: xxxx</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <li>Tinggi Dari Permukaan Laut</li>
                    </div>
                    <div class="col-sm">: xxx</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <li>Batas-batasnya
                    </div>
                </div>
                <ul style="list-style-type:disc;">
                    <div class="row">
                        <div class="col-sm-4">
                            <li>Sebelah Utara</li>
                        </div>
                        <div class="col-sm">: xxx</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <li>Sebelah Timur</li>
                        </div>
                        <div class="col-sm">: xxx</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <li>Sebelah Selatan</li>
                        </div>
                        <div class="col-sm">: xxx</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <li>Sebelah Barat</li>
                            </li>
                        </div>
                        <div class="col-sm">: xxx</div>
                    </div>
                </ul>
            </ul>
        </div>
    </div>
</div>
@endsection
