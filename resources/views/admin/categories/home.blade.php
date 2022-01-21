@extends('layouts.admin')
@section('content')

{{-- <h1>Sono la view Posts Home</h1> --}}
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Categories') }}</div>

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($categories as $category)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                {{-- <span class="badge badge-pill font-weight-bold badge-primary mb-3 mr-2">{{$post->category->name}}</span> --}}
                                <span>{{$category->name}}</span>
                            </div>
                            <div>

                                <a class="btn btn-outline-info mr-3" href="{{route('admin.categories.edit',$category->id)}}">Edit</a>
                                <form class="d-inline-block" action="{{route('admin.categories.destroy',$category)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>

                    @endforeach

                </ul>


                {{-- {{ __('You are logged in!') }} --}}
            </div>
        </div>
    </div>
</div>

@endsection
