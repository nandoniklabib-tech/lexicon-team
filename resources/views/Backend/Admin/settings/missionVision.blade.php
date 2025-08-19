@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{url('mission-vision-update')}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
            <div class="row">
                
                <div class="row">
                    <div class="col-md-6 p-3">
                        <div class="card p-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="vision_image">Vision Image [ 3*2 ]</label>
                                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->vision_image)}}" alt="image">
                                <input type="file" name="vision_image" id="vision_image" value="{{$setting->vision_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="vision_description">Vision Description</label>
                                <textarea name="vision_description" rows="3" cols="33" id="vision_description" class="form-control mt-2">{!!$setting->vision_description!!}</textarea>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="card p-3">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="mission_image">Mission Image [ 3*2 ]</label>
                                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->mission_image)}}" alt="image">
                                <input type="file" name="mission_image" id="mission_image" value="{{$setting->mission_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="mission_description">Mission Description</label>
                                <textarea name="mission_description" rows="3" cols="33" id="mission_description" class="form-control mt-2">{!!$setting->mission_description!!}</textarea>
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
        .create( document.querySelector('#mission_description'));
</script>
<script>
    ClassicEditor
        .create( document.querySelector('#vision_description'));
</script>


@endsection
