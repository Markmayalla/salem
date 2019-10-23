@extends('layouts.cms')

@section('cms_content')
<div class="container">
    <div class="row justify-contents-center">
        <div class="col-md-2">
            <div style="background-image: url('/storage/images/clients/{{ $client->logo }}');background-size:cover;background-repeat:no-repeat;height:100px;widht:100px">                
            </div>
        </div>

        <div class="col-md-4">
            <h3>{{ $client->name }}</h3>
        </div>
    </div>
</div>
@endsection