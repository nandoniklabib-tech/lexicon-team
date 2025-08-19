@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{url('message-from-ceo-update')}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
            <div class="row">
                
                <div class="row">
                    <div class="col-md-12 p-3">
                        <div class="card p-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="ceo_image">Message From CEO Image [ 1*1 ]</label>
                                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->ceo_image)}}" alt="image">
                                <input type="file" name="ceo_image" id="ceo_image" value="{{$setting->ceo_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="ceo_image_back">Message From CEO Banner [ 4*1 ]</label>
                                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->ceo_image_back)}}" alt="image">
                                <input type="file" name="ceo_image_back" id="ceo_image_back" value="{{$setting->ceo_image_back}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="ceo_description">Message From CEO</label>
                                <textarea name="ceo_description" rows="3" cols="33" id="ceo_description" class="form-control mt-2">{!!$setting->ceo_description!!}</textarea>
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
        .create( document.querySelector('#ceo_description'));
</script>

@endsection
