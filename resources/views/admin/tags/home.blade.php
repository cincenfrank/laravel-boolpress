@extends('layouts.admin')
@section('content')

{{-- <h1>Sono la view Posts Home</h1> --}}
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Categories') }}</div>

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($tags as $tag)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                {{-- <span class="badge badge-pill font-weight-bold badge-primary mb-3 mr-2">{{$post->category->name}}</span> --}}
                                <span>{{$tag->name}}</span>
                            </div>
                            <div>

                                <form class="d-inline-block" action="{{route('admin.tags.destroy',$tag)}}" method="post">
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
