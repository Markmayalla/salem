<?php
//Variables worth filling
$identifier = 'clients';
$name = 'Clients';
$path = '/storage/images/clients';
$formFields = [
    [
        'label' => 'Name',
        'name' => 'name',
        'type' => 'text',
        'value' => $client->name,
        'component' => 'input'
    ],
    [
        'label' => 'Logo',
        'name' => 'logo',
        'type' => 'file',
        'value' => $client->logo,
        'component' => 'input'
    ]
]
?>

@extends('layouts.cms')

@section('cms_content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit {{ $name }} Form</h3>
                </div>
                <div class="card-body">
                    <form action="/{{ $identifier }}/{{ $client->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        @foreach ($formFields as $field)
                            <div class="form-group">
                                <label for="name">{{ $field['label'] }}</label>

                                @if ($field['component'] == 'input') 
                                    @if ($field['type'] == 'file')
                                        @if ($field['value'])
                                            <br /><img src="{{ $path }}/{{  $client->logo }}" height="100px"/>
                                        @else
                                            <br /><span small>No file exists</span>
                                        @endif
                                    @endif
                                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['label'] }}" value="{{ $field['value'] }}" class="form-control">
                                @endif
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection