@extends('layouts.app')
@section('content')
    <!--Start of landing page Main-img And Main Name Of The Web-->
    <!-- As a heading -->
    <div class="container">
        <div class="row">
          <div class="main-text col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6">
            <h1>Repo</h1>
            <p>We'll make your startup stronger</p>
            <div class="app-discrept-one">
              <p>
                you can also download our application to have the best experience
                and the benefits of our project.
              </p>
              <a href=""><img src="{{ asset('frontend/img/Group 363.svg') }}" alt="" /></a>
            </div>
          </div>
          <div class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6">
            <img class="main-img" src="{{ asset('frontend/img/Group 946.svg') }}" alt="" />
            <div class="app-discrept-two">
              <p>
                you can also download our application to have the best experience
                and the benefits of our project.
              </p>
              <a href=""><img src="{{ asset('frontend/img/Group 363.svg') }}" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
      <!--End of landing page Main-img And Main Name Of The Web-->
      <!-- Start of featuers section-->
      <h2 class="featuers">Featuers</h2>
      <div class="container">
        <div class="featuers-container">
          <div class="card-featuers">
            <img class="featuers-img" src="{{ asset('frontend/img/Group 959.svg') }}" alt="" />
            <div class="featuers-text">Discuss and ask in our forum</div>
          </div>
          <div class="card-featuers">
            <img class="featuers-img" src="{{ asset('frontend/img/Group 63.svg') }}" alt="" />
            <div class="featuers-text">Tutorials for every subject</div>
          </div>
          <div class="card-featuers">
            <img class="featuers-img" src="{{ asset('frontend/img/Group 62.svg') }}" alt="" />
            <div class="featuers-text">Lecture's of all stages in PDF</div>
          </div>
          <div class="card-featuers">
            <img class="featuers-img" src="{{ asset('frontend/img/Group 67.svg') }}" alt="" />
            <div class="featuers-text">Navigate and browse easily</div>
          </div>
          <div class="card-featuers">
            <img class="featuers-img" src="{{ asset('frontend/img/Group 66.svg') }}" alt="" />
            <div class="featuers-text">See project of our students</div>
          </div>
          <div class="card-featuers">
            <img class="featuers-img" src="{{ asset('frontend/img/Group 65.svg') }}" alt="" />
            <div class="featuers-text">Keep in touch with tech</div>
          </div>
        </div>
      </div>
      <!-- End of featuers section-->
      <!-- Start of sections -->
      <!-- **************** -->
      <!-- Start of section one -->
      <div class="back-ground-one">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-aligin">
              <hr />
              <span>Quick start</span>
              <h2>LECTURES FOR ALL SUBJECTS</h2>
              <p class="p-section">
                You wil be able to browse all lectures for every subject in PDF
                and downloaded for your own, so that make the way essay on you to
                focus on your study and not bothering by looking on your lectures.
              </p>
              <a href="./deparrtment/department.html" class="btn btn-w"
                >Get Start</a
              >
            </div>
            <div
              class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6 img-aligin-one"
            >
              <img class="img-fluid" src="{{ asset('frontend/img/Group 303.svg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- End of section one -->
      <!-- **************** -->
      <!-- Start of section four -->
      <div class="back-ground-four">
        <div class="container">
          <div class="row">
            <div
              class="
                col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6
                text-aligin
                order-2
              "
            >
              <hr />
              <span>Quick start</span>
              <h2>FILL YOUR CURIOSITY</h2>
              <p class="p-section">
                Ask and discuss with your colleagues or professors. Listen to
                different opinions to fill your curiosity and make things clear
                Which will help you avoid many mistakes that you can make during
                your trip
              </p>
              <a href="./forum/fourm1.html" class="btn btn-w">Get Start</a>
            </div>
            <div
              class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6 img-aligin-two"
            >
              <img class="img-fluid resize" src="{{ asset('frontend/img/blog.svg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- End of section four -->
      <!-- **************** -->
      <!-- Start of section two -->
      <div class="back-ground-two">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6 text-aligin">
              <hr />
              <span>Quick start</span>
              <h2>BEST POSTS & ARTICLE</h2>
              <p class="p-section">
                we pick for you the best free course available that's will help
                you to make your startup stronger and give clear idea about what
                you will learn and what is the benefit of these subjects.
              </p>
              <a href="./blog/blog.html" class="btn btn-w">Get Start</a>
            </div>
            <div
              class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6 img-aligin-one"
            >
              <img class="img-fluid" src="{{ asset('frontend/img/Group 859.svg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- End of section two -->
      <!-- **************** -->
      <!-- Start of section three -->
      <div class="back-ground-three">
        <div class="container">
          <div class="row">
            <div
              class="
                col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6
                text-aligin
                order-2
              "
            >
              <hr />
              <span>Quick start</span>
              <h2>INSPIRATIONS FROM US</h2>
              <p class="p-section">
                In our website and phone application you can easily access to se
                the projects of our students and get inspired from them and how
                they put the best of what the can do in these projects.
              </p>
              <a href="./projects/project.html" class="btn btn-w">Get Start</a>
            </div>
            <div
              class="col-12 col-sm-10 col-md-6 col-lg-6 col-xl-6 img-aligin-two"
            >
              <img
                class="img-fluid resize"
                src="{{ asset('frontend/img/Group 359.svg') }}"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <!-- End of section three -->
@endsection
