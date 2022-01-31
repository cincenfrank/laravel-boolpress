@extends('layouts.admin')
@section('content')

{{-- <h1>Sono la view Posts Home</h1> --}}
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Post - author {{$post->user->name}} - category {{$post->category->name}}</div>

            <div class="card-body">
                {{-- <form action="{{route('admin.posts.update',$post->id)}}" method="post" class="form"> --}}

                <div class="form-group">

                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="{{ $post->title }}" placeholder="Post Title" name="title" disabled>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                {{-- <label for="">Category</label> --}}
                                <label for="category">Category</label>
                                <select disabled class="form-control" name="category_id" id="category_id">
                                    {{-- @foreach ($post->category as $category)
                                        dump($category);
                                        {{-- <option value={{$category->id}} @if($category->id===$post->category_id) selected @endif>{{$category->name}}</option>
                                    @endforeach --}}
                                    <option value='{{$post->category->id}}'>{{$post->category->name}}</option>
                                    {{-- <option value='Health'>Health</option> --}}
                                    {{-- <option value='Sport'>Sport</option> --}}
                                    {{-- <option value='Politics'>Politics</option> --}}
                                    {{-- <option value='Fashion'>Fashion</option> --}}
                                </select>
                                {{-- {{dump($tags)}}
                                {{dump($categories)}} --}}
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select multiple class="form-control" name="tags[]" id="tags">

                                    @foreach ($post->tags as $tag)

                                    <option value={{$tag->id}} @if($post->tags->contains($tag)) selected @endif >{{$tag->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Visibility</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input disabled type="radio" class="form-check-input" name="published" id="published" value="1" @if ($post->published)
                                        checked
                                        @endif>
                                        Public
                                    </label>

                                    <label class="form-check-label ml-5">
                                        <input disabled type="radio" class="form-check-input" name="published" id="published" value="0" @if (!$post->published)
                                        checked
                                        @endif>
                                        Hidden
                                    </label>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <label for="imageSrc">Image Link</label>
                                <input disabled type="text" class="form-control w-100" name="imageSrc" id="imageSrc" aria-describedby="helpId" placeholder="Image Link" value="{{$post->imageSrc}}">
                        </div> --}}
                        <div>
                            <label for="" class="d-block">Image Link</label>
                            <img src="{{asset('storage/'.$post->imageSrc)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea disabled name="content" id="content" class="w-100 form-control" rows="20"> {{$post->content}}</textarea>
            </div>
            <div class="text-right">
                <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-outline-success" type="submit">Edit</a>
            </div>
            {{-- </form> --}}

        </div>
    </div>
</div>
</div>

@endsection
