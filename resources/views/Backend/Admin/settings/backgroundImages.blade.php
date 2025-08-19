@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{url('background-images-update')}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
            <div class="row">
                
                <div class="row">
                    <div class="col-md-12 p-3">
                        <div class="card p-3">
                        <div class="row">
                            
                            <div class="col-md-6 mb-5">
                                <label for="contact_image">Contact Image [ 4*1 ]</label>
                                @if($setting->contact_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->contact_image)}}" alt="image">@endif
                                <input type="file" name="contact_image" id="contact_image" value="{{$setting->contact_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="blogs_image">blogs Image [ 4*1 ]</label>
                                @if($setting->blogs_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->blogs_image)}}" alt="image">@endif
                                <input type="file" name="blogs_image" id="blogs_image" value="{{$setting->blogs_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="score_image">score Image [ 4*1 ]</label>
                                @if($setting->score_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->score_image)}}" alt="image">@endif
                                <input type="file" name="score_image" id="score_image" value="{{$setting->score_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="event_image">event Image [ 4*1 ]</label>
                                @if($setting->event_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->event_image)}}" alt="image">@endif
                                <input type="file" name="event_image" id="event_image" value="{{$setting->event_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="higher_education_image">higher_education Image [ 4*1 ]</label>
                                @if($setting->higher_education_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->higher_education_image)}}" alt="image">@endif
                                <input type="file" name="higher_education_image" id="higher_education_image" value="{{$setting->higher_education_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="immigration_image">immigration Image [ 4*1 ]</label>
                                @if($setting->immigration_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->immigration_image)}}" alt="image">@endif
                                <input type="file" name="immigration_image" id="immigration_image" value="{{$setting->immigration_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="ielts_reg_image">ielts_reg Image [ 4*1 ]</label>
                                @if($setting->ielts_reg_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->ielts_reg_image)}}" alt="image">@endif
                                <input type="file" name="ielts_reg_image" id="ielts_reg_image" value="{{$setting->ielts_reg_image}}" class="form-control mt-2">
                            </div>
                            <div class="col-md-6 mb-5">
                                <label for="placement_image">placement Image [ 4*1 ]</label>
                                @if($setting->placement_image)<img height="150px" width="100%" src="{{asset('images/settings/'.$setting->placement_image)}}" alt="image">@endif
                                <input type="file" name="placement_image" id="placement_image" value="{{$setting->placement_image}}" class="form-control mt-2">
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

@endsection
