@extends('layouts.appHome')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{asset('/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-12 d-flex align-items-center" >
                            <form action="#" class="request-form ftco-animate bg-primary" style="width:100%">
                                <h2>Make your trip</h2>
{{--                                <div class="form-group">--}}
{{--                                    <label for="" class="label">Pick-up location</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc"> </input>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label class='label' for="address_address">Pick-up location</label>
                                    <input type="text" id="address-input" name="address_address" class="form-control map-input" placeholder="City, Airport, Station, etc">
                                    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                                </div>
                                <div id="address-map-container" style="width:100%;height:400px; ">
                                    <div style="width: 100%; height: 100%" id="address-map"></div>
                                </div>
                                <div class="form-group">
                                    <label class='label' for="address_address">Drop-off location</label>
                                    <input type="text" id="address-input" name="address_address" class="form-control map-input" placeholder="City, Airport, Station, etc">
                                    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                                </div>
                                <div id="address-map-container" style="width:100%;height:400px; ">
                                    <div style="width: 100%; height: 100%" id="address-map"></div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up date</label>
                                        <input type="text" class="form-control" id="book_pick_date" placeholder="Date"> </input>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Drop-off date</label>
                                        <input type="text" class="form-control" id="book_off_date" placeholder="Date"> </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up time</label>
                                    <input type="text" class="form-control" id="time_pick" placeholder="Time"> </input>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4"> </input>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')
    @parent
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>
@stop
