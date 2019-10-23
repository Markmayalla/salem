@extends('layouts.app')

@section('content')
    
<div class="container mb-3">
        <div class="row">
            <div class="col-md-12">
                @component('components.admin.breadcrumb')
                @endcomponent
            </div>
        </div>
    </div>

    @yield('cms_content')

@endsection