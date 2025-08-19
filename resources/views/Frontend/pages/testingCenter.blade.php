@extends('Frontend.frontApp')

@section('content')

    <section id="whyLexicon">
      <div class="container py-5">


        <div class="row align-items-center mt-5">
          <div class="col-md-12">
            <h3 class="lexicon-heading text-center text-md-start">SEE THE OPTION FOR YOUR EXAM</h3>
          </div>
        </div>

        <div class="row align-items-center mt-5">
          <div class="col-md-4 mb-4">
            <div class="course-box p-4">
              <svg width="50" height="50" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22 30H26M29 44L28.368 43.162C26.948 41.274 26.594 38.388 27.494 36M19 44L19.632 43.162C21.052 41.274 21.406 38.388 20.506 36M14 44H34M28 4H20C13.44 4 10.162 4 7.838 5.628C6.97808 6.23014 6.23014 6.97808 5.628 7.838C4 10.16 4 13.44 4 20C4 26.56 4 29.838 5.628 32.162C6.23014 33.0219 6.97808 33.7699 7.838 34.372C10.16 36 13.44 36 20 36H28C34.56 36 37.838 36 40.162 34.372C41.0219 33.7699 41.7699 33.0219 42.372 32.162C44 29.84 44 26.56 44 20C44 13.44 44 10.162 42.372 7.838C41.7699 6.97808 41.0219 6.23014 40.162 5.628C37.84 4 34.56 4 28 4Z" stroke="#E51D27" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <a ><h4 class="lexicon-heading my-3">IELTS on Computer</h4></a>
              <div class="text-start mt-5 d-flex justify-content-between align-items-center">
                <a href="#" class="btn btn-primary-2" data-bs-toggle="modal" data-bs-target="#IELTS_on_Computer">BOOK TEST NOW</a>
                
                @foreach($computers as $computer)
                {{$computer->date}}<br>
                @endforeach
                
              </div>

            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="course-box p-4">
              <svg width="50" height="50" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M54.2168 15.0189L29.9112 3.5383C29.6767 3.42884 29.4205 3.37357 29.1617 3.37658C28.9028 3.3796 28.648 3.44082 28.4161 3.55571C28.1841 3.6706 27.981 3.83622 27.8218 4.04028C27.6625 4.24435 27.5513 4.48163 27.4962 4.73455C27.4906 4.7533 25.5462 13.7908 22.6587 22.8002C21.6743 25.8883 20.5718 28.9408 19.4206 31.622L22.5425 33.0958C26.2925 24.392 29.2625 12.377 30.38 7.57142L51.5056 17.537C50.8568 20.3739 49.1937 27.3302 46.9681 34.2752C45.53 38.7752 43.8462 43.2695 42.1212 46.5227C40.4525 49.8789 38.45 51.5289 38.0018 51.3077C35.3393 51.3639 33.4681 48.9414 32.2081 45.8364C31.6781 44.4704 31.266 43.0615 30.9762 41.6252C30.7362 40.4664 30.6631 39.7389 30.6575 39.7389C30.6287 39.4455 30.5235 39.1647 30.3525 38.9245C30.1814 38.6844 29.9504 38.4933 29.6825 38.3702L5.38247 26.8952C5.1058 26.7638 4.79914 26.7084 4.494 26.7348C4.18887 26.7612 3.89625 26.8683 3.64622 27.0452C3.39732 27.2229 3.20017 27.4637 3.07497 27.7428C2.94976 28.0218 2.90102 28.3292 2.93372 28.6333C2.94872 28.7195 3.29934 32.102 4.70934 35.6402C5.68809 38.1152 7.34746 40.9239 10.0456 42.3433L34.3381 53.837L34.3493 53.8145C35.4031 54.3677 36.5993 54.7277 38 54.7445C41.3693 54.5252 43.2068 51.6171 45.1587 48.1352C50.7837 37.4664 55.1337 17.0102 55.1675 16.9352C55.2507 16.5565 55.2025 16.1607 55.0307 15.813C54.8589 15.4654 54.5739 15.1866 54.2225 15.0227L54.2168 15.0189Z" fill="#E51D27"/>
              </svg>
              <a ><h4 class="lexicon-heading my-3">IELTS's on Paper</h4></a>
              <div class="text-start mt-5 d-flex justify-content-between align-items-center">
                <a href="#" class="btn btn-primary-2" data-bs-toggle="modal" data-bs-target="#IELTS_on_Paper">BOOK TEST NOW</a>
                
                @foreach($papers as $paper)
                {{$paper->date}}<br>
                @endforeach
                
              </div>

            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="course-box p-4">
              <svg width="50" height="50" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.5 20.625C27.5 20.2603 27.6449 19.9106 27.9027 19.6527C28.1606 19.3949 28.5103 19.25 28.875 19.25H39.875C40.2397 19.25 40.5894 19.3949 40.8473 19.6527C41.1051 19.9106 41.25 20.2603 41.25 20.625C41.25 20.9897 41.1051 21.3394 40.8473 21.5973C40.5894 21.8551 40.2397 22 39.875 22H28.875C28.5103 22 28.1606 21.8551 27.9027 21.5973C27.6449 21.3394 27.5 20.9897 27.5 20.625ZM28.875 24.75C28.5103 24.75 28.1606 24.8949 27.9027 25.1527C27.6449 25.4106 27.5 25.7603 27.5 26.125C27.5 26.4897 27.6449 26.8394 27.9027 27.0973C28.1606 27.3551 28.5103 27.5 28.875 27.5H39.875C40.2397 27.5 40.5894 27.3551 40.8473 27.0973C41.1051 26.8394 41.25 26.4897 41.25 26.125C41.25 25.7603 41.1051 25.4106 40.8473 25.1527C40.5894 24.8949 40.2397 24.75 39.875 24.75H28.875ZM27.5 38.5C27.5 38.1353 27.6449 37.7856 27.9027 37.5277C28.1606 37.2699 28.5103 37.125 28.875 37.125H39.875C40.2397 37.125 40.5894 37.2699 40.8473 37.5277C41.1051 37.7856 41.25 38.1353 41.25 38.5C41.25 38.8647 41.1051 39.2144 40.8473 39.4723C40.5894 39.7301 40.2397 39.875 39.875 39.875H28.875C28.5103 39.875 28.1606 39.7301 27.9027 39.4723C27.6449 39.2144 27.5 38.8647 27.5 38.5ZM28.875 42.625C28.5103 42.625 28.1606 42.7699 27.9027 43.0277C27.6449 43.2856 27.5 43.6353 27.5 44C27.5 44.3647 27.6449 44.7144 27.9027 44.9723C28.1606 45.2301 28.5103 45.375 28.875 45.375H39.875C40.2397 45.375 40.5894 45.2301 40.8473 44.9723C41.1051 44.7144 41.25 44.3647 41.25 44C41.25 43.6353 41.1051 43.2856 40.8473 43.0277C40.5894 42.7699 40.2397 42.625 39.875 42.625H28.875Z" fill="#E51D27"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.75 37.125C13.75 36.7603 13.8949 36.4106 14.1527 36.1527C14.4106 35.8949 14.7603 35.75 15.125 35.75H22C22.3647 35.75 22.7144 35.8949 22.9723 36.1527C23.2301 36.4106 23.375 36.7603 23.375 37.125V44C23.375 44.3647 23.2301 44.7144 22.9723 44.9723C22.7144 45.2301 22.3647 45.375 22 45.375H15.125C14.7603 45.375 14.4106 45.2301 14.1527 44.9723C13.8949 44.7144 13.75 44.3647 13.75 44V37.125ZM16.5 38.5V42.625H20.625V38.5H16.5Z" fill="#E51D27"/>
              <path d="M24.3478 21.5973C24.5983 21.338 24.7369 20.9907 24.7337 20.6301C24.7306 20.2696 24.586 19.9248 24.3311 19.6698C24.0761 19.4149 23.7313 19.2703 23.3707 19.2671C23.0102 19.264 22.6629 19.4026 22.4036 19.6531L17.8757 24.1809L16.0978 22.4031C15.8385 22.1526 15.4912 22.014 15.1306 22.0171C14.7701 22.0203 14.4252 22.1649 14.1703 22.4198C13.9154 22.6748 13.7708 23.0196 13.7676 23.3801C13.7645 23.7407 13.9031 24.088 14.1536 24.3473L17.8757 28.0694L24.3478 21.5973Z" fill="#E51D27"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.75 8.25C12.2913 8.25 10.8924 8.82946 9.86091 9.86091C8.82946 10.8924 8.25 12.2913 8.25 13.75V52.25C8.25 53.7087 8.82946 55.1076 9.86091 56.1391C10.8924 57.1705 12.2913 57.75 13.75 57.75H41.25C42.7087 57.75 44.1076 57.1705 45.1391 56.1391C46.1705 55.1076 46.75 53.7087 46.75 52.25V13.75C46.75 12.2913 46.1705 10.8924 45.1391 9.86091C44.1076 8.82946 42.7087 8.25 41.25 8.25H13.75ZM11 13.75C11 13.0207 11.2897 12.3212 11.8055 11.8055C12.3212 11.2897 13.0207 11 13.75 11H41.25C41.9793 11 42.6788 11.2897 43.1945 11.8055C43.7103 12.3212 44 13.0207 44 13.75V52.25C44 52.9793 43.7103 53.6788 43.1945 54.1945C42.6788 54.7103 41.9793 55 41.25 55H13.75C13.0207 55 12.3212 54.7103 11.8055 54.1945C11.2897 53.6788 11 52.9793 11 52.25V13.75ZM49.5 22C49.5 20.906 49.9346 19.8568 50.7082 19.0832C51.4818 18.3096 52.531 17.875 53.625 17.875C54.719 17.875 55.7682 18.3096 56.5418 19.0832C57.3154 19.8568 57.75 20.906 57.75 22V49.9166L53.625 56.1041L49.5 49.9166V22ZM53.625 20.625C53.2603 20.625 52.9106 20.7699 52.6527 21.0277C52.3949 21.2856 52.25 21.6353 52.25 22V24.75H55V22C55 21.6353 54.8551 21.2856 54.5973 21.0277C54.3394 20.7699 53.9897 20.625 53.625 20.625ZM53.625 51.1459L52.25 49.0834V27.5H55V49.0834L53.625 51.1459Z" fill="#E51D27"/>
              </svg>
              <a ><h4 class="lexicon-heading my-3">A/0 Exam</h4></a>
              <div class="text-start mt-5 d-flex justify-content-between align-items-center">
                <a href="#" class="btn btn-primary-2" data-bs-toggle="modal" data-bs-target="#A_0_Exam">BOOK TEST NOW</a>
                
                @foreach($aos as $ao)
                {{$ao->date}}<br>
                @endforeach
                
              </div>

            </div>
          </div>
          
        </div>


        <!-- IELTS_on_Computer -->
        <div class="modal fade" id="IELTS_on_Computer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{url('type-store')}}" method="post" enctype="multipart/form-data" > @csrf
              <input type="hidden" name="type" value="IELTS on Computer">
              <div class="modal-body">
                <div class="row">
                    
                    <div class="col-12 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control mt-2" required>
                    </div>
                    
                </div>
              </div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>         
        <!-- IELTS_on_Paper -->
        <div class="modal fade" id="IELTS_on_Paper" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{url('type-store')}}" method="post" enctype="multipart/form-data" > @csrf
              <input type="hidden" name="type" value="IELTS on Paper">
              <div class="modal-body">
                <div class="row">
                    
                    <div class="col-12 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control mt-2" required>
                    </div>
                    
                </div>
              </div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>           
        <!-- A_0_Exam -->
        <div class="modal fade" id="A_0_Exam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{url('type-store')}}" method="post" enctype="multipart/form-data" > @csrf
              <input type="hidden" name="type" value="A/O Exam">
              <div class="modal-body">
                <div class="row">
                    
                    <div class="col-12 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control mt-2" required>
                    </div>
                    
                </div>
              </div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>
           

      </div>
    </section>

@endsection