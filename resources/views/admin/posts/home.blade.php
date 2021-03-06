@extends('layouts.admin')
@section('content')

<div class="row justify-content-center h-100">
    <div class="col-md-8 h-100 overflow-hidden py-5">
        <div class="card h-100 ">
            <div class="d-flex justify-content-between card-header">
                <div class="">{{ __('Posts Pubblicati') }}</div>

                <a class="btn btn-outline-success" href="{{route('admin.posts.create')}}">Create New Post</a>
            </div>
            <div class="card-body overflow-auto">
                <ul class="list-group list-group-flush">
                    @foreach ($posts as $post)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge badge-pill font-weight-bold badge-primary mb-3 mr-2">{{$post->category->name}}</span>
                                <a href="{{route('admin.posts.show',$post->id)}}">{{$post->title}}</a>
                            </div>
                            <div>

                                <a class="btn btn-outline-info mr-3" href="{{route('admin.posts.edit',$post->id)}}">Edit</a>
                                <form class="d-inline-block" action="{{route('admin.posts.destroy',$post)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>

                    @endforeach
                    <div class="d-flex justify-content-center my-3">

                        {{$posts->links()}}
                    </div>

                </ul>


                {{-- {{ __('You are logged in!') }} --}}
            </div>
        </div>
    </div>
</div>

@endsection
