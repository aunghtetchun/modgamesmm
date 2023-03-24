@extends('dashboard.app')

@section("title") Add Game @endsection

@section('content')

    @component("component.breadcrumb",["data"=>[
        "Game" => route("post.index"),
    ]])
        @slot("last") Add Game @endslot
    @endcomponent

    <div class="row">
        <div class="col-12 col-xl-10">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Add Game @endslot
                @slot('button')
                    <a href="{{ route('post.index') }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-list fa-fw"></i>
                    </a>
                @endslot
                @slot('body')
                    <div>
                        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row justify-content-between ">
                                <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label for="name">Game Name</label>
                                        <input required type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}" placeholder="Game Name">
                                        @error('name')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Game Type</label>
                                        <input required type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{old('type')}}" placeholder="Game Type">
                                        @error('type')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tag_id">Select Tags</label>
                                        <select name="tag_id[]" id="tag_id" class="form-control select2" multiple="multiple">
                                            @foreach(\App\Category::latest()->get() as $c)
                                                <option value="{{ $c->id }}" >{{ $c->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag_id')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" id="category_id" class="form-control select2">
                                            <option selected disabled>Select Category</option>
                                            @foreach(\App\Category::latest()->get() as $c)
                                                <option value="{{$c->id}}">{{$c->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="updated">Updated</label>
                                        <input required type="text" class="form-control @error('updated') is-invalid @enderror" name="updated" id="updated" value="{{old('updated')}}" placeholder="Updated">
                                        @error('updated')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <input required type="text" class="form-control @error('size') is-invalid @enderror" name="size" id="size" value="{{old('size')}}" placeholder="Size">
                                        @error('size')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="version">Version</label>
                                        <input required type="text" class="form-control @error('version') is-invalid @enderror" name="version" id="version" value="{{old('version')}}" placeholder="Version">
                                        @error('version')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="requirement">Requirement</label>
                                        <input required type="text" class="form-control @error('requirement') is-invalid @enderror" name="requirement" id="requirement" value="{{old('requirement')}}" placeholder="Requirement">
                                        @error('requirement')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="developer">Developer Company</label>
                                        <input required type="text" class="form-control @error('developer') is-invalid @enderror" name="developer" id="developer" value="{{old('developer')}}" placeholder="Developer Company">
                                        @error('developer')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="video">Gameplay Video</label>
                                        <input required type="text" class="form-control @error('video') is-invalid @enderror" name="video" id="video" value="{{old('video')}}" placeholder="Gameplay Video">
                                        @error('video')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="link1">Link One</label>
                                        <input type="text" class="form-control @error('link1') is-invalid @enderror" name="link1" id="link1" value="{{old('link1')}}" placeholder="Link One">
                                        @error('link1')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="link2">Link Two</label>
                                        <input type="text" class="form-control @error('link2') is-invalid @enderror" name="link2" id="link2" value="{{old('link2')}}" placeholder="Link Two">
                                        @error('link2')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="link3">Link Three</label>
                                        <input type="text" class="form-control @error('link3') is-invalid @enderror" name="link3" id="link3" value="{{old('link3')}}" placeholder="Link Three">
                                        @error('link3')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group justify-content-center align-items-center">
                                        <label for="logo">Game Logo</label>
                                        <input  required type="file" accept="image/png, .jpeg, .jpg,image/webp, image/gif" class="form-control d-none  p-1 @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{old('logo')}}" placeholder="Ads Logo" onchange="readURL(this);">
                                        @error('logo')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                        <img id="blah" onclick="$('#logo').trigger('click');" class="w-100 rounded" src="{{asset('dashboard/images/upload.png')}}" alt="your image" />
                                    </div>
                                    <div class="form-group input-field">
                                        <label class="active" for="images">Game Photos</label>
                                        <div class="input-images-1" style="padding-top: .5rem;"></div>
{{--                                        <input required type="file" accept="image/png, .jpeg, .jpg, image/gif" multiple class="input-images-1 p-1 form-control @error('images') is-invalid @enderror" name="images[]" id="images" value="{{old('images')}}" style="padding-top: .5rem;">--}}
                                        @error('images')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="features">Mod Features</label>
                                        <textarea rows="9" required class="form-control @error('features') is-invalid @enderror" name="features"  id="features">{{old('features')}}</textarea>
                                        @error('features')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea rows="9" required class="form-control @error('description') is-invalid @enderror" name="description"  id="description">{{old('description')}}</textarea>
                                        @error('description')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary " ><i class="fas fa-plus-square mr-1"></i> Add Game</button>
                        </form>
                    </div>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
@section('foot')
    <script>
        $('.input-images-1').imageUploader();
        $('#description').summernote({
            height: 200,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true
        });
    </script>
@endsection
