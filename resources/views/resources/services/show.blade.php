@extends('layouts.cms')

@section('cms_content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if ($service->image)
                        <div style="background-image:url('/storage/images/services/{{ $service->image }}'); background-size:cover; background-repeat:no-repeat; background-position:center; width:100%; height: 300px;">

                        </div>
                    @else
                        <i class="far fa-image" style="font-size:200px"></i>
                    @endif
                </div>

                <div class="col-md-12">
                    <h2>{{ $service->name }}</h2>
                    {{ $service->description }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection