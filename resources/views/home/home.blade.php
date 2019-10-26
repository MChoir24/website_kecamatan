@extends('layouts.app')

@section('title')
Home
@endsection

@section('active1')
    active
@endsection

@section('content')
<div class="row">
    <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-2">
                <span class="section-heading-upper">Visi Dan Misi</span>
                <span class="section-heading-lower mt-2">Visi</span>
            </h2>
            <p>{{ $visiMisi->visi }}</p>
            <hr class="style1"/>
            <h2 class="section-heading mb-2">
                <span class="section-heading-lower">Misi</span>
            </h2>
            <p>{{ $visiMisi->misi }}</p>



        </div>
    </div>
</div>
@endsection
