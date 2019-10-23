@extends('layouts.cms')

@section('cms_content')
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="/projects" method="post">
                        @csrf
                        @php 
                            $form = [
                                ['name'=>'contract_name', 'label'=>'Contract Name', 'type'=>'text'],
                                ['name'=>'name_of_employer', 'label'=>'Name of empoyer', 'type'=>'text'],
                                ['name'=>'address', 'label'=>'Address', 'type'=>'text'],
                                ['name'=>'descreption', 'label'=>'Description', 'type'=>'text']
                            ]
                        @endphp

                        @foreach ($form as $input)
                            @component('components.form.input', ['name'=>$input['name'],'label'=>$input['label'],'type' => $input['type']])@endcomponent
                        @endforeach

                        <button type="submit" class="btn btn-primary">create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection