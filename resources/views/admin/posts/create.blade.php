@extends('layouts.admin')
@section('content')

{{-- <h1>Sono la view Posts Home</h1> --}}
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Post</div>

            <div class="card-body">
                <form action="{{route('admin.posts.store')}}" method="post" class="form">
                    @csrf

                    <div class="form-group">

                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="" placeholder="Post Title" name="title">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <label for="category"></label>
                                    <select class="form-control" name="category" id="category">
                                        @foreach ($categories as $category)

                                        <option value={{$category->id}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <select multiple class="form-control" name="tags[]" id="tags">

                                        @foreach ($tags as $tag)

                                        <option value={{$tag->id}}>{{$tag->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Visibility</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="published" id="published" value="1" checked>
                                            Public
                                        </label>
                                        <label class="form-check-label ml-5">
                                            <input type="radio" class="form-check-input" name="published" id="published" value="0">
                                            Hidden
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="imageSrc">Image Link</label>
                                    <input type="text" class="form-control w-100" name="imageSrc" id="imageSrc" aria-describedby="helpId" placeholder="Image Link" value="">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" class="w-100 form-control" rows="20"> </textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-outline-success" type="submit">Edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
