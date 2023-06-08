@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Create Characters</h1>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invali

            @enderror" name="title" id="title" >

            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="price">Price</label>
            <input type="text" class="form-control @error('price') is-invali

            @enderror" name="price" id="price" >

            @error('price')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" class="form-control @error('description') is-invali

            @enderror" name="description" id="description" ></textarea>

            @error('description')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="text" class="form-control @error('image') is-invali

            @enderror" name="image" id="image" >

            @error('image')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>

        <div class="form-group">
            <p>Seleziona i Tag</p>
            @foreach ($tags as $tag)
                <div>
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}" class="form-check-input" {{
                        in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                </div>
            @endforeach
        </div>

        @error('tags')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror

        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</div>
@endsection
