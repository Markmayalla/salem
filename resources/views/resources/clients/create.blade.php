<?php
//Variables worth filling
$identifier = 'clients';
$name = 'Clients';
$formFields = [
    [
        'label' => 'Name',
        'name' => 'name',
        'type' => 'text',
        'component' => 'input'
    ],
    [
        'label' => 'Logo',
        'name' => 'logo',
        'type' => 'file',
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
                    <h3>Create {{ $name }} Form</h3>
                </div>
                <div class="card-body">
                    <form action="/{{ $identifier }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @foreach ($formFields as $field)
                            <div class="form-group">
                                <label for="name">{{ $field['label'] }}</label>

                                @if ($field['component'] == 'input') 
                                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['label'] }}" class="form-control">
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