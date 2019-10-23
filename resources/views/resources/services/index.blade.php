@extends('layouts.cms')

@section('cms_content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="card">
               <div class="card-body">
                   <div class="clearfix">
                       <a href="/services/create" class="btn btn-primary float-right mb-2">Create Service</a>
                   </div>
                   <table class="table table-hover table-stripped">
                       <thead>
                           <tr>
                               <th width="20px">S/n</th>
                               <th>Name</th>
                               <th width="130px">Actions</th>
                           </tr>
                       </thead>

                       <tbody>
                           @foreach ($services as $service)
                           <tr>
                               <td>{{ ++$loop->index }}</td>
                               <td>{{ $service->name }}</td>
                               <td>
                                   <form action="/services/{{ $service->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="/services/{{ $service->id }}" class="btn btn-success btn-sm"><i class="fas fa-binoculars"></i></a>
                                        <a href="/services/{{ $service->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                               </td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
