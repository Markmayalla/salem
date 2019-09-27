@extends('includes/layout', ['class'=>'hero'])
@section('main_content')

@component('components/carousel')
@endcomponent
@component('components/introduction', ['page'=>'home'])
@endcomponent
@component('components/teaser')
@endcomponent
@component('components/projects')
@endcomponent
@component('components/project_quote_callout')
@endcomponent

@endsection