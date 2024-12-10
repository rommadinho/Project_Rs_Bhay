@extends('layout.app')

@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">

                <!-- Memanggil chart -->
                @include('layout.chart')

                @include('layout.Messages')

                @include('layout.Slide')


            </div>
        </div>
    </div>
@endsection
