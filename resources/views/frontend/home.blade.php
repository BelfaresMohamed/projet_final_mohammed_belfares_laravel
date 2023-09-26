@extends('layouts.frontend')
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        @foreach ($produits->random(5) as $produit)
                            <div class="single_banner_slider">
                                <div class="row">
                                    <div class="col-lg-5 col-md-8">
                                        <div class="banner_text">
                                            <div class="banner_text_iner">
                                                <h1>{{ $produit->titre }}</h1>
                                                <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                    suspendisse ultrices gravida. Risus commodo viverra</p>
                                                    <a class="bg-danger text-light px-4 py-3 border border-raduis-2" href={{route('show.produit',$produit->id)}}  >buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner_img d-none d-lg-block">
                                        <img src="{{ asset('storage/imgs/' . $produit->image) }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                @foreach ($fourProduits as $fourPrd)
                    <div class="col-lg-6 col-sm-6">
                        <div class="single_feature_post_text">
                            <p>{{ $fourPrd->titre }}</p>
                            <h3>{{ $fourPrd->prix }}</h3>
                            <a href={{route('show.produit',$fourPrd->id)}}  class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                            <img src={{ asset('storage/imgs/' . $fourPrd->image) }} class="w-100 h-100 object-fit-cover"
                                alt="">
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>awesome <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                @foreach ($produits as $produit)

                                @if ($produit->stock<3)
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src={{ asset('storage/imgs/' . $produit->image) }}
                                            class="w-100 h-100 object-fit-cover" alt="">
                                        <div class="single_product_text">
                                            <h4>{{ $produit->titre }}</h4>
                                            <h3>{{ $produit->prix }}</h3>
                                            <h3>Stock :{{ $produit->stock }}</h3>
                                            <a href={{route('show.produit',$produit->id)}}       class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                        
                                    </div>
                                </div>
                                    
                                @endif

                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    @foreach ($lastproduit as $lastpro)
                           <div class="offer_img">
                            <img src={{ asset('storage/imgs/' . $lastpro->image) }} class="w-100 h-100 object-fit-cover" alt="">
                        </div>
                    @endforeach

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                           <form action={{route('mail.store')}} method="POST">
                            @csrf
                            <div class="d-flex">
                                <input type="text" class="form-control" placeholder="enter email address" name="email"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <button type="submit" class="input-group-text btn_2" id="basic-addon2">
                                    book now
                                </button>
                            </div>

                            </div>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->


    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <div class="input-group ">
                            <form action={{route('mail.store')}} method="POST">
                                @csrf
                                <input  type="text" class="form-control" name="email" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                            
                           
                            <button type="submit" class="input-group-text btn_2" id="basic-addon2">
                                subscribe
                            </button>                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->
@endsection
