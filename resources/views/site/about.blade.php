
@extends('site.layouts.master')
@section('title')
Viganella
@endsection
  <!----- Start Main Section ----->

  @section('content')

    <!-----  Start Product part  ----->

    <section id="about-page" class="text-black py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p class="fs-1">
                About Viganella
              </p>
              <p>
                  {{$settings->title ? $settings->title : ''}}
              </p>
              <p class="fs-1">
                Our Vision
              </p>
              <p class="w-75">
                {{$settings->vision ? $settings->vision : ''}}
              </p>
              <p class="fs-2">
                How do you want to contact us?
              </p>
              <ul class="list-unstyled">
                <li>
                    <span class="uk-text-bold">
                      E-mail:
                    </span>
                    <p class="fs-6">
                        {{$settings->email ? $settings->email : ''}}
                    </p>
                </li>
                <li>
                    <span class="uk-text-bold">
                      phone Number:
                    </span>
                    <p class="fs-6">
                        {{$settings->phone ? $settings->phone : ''}}
                    </p>
                </li>
                <li>
                    <span class="uk-text-bold">
                      Location:
                    </span>
                    <p class="fs-6">
                        {{$settings->location ? $settings->location : ''}}<br> Cairo, Egypt.
                    </p>
                </li>
            </ul>
            </div>
          </div>
        </div>
      </section>

      <!-----  End Product part  ----->


@endsection
