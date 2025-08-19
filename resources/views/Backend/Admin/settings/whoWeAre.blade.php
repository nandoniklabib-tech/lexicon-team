@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{url('who-we-are-update')}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
            <div class="row">
                
                <div class="row">
                    <div class="col-md-12 p-3">
                        <div class="card p-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="who_we_are_image">Who We Are Image [ 1*1 ]</label>
                                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->who_we_are_image)}}" alt="image">
                                <input type="file" name="who_we_are_image" id="who_we_are_image" value="{{$setting->who_we_are_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="who_we_are_description">Who We Are Description</label>
                                <textarea name="who_we_are_description" rows="3" cols="33" id="who_we_are_description" class="form-control mt-2">{!!$setting->who_we_are_description!!}</textarea>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>    
                </div>
                
            </div>
            </form>
        </div>
    </div>
</div>

<!-- editor -->
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector('#who_we_are_description'));
</script>

@endsection
