@extends('layouts.cms')

@section('cms_content')
<div class="container">
    <div class="row justify-contents-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="/projects/create" class="btn btn-secondary right mb-2">Create Project</a>
                    <table class="table table-hover table-stripped">
                        <thead>
                            <th>
                                <td>s/n</td>
                                <td>Title</td>
                                <td>Description</td>
                                <td>Actions</td>
                            </th>
                        </thead>
                    </table>
                </div>
                @foreach($projects as $project)
                {{ $project->title }} {{ $project->description }}
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection