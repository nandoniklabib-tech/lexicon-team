@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <div class="row">
          <div class="col-12">
            <div class="page-banner page-banner-curve" style="background-image: url('{{asset("images/settings/".$setting->contact_image)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">CONTACT US</h3>
            </div>
          </div>
        </div>

        <div class="row mt-5 justify-content-between">
          <div class="col-md-5">
            <h3 class="lexicon-heading">Get in Touch with Us</h3>
            <form action="{{url('contact-store')}}" method="post"> @csrf
            <div class="row">

              <div class="col-md-12 mb-3">
                <label for="name">Name *</label>
                <input type="text" name="name" id="name" class="form-control mt-2 white-form-control" required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="phone">Phone *</label>
                <input type="text" name="phone" id="phone" class="form-control mt-2 white-form-control" required>
              </div>
              <div class="col-md-12 mb-3">
                <label for="email">Your mail</label>
                <input type="email" name="email" id="email" class="form-control mt-2 white-form-control">
              </div>
              <div class="col-md-12 mb-0">
                <label for="message">Your Message</label>
                <textarea name="message" id="message" rows="5" cols="33" class="form-control mt-2 white-form-control"></textarea>
              </div>

              <div class="col-12 mt-4">
                <button type="submit" class="btn btn-primary-2 px-5 py-2">SUBMIT</button>
              </div>

            </div>
            </form>
            
            <div class="mt-5 card p-3 text-center">
            <h2 class="lexicon-heading mb-4">Emergency Contact</h2>
            <div>
            @if($setting->messenger)
            <a class="footer-social-link fs-2 pe-3 text-dark" href="https://m.me/{{$setting->messenger}}" target="_blank">
                <img class="social-img" src="{{asset("assets/img/Messenger.png")}}" alt="image">
            </a>
            @endif
            @if($setting->whatsapp)
            <a class="footer-social-link fs-2 text-dark" href="https://wa.me/88{{$setting->whatsapp}}" target="_blank">
                <img class="social-img" src="{{asset("assets/img/Whatsapp.png")}}" alt="image">
            </a>
            @endif
            </div>
            </div>
            
          </div>

          <div class="col-md-5 mt-5 mt-md-0 text-center text-md-start">
              
            <h2 class="lexicon-heading">Office Hours</h2>

            <div class="row fs-5">
                <div class="col-4">Monday</div>
                <div class="col-4 text-end">10:00 AM</div>
                <div class="col-4">- 7:00 PM</div>
            </div>
            <div class="row fs-5">
                <div class="col-4">Tuesday</div>
                <div class="col-4 text-end">10:00 AM</div>
                <div class="col-4">- 7:00 PM</div>
            </div>
            <div class="row fs-5">
                <div class="col-4">Wednesday</div>
                <div class="col-4 text-end">10:00 AM</div>
                <div class="col-4">- 7:00 PM</div>
            </div>
            <div class="row fs-5">
                <div class="col-4">Thursday</div>
                <div class="col-4 text-end">10:00 AM</div>
                <div class="col-4">- 7:00 PM</div>
            </div>
            <div class="row fs-5">
                <div class="col-4">Friday</div>
                <div class="col-4 text-end">10:00 AM</div>
                <div class="col-4">- 2:00 PM</div>
            </div>
            <div class="row fs-5">
                <div class="col-4">Saturday</div>
                <div class="col-4 text-end">10:00 AM</div>
                <div class="col-4">- 7:00 PM</div>
            </div>
            <div class="row fs-5">
                <div class="col-4">Sunday</div>
                <div class="col-4 text-end">10:00 AM</div>
                <div class="col-4">- 7:00 PM</div>
            </div>
            
            <h2 class="lexicon-heading mt-5">Cell Phone Number</h2>
            <h5>
              @if($setting->mobile1)<p><a href="tel:{{$setting->mobile1}}" class="text-dark">{{$setting->mobile1}}</a></p> @endif
              @if($setting->mobile2)<p><a href="tel:{{$setting->mobile2}}" class="text-dark">{{$setting->mobile2}}</a></p> @endif
              @if($setting->mobile3)<p><a href="tel:{{$setting->mobile3}}" class="text-dark">{{$setting->mobile3}}</a></p> @endif
              @if($setting->mobile4)<p><a href="tel:{{$setting->mobile4}}" class="text-dark">{{$setting->mobile4}}</a></p> @endif
            </h5>

            <h2 class="lexicon-heading mt-5">Address</h2>
            <a class="text-dark fs-5" target="_blank" href="https://maps.app.goo.gl/vEXQmyLrhG7uSEvQ9">{{$setting->address}}</a>
            
            
            <!--<iframe class="mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.3722537605895!2d89.54864207369565!3d22.825713223648975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8fe2d3f61d11%3A0x3b40dd947f43df01!2sLexicon%20-%20British%20Council%20IELTS%20Test%20Center!5e0!3m2!1sen!2sbd!4v1742118797297!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->

            <iframe class="mt-5" width="100%" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.3722537605895!2d89.54864207369565!3d22.825713223648975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8fe2d3f61d11%3A0x3b40dd947f43df01!2sLexicon%20-%20British%20Council%20IELTS%20Test%20Center!5e0!3m2!1sen!2sbd!4v1742118967132!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            <!--<h2 class="lexicon-heading mt-5">Whatsapp</h2>-->
            <!--<h5>+8801913 91 94 70 (Text Only)</h5>-->

            <!--<h5>You can chat with us from 10.00 am to 8.00 pm (Saturday to Thursday)</h5>-->

          </div>

        </div>
        
      </div>
    </section>
 
@endsection