@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{url('settings')}}" method="post" enctype="multipart/form-data" > @csrf
            <div class="row">
                
                <div class="col-md-4 mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{$setting->title}}" class="form-control mt-2">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="logo">Logo [ 7*2 ]</label>
                    <img width="auto" height="20px" src="{{asset('images/settings/'.$setting->logo)}}" alt="image">
                    <input type="file" name="logo" id="logo" value="{{$setting->logo}}" class="form-control mt-2">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="favicon">Favicon [ 1*1 ]</label>
                    <img width="20px" height="20px" src="{{asset('images/settings/'.$setting->favicon)}}" alt="image">
                    <input type="file" name="favicon" id="favicon" value="{{$setting->favicon}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{$setting->email}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mobile1">Mobile1</label>
                    <input type="text" name="mobile1" id="mobile1" value="{{$setting->mobile1}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mobile2">Mobile2</label>
                    <input type="text" name="mobile2" id="mobile2" value="{{$setting->mobile2}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mobile3">Mobile3</label>
                    <input type="text" name="mobile3" id="mobile3" value="{{$setting->mobile3}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mobile4">Mobile4</label>
                    <input type="text" name="mobile4" id="mobile4" value="{{$setting->mobile4}}" class="form-control mt-2">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="{{$setting->address}}" class="form-control mt-2">
                </div>
                
                <h5 class="mt-5">Social Media</h5>
                
                <div class="col-md-6 mb-3">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" value="{{$setting->facebook}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" value="{{$setting->instagram}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" id="twitter" value="{{$setting->twitter}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" name="linkedin" id="linkedin" value="{{$setting->linkedin}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="youtube">Youtube</label>
                    <input type="text" name="youtube" id="youtube" value="{{$setting->youtube}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="website">Website</label>
                    <input type="text" name="website" id="website" value="{{$setting->website}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="whatsapp">Whatsapp</label>
                    <input type="text" name="whatsapp" id="whatsapp" value="{{$setting->whatsapp}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="messenger">Messenger</label>
                    <input type="text" name="messenger" id="messenger" value="{{$setting->messenger}}" class="form-control mt-2">
                </div>

    

                <!--<div class="row">-->
                <!--    <div class="col-md-6 p-3">-->
                <!--        <div class="card p-3">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-12 mb-3">-->
                <!--                <label for="vision_image">Vision Image</label>-->
                <!--                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->vision_image)}}" alt="image">-->
                <!--                <input type="file" name="vision_image" id="vision_image" value="{{$setting->vision_image}}" class="form-control mt-2">-->
                <!--            </div>-->
                <!--            <div class="col-md-12 mb-3">-->
                <!--                <label for="vision_description">Vision Description</label>-->
                <!--                <textarea name="vision_description" rows="3" cols="33" id="vision_description" class="form-control mt-2">{!!$setting->vision_description!!}</textarea>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-6 p-3">-->
                <!--        <div class="card p-3">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-12 mb-3">-->
                <!--                <label for="mission_image">Mission Image</label>-->
                <!--                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->mission_image)}}" alt="image">-->
                <!--                <input type="file" name="mission_image" id="mission_image" value="{{$setting->mission_image}}" class="form-control mt-2">-->
                <!--            </div>-->
                <!--            <div class="col-md-12 mb-3">-->
                <!--                <label for="mission_description">Mission Description</label>-->
                <!--                <textarea name="mission_description" rows="3" cols="33" id="mission_description" class="form-control mt-2">{!!$setting->mission_description!!}</textarea>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="col-md-12 p-3">-->
                <!--        <div class="card p-3">-->
                <!--        <div class="row">-->
                <!--            <div class="col-md-12 mb-3">-->
                <!--                <label for="who_we_are_image">Who We Are Image</label>-->
                <!--                <img height="200px" width="auto" src="{{asset('images/settings/'.$setting->who_we_are_image)}}" alt="image">-->
                <!--                <input type="file" name="who_we_are_image" id="who_we_are_image" value="{{$setting->who_we_are_image}}" class="form-control mt-2">-->
                <!--            </div>-->
                <!--            <div class="col-md-12 mb-3">-->
                <!--                <label for="who_we_are_description">Who We Are Description</label>-->
                <!--                <textarea name="who_we_are_description" rows="3" cols="33" id="who_we_are_description" class="form-control mt-2">{!!$setting->who_we_are_description!!}</textarea>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                
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
<script>
    ClassicEditor
        .create( document.querySelector('#who_we_are_description'));
</script>


@endsection
