@extends('frontend.layouts.master')

@section('body-class')rest-page
@endsection
@section('content')
    {{--    {{dd($store['products']->groupBy('category_id'))}}--}}


    <div class="main-content" id="main">
        <div>
            <div id="group-banner"></div>

            <div class="re-c has-ds">
                <div class="cover-bg"
                     style="background-image: url({{asset('/storage/' .$store['coverImage'])}});">
                    <div class="cover-color transition-all fade" style=""></div>
                    <div class="wrapper">
                    </div>
                </div>
                <div class="re-d">
                    <div class="wrapper clearfix">
                        <figure class="logo-holder">
                            <img src="{{asset('/storage/'.$store['logo'])}}"
                                 data-src="https://static.delino.com/data/logo/co1nr2nq.ib2_180x180.png"
                                 class=" lazyloaded">
                        </figure>
                        <aside>
                            <div class="row top-row">
                                <h2 class="rest-title">{{$store['title']}}

                                </h2>

                            </div>
                            <div class="row bottom-row">
                                <div class="mini-info">
                                    <div>{{$zones[$store['zone_id']]}}</div>
                                    <!--<div class="visible-sm visible-md visible-lg"><i class="fo fo-stopwatch"></i> میانگین زمان ارسال از 20 تا 35 دقیقه</div>-->
                                </div>
                                <footer>


                                </footer>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>


            <div class="re-m-h">
                <div class="wrapper full-style">
                    <div class="right-side-holder">
                        <div class="food-menu-box white-box clearfix">
                            {{--<div class="f-m-t" id="food-menu-header">--}}
                            {{--<div class="c-l-h">--}}
                            {{--<div class="c-l-w" id="category-region">--}}
                            {{--<div class="c-l owl-carousel owl-rtl owl-loaded owl-drag">--}}
                            {{--<div class="owl-stage-outer">--}}
                            {{--<div class="owl-stage"--}}
                            {{--style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 961px;">--}}
                            {{--<div class="owl-item active" style="width: 112px;">--}}
                            {{--<div class="i-w selected"><span title="همه غذاها">--}}

                            {{--<b>همه کالاها</b>--}}
                            {{--</span></div>--}}
                            {{--</div>--}}
                            {{--@foreach($categories as $category)--}}
                            {{--<div class="owl-item active" style="width: 112px;">--}}
                            {{--<div class="i-w"><span title="{{$category['title']}}">--}}

                            {{--<b>{{$category['title']}}</b>--}}
                            {{--</span></div>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="owl-nav">--}}
                            {{--<div class="owl-prev disabled"><i class="fo fo-angle-right"></i></div>--}}
                            {{--<div class="owl-next"><i class="fo fo-angle-left"></i></div>--}}
                            {{--</div>--}}
                            {{--<div class="owl-dots disabled"></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="h-srch">--}}
                            {{--<section>--}}
                            {{--<h2><i class="fo fo-search"></i>نتایج جستجو برای <b>"false"</b></h2>--}}
                            {{--<div>--}}
                            {{--<button class="anc-c-s btn-dark btn-small" id="show-all-menu">نمایش کامل--}}
                            {{--منو--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            {{--</section>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div id="menu-region" class="food-menu clearfix has-pic">
                                <div>
                                    @foreach($categories as $category)
                                        <section>
                                            <h2><i class="ic-c c-7"></i>{{$category['title']}}</h2>

                                            <div class="food-list" id="food-list">
                                                <div>
                                                    <div class="food-item">
                                                        @foreach($store['products'] as $product)
                                                            @if($product['category_id'] == $category['id'])
                                                                <section>
                                                                    <div class="qty-badge transition-all"><span></span>
                                                                    </div>

                                                                    <figure class="pic-include ">
                                                                        <img data-action="zoom"
                                                                             src="{{asset('/storage/' . $product['photo'])}}"
                                                                             class=" lazyloaded">
                                                                    </figure>

                                                                    <div class="details-holder  has-discount"
                                                                         data-pid="{{$product['id']}}"
                                                                         data-pname="{{$product['title']}}"
                                                                         data-pprice="{{$product['price']}}">
                                                                        <header class="">
                                                                            <h3>{{$product['title']}}</h3>
                                                                            <span><b>{{$product['price']}}
                                                                                    تومان</b></span>
                                                                        </header>


                                                                        @if($product['inStock'] > 0)
                                                                            @if(!Encore\Admin\Facades\Admin::user())
                                                                                <a href="/admin/auth/login">
                                                                                    <button title="افزودن به سبد"
                                                                                            class="btn-add"><i
                                                                                                class="fa fa-plus"></i>
                                                                                    </button>
                                                                                </a>
                                                                                <?php
                                                                                request()->session()->push('referer', request()->fullUrl());
                                                                                ?>
                                                                            @else
                                                                                <button title="افزودن به سبد"
                                                                                        class="btn-add logged-in"><i
                                                                                            class="fa fa-plus"></i>
                                                                                </button>
                                                                            @endif

                                                                        @else
                                                                            <button style="color: #e0e0e0; border-color: #e0e0e0;"
                                                                                    title="اتمام موجودی"
                                                                                    class="btn-add disabled"><i
                                                                                        class="fa fa-plus"></i></button>
                                                                        @endif


                                                                        <div class="food-type">

                                                                        </div>

                                                                        <div class="ingredient">{{$product['description']}}</div>
                                                                    </div>
                                                                </section>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @endforeach


                                </div>
                            </div>
                            <div class="loading-holder">
                                <div class="loader"></div>
                            </div>
                        </div>
                        <div class="rest-info-box white-box clearfix" id="info-region">
                            <div class="n-m-m">
                                <section>

                                    <div class="half section-whrs">
                                        <h4>بازه سرویس دهی </h4>
                                        <div class="today-whrs">
                                            <ul>
                                                <!-- class="col2" -->

                                                @if($store['saturday'])
                                                    <li>
                                                        <div>
                                                            <b>شنبه</b>
                                                            {{--                                                            <span>{{$store['openingHour']}} تا {{$store['closingHour']}}</span>--}}
                                                        </div>
                                                    </li>
                                                @endif
                                                @if($store['sunday'])
                                                    <li>
                                                        <div>
                                                            <b>یکشنبه</b>
                                                            {{--                                                            <span>{{$store['openingHour']}} تا {{$store['closingHour']}}</span>--}}
                                                        </div>
                                                    </li>
                                                @endif
                                                @if($store['monday'])
                                                    <li>
                                                        <div>
                                                            <b>دوشنبه</b>
                                                            {{--                                                            <span>{{$store['openingHour']}} تا {{$store['closingHour']}}</span>--}}
                                                        </div>
                                                    </li>
                                                @endif
                                                @if($store['tuesday'])
                                                    <li>
                                                        <div>
                                                            <b>سه شنبه</b>
                                                            {{--                                                            <span>{{$store['openingHour']}} تا {{$store['closingHour']}}</span>--}}
                                                        </div>
                                                    </li>
                                                @endif
                                                @if($store['wednesday'])
                                                    <li>
                                                        <div>
                                                            <b>چهارشنبه</b>
                                                            {{--                                                            <span>{{$store['openingHour']}} تا {{$store['closingHour']}}</span>--}}
                                                        </div>
                                                    </li>
                                                @endif
                                                @if($store['thursday'])
                                                    <li>
                                                        <div>
                                                            <b>پنجشنبه</b>
                                                            {{--<span>{{$store['openingHour']}} تا {{$store['closingHour']}}</span>--}}
                                                        </div>
                                                    </li>
                                                @endif
                                                @if($store['friday'])
                                                    <li>
                                                        <div>
                                                            <b>جمعه</b>
                                                            {{--<span>{{$store['openingHour']}} تا {{$store['closingHour']}}</span>--}}
                                                        </div>
                                                    </li>
                                                @endif


                                            </ul>
                                            <span> زمان کاری: {{$store['openingHour']}}
                                                تا {{$store['closingHour']}}</span>

                                        </div>


                                    </div>

                                    <div class="half section-address">
                                        <h4>آدرس</h4>
                                        <header>{{$store['address']}}
                                        </header>
                                        {{--<div class="map-holder">--}}
                                        {{--<div id="map"--}}
                                        {{--class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-touch-zoom"--}}
                                        {{--tabindex="0" style="position: relative;">--}}
                                        {{--<div class="leaflet-pane leaflet-map-pane"--}}
                                        {{--style="transform: translate3d(0px, 0px, 0px);">--}}
                                        {{--<div class="leaflet-pane leaflet-tile-pane">--}}
                                        {{--<div class="leaflet-layer " style="z-index: 1; opacity: 1;">--}}
                                        {{--<div class="leaflet-tile-container leaflet-zoom-animated"--}}
                                        {{--style="z-index: 24; transform: translate3d(0px, 0px, 0px) scale(1);">--}}
                                        {{--<div class="leaflet-tile leaflet-tile-loaded"--}}
                                        {{--data-pending="0"--}}
                                        {{--style="width: 256px; height: 256px; transform: translate3d(-93px, -38px, 0px); opacity: 1;">--}}
                                        {{--<img src="./MrPeach_files/vt" draggable="false"--}}
                                        {{--alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: visible;">--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-tile leaflet-tile-loaded"--}}
                                        {{--data-pending="0"--}}
                                        {{--style="width: 256px; height: 256px; transform: translate3d(163px, -38px, 0px); opacity: 1;">--}}
                                        {{--<img src="./MrPeach_files/vt(1)" draggable="false"--}}
                                        {{--alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: visible;">--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-tile leaflet-tile-loaded"--}}
                                        {{--data-pending="0"--}}
                                        {{--style="width: 256px; height: 256px; transform: translate3d(-93px, 218px, 0px); opacity: 1;">--}}
                                        {{--<img src="./MrPeach_files/vt(2)" draggable="false"--}}
                                        {{--alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: visible;">--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-tile leaflet-tile-loaded"--}}
                                        {{--data-pending="0"--}}
                                        {{--style="width: 256px; height: 256px; transform: translate3d(163px, 218px, 0px); opacity: 1;">--}}
                                        {{--<img src="./MrPeach_files/vt(3)" draggable="false"--}}
                                        {{--alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: visible;">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-pane leaflet-shadow-pane"><img--}}
                                        {{--src="./MrPeach_files/marker-shadow.png"--}}
                                        {{--class="leaflet-marker-shadow leaflet-zoom-animated"--}}
                                        {{--style="margin-left: -4px; margin-top: -32px; width: 50px; height: 37px; transform: translate3d(197px, 125px, 0px);">--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-pane leaflet-overlay-pane"></div>--}}
                                        {{--<div class="leaflet-pane leaflet-marker-pane"><img--}}
                                        {{--src="./MrPeach_files/rest-marker-icon.png"--}}
                                        {{--class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive"--}}
                                        {{--tabindex="0"--}}
                                        {{--style="margin-left: -15px; margin-top: -41px; width: 31px; height: 41px; transform: translate3d(197px, 125px, 0px); z-index: 125;">--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-pane leaflet-tooltip-pane"></div>--}}
                                        {{--<div class="leaflet-pane leaflet-popup-pane"></div>--}}
                                        {{--<div class="leaflet-proxy leaflet-zoom-animated"--}}
                                        {{--style="transform: translate3d(5.39011e+06px, 3.30205e+06px, 0px) scale(16384);"></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-control-container">--}}
                                        {{--<div class="leaflet-top leaflet-left">--}}
                                        {{--<div class="leaflet-control-zoom leaflet-bar leaflet-control"><a--}}
                                        {{--class="leaflet-control-zoom-in"--}}
                                        {{--href="https://www.delino.com/restaurant/atf-ferdos#"--}}
                                        {{--title="Zoom in">+</a><a--}}
                                        {{--class="leaflet-control-zoom-out"--}}
                                        {{--href="https://www.delino.com/restaurant/atf-ferdos#"--}}
                                        {{--title="Zoom out">-</a></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-top leaflet-right"></div>--}}
                                        {{--<div class="leaflet-bottom leaflet-left"--}}
                                        {{--style="margin-bottom: 20px;"></div>--}}
                                        {{--<div class="leaflet-bottom leaflet-right"--}}
                                        {{--style="margin-bottom: 20px;"></div>--}}
                                        {{--</div>--}}
                                        {{--<div class="leaflet-google-mutant leaflet-top leaflet-left"--}}
                                        {{--id="_MutantContainer_24"--}}
                                        {{--style="z-index: 800; pointer-events: none; width: 394px; height: 250px; overflow: hidden;">--}}
                                        {{--<div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: transparent;">--}}
                                        {{--<div class="gm-style"--}}
                                        {{--style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">--}}
                                        {{--<div tabindex="0"--}}
                                        {{--style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">--}}
                                        {{--<div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">--}}
                                        {{--<div aria-hidden="true"--}}
                                        {{--style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">--}}
                                        {{--<div style="width: 256px; height: 256px; position: absolute; left: -93px; top: -38px;"></div>--}}
                                        {{--<div style="width: 256px; height: 256px; position: absolute; left: -93px; top: 218px;"></div>--}}
                                        {{--<div style="width: 256px; height: 256px; position: absolute; left: 163px; top: -38px;"></div>--}}
                                        {{--<div style="width: 256px; height: 256px; position: absolute; left: 163px; top: 218px;"></div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>--}}
                                        {{--<div style="position: absolute; z-index: 0; left: 0px; top: 0px;">--}}
                                        {{--<div style="overflow: hidden;"></div>--}}
                                        {{--</div>--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">--}}
                                        {{--<div aria-hidden="true"--}}
                                        {{--style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">--}}
                                        {{--<div style="position: absolute; left: -93px; top: 218px; transition: opacity 200ms ease-out;">--}}
                                        {{--<img src="./MrPeach_files/vt(2)"--}}
                                        {{--draggable="false" alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: hidden;">--}}
                                        {{--</div>--}}
                                        {{--<div style="position: absolute; left: 163px; top: 218px; transition: opacity 200ms ease-out;">--}}
                                        {{--<img src="./MrPeach_files/vt(3)"--}}
                                        {{--draggable="false" alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: hidden;">--}}
                                        {{--</div>--}}
                                        {{--<div style="position: absolute; left: -93px; top: -38px; transition: opacity 200ms ease-out;">--}}
                                        {{--<img src="./MrPeach_files/vt"--}}
                                        {{--draggable="false" alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: hidden;">--}}
                                        {{--</div>--}}
                                        {{--<div style="position: absolute; left: 163px; top: -38px; transition: opacity 200ms ease-out;">--}}
                                        {{--<img src="./MrPeach_files/vt(1)"--}}
                                        {{--draggable="false" alt=""--}}
                                        {{--style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; position: absolute; visibility: hidden;">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="gm-style-pbc"--}}
                                        {{--style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">--}}
                                        {{--<p class="gm-style-pbt"></p></div>--}}
                                        {{--<div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">--}}
                                        {{--<div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>--}}
                                        {{--</div>--}}
                                        {{--<div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>--}}
                                        {{--<div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">--}}
                                        {{--<a target="_blank"--}}
                                        {{--href="https://maps.google.com/maps?ll=35.723016,51.318576&amp;z=15&amp;t=m&amp;hl=fa&amp;gl=US&amp;mapclient=apiv3"--}}
                                        {{--title="&rlm;کلیک کنید تا این ناحیه را روی نقشه&zwnj;های Google ببینید"--}}
                                        {{--style="position: static; overflow: visible; float: none; display: inline; pointer-events: auto;">--}}
                                        {{--<div style="width: 66px; height: 26px; cursor: pointer;">--}}
                                        {{--<img src="./MrPeach_files/google_white5.png"--}}
                                        {{--draggable="false"--}}
                                        {{--style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">--}}
                                        {{--</div>--}}
                                        {{--</a></div>--}}
                                        {{--<div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 47px; top: 35px;">--}}
                                        {{--<div style="padding: 0px 0px 10px; font-size: 16px;">--}}
                                        {{--داده&zwnj;های نقشه--}}
                                        {{--</div>--}}
                                        {{--<div style="font-size: 13px;">داده&zwnj;های نقشه ©2017--}}
                                        {{--Google--}}
                                        {{--</div>--}}
                                        {{--<div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; left: 12px; top: 12px; z-index: 10000; cursor: pointer;">--}}
                                        {{--<img src="./MrPeach_files/mapcnt6.png"--}}
                                        {{--draggable="false"--}}
                                        {{--style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="gmnoprint"--}}
                                        {{--style="z-index: 1000001; position: absolute; right: 135px; bottom: 0px; width: 120px;">--}}
                                        {{--<div draggable="false" class="gm-style-cc"--}}
                                        {{--style="user-select: none; height: 14px; line-height: 14px;">--}}
                                        {{--<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">--}}
                                        {{--<div style="width: 1px;"></div>--}}
                                        {{--<div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>--}}
                                        {{--</div>--}}
                                        {{--<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">--}}
                                        {{--<a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none; pointer-events: auto;">داده&zwnj;های--}}
                                        {{--نقشه</a><span style="">داده&zwnj;های نقشه ©2017 Google</span>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="gmnoscreen"--}}
                                        {{--style="position: absolute; right: 0px; bottom: 0px;">--}}
                                        {{--<div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">--}}
                                        {{--داده&zwnj;های نقشه ©2017 Google--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="gmnoprint gm-style-cc" draggable="false"--}}
                                        {{--style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 79px; bottom: 0px;">--}}
                                        {{--<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">--}}
                                        {{--<div style="width: 1px;"></div>--}}
                                        {{--<div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>--}}
                                        {{--</div>--}}
                                        {{--<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">--}}
                                        {{--<a href="https://www.google.com/intl/fa_US/help/terms_maps.html"--}}
                                        {{--target="_blank"--}}
                                        {{--style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68); pointer-events: auto;">شرایط--}}
                                        {{--استفاده</a></div>--}}
                                        {{--</div>--}}
                                        {{--<div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;">--}}
                                        {{--<img src="./MrPeach_files/sv9.png" draggable="false"--}}
                                        {{--class="gm-fullscreen-control"--}}
                                        {{--style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;">--}}
                                        {{--</div>--}}
                                        {{--<div draggable="false" class="gm-style-cc"--}}
                                        {{--style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">--}}
                                        {{--<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">--}}
                                        {{--<div style="width: 1px;"></div>--}}
                                        {{--<div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>--}}
                                        {{--</div>--}}
                                        {{--<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">--}}
                                        {{--<a target="_new"--}}
                                        {{--title="&rlm;گزارش خطا در نقشه راه یا تصاویر به Google"--}}
                                        {{--href="https://www.google.com/maps/@35.7230156,51.3185763,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"--}}
                                        {{--style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative; pointer-events: auto;">گزارش--}}
                                        {{--خطا در نقشه</a></div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    <div class="left-side-holder si-h readytomove" id="si-h">
                        <div class="cart-lightbox cart-close"></div>
                        <div class="side-section" id="cart-region"
                             style="width: 100%; position: absolute; top: 0px; right:20px; height: auto; bottom: auto;">
                            @if(!$cartProducts)
                                <div class="rest-cart empty has-discount">
                                    <header>
                                        <button class="anc-cl cart-close fo fo-cross visible-xs visible-sm"></button>
                                        <h3>
                                            سبد خرید <i>گروهی</i>
                                            <span class="visible-xs-i visible-sm-i" data-device="true"><b
                                                        class="cart-size">0</b></span>
                                        </h3>
                                        <div class="cart-quantity visible-md visible-lg">
                                            <i class="fo fo-cart"></i>
                                            <span class="cart-size round-full"></span>
                                        </div>
                                    </header>
                                    <div class="cart-holder-inner thin-scrollbar">
                                        <div class="cart-list-holder">
                                            <div id="cart-list">
                                                <div>
                                                    <section class="has-items">
                                                        <div class="user-cart-list ">
                                                            <div>
                                                                <div class="item">
                                                                    <button class="anc-rmv">×</button>
                                                                    <div class="item-holder">
                                                                        <aside>
                                                                            <h3>پیتزا مخصوص برگر استار
                                                                                <small>22,500 تومان</small>
                                                                            </h3>
                                                                        </aside>
                                                                        <div class="qty-holder">
                                                                            <div class="food-qty">
                                                                                <button class="action-button change-count button-plus fo fo-plus"
                                                                                        data-type="increase"></button>
                                                                                <label>1</label>
                                                                                <button class="action-button change-count button-minus fo fo-minus"
                                                                                        data-type="decrease"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="empty-text"><i class="fo fo-empty-bag"></i> <span>سبد خرید خالی است</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cart-bottom">
                                        <div class="coupon-row">
                                            <a href="https://www.delino.com/restaurant/atf-ferdos#"
                                               class="anc-r-cp">×</a>
                                            <label id="coupon-name"></label>
                                            <span class="coupon-price"></span>
                                        </div>

                                        <div class="cart-total">
                                            <label>هزینه کل<u class="tax-percentage"></u></label>
                                            <span><b id="total-price"></b><small
                                                        id="total-price-discount"></small></span>
                                        </div>


                                        <div class="button-holder">
                                            <button class="btn-default btn-checkout">
                                                <span>ادامه سفارش</span>
                                                <div class="loader white"></div>
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            @else
                                <div class="rest-cart has-discount">
                                    <header>
                                        <button class="anc-cl cart-close fo fo-cross visible-xs visible-sm"></button>
                                        <h3>
                                            سبد خرید <i>گروهی</i>
                                            <span class="visible-xs-i visible-sm-i" data-device="true"><b
                                                        class="cart-size"></b></span>
                                        </h3>
                                        <div class="cart-quantity visible-md visible-lg">
                                            <i class="fo fo-cart"></i>
                                            <span class="cart-size round-full">{{count($cartProducts)}}</span>
                                        </div>
                                    </header>
                                    <div class="cart-holder-inner thin-scrollbar">
                                        <div class="cart-list-holder">
                                            <div id="cart-list">
                                                <div>
                                                    <section class="has-items">
                                                        <div class="user-cart-list ">
                                                            <div>
                                                                @foreach($cartProducts as $id => $item)
                                                                <div class="item" id="product-{{$id}}">
                                                                    <button class="anc-rmv">×</button>
                                                                    <div class="item-holder">
                                                                        <aside>
                                                                            <h3>{{$item['product']['title']}}
                                                                                <small>{{$item['product']['price'] * $item['quantity']}} تومان</small>
                                                                            </h3>
                                                                        </aside>
                                                                        <div class="qty-holder">
                                                                            <div class="food-qty">
                                                                                <label>{{$item['quantity']}}</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="empty-text"><i class="fo fo-empty-bag"></i> <span>سبد خرید خالی است</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="cart-bottom">


                                        <div class="coupon-row">
                                            <a href="https://www.delino.com/restaurant/atf-ferdos#"
                                               class="anc-r-cp">×</a>
                                            <label id="coupon-name"></label>
                                            <span class="coupon-price"></span>
                                        </div>

                                        <div class="cart-total">
                                            <label><span>{{$totalPrice}}</span>هزینه کل: </label>

                                        </div>


                                        <div class="button-holder">
                                            <button class="btn-default btn-checkout">
                                                <span>ادامه سفارش</span>
                                                <div class="loader white"></div>
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>


            <div class="al-h add-tobasket">
                <div class="al-i" id="add-notify"></div>
            </div>

            <div class="al-nts">
                <div class="al-b">
                    <section>
                        <header>
                            <div class="icon-holder"><img src="./MrPeach_files/fig-notinstock.png" alt=""></div>
                            <h2>متاسفانه موجودی <b>مرغ کاری</b> به اتمام رسیده است</h2>
                            <p class="alert-msg">غذای به اتمام رسیده از سبد خرید حذف می شود.</p>
                        </header>
                        <div class="buttons-holder">
                            <button class="btn-list"><span>ادامه</span></button>
                        </div>
                    </section>
                </div>
            </div>


            <div class="md-modal md-gorder" id="md" data-gclass="">
                <div class="md-content">
                    <div class="cnt-disconnect">
                        <section>
                            <figure><img src="./MrPeach_files/fig-disconnect.png" alt=""></figure>
                            <h3>ارتباط شما با سرور قطع شده</h3>
                            <div class="button-holder">
                                <button class="btn-small btn-default" id="og-retry">
                                    <i class="fo fo-refresh"></i>
                                    <span>اتصال مجدد</span>
                                    <div class="loader"></div>
                                </button>
                            </div>
                        </section>
                    </div>

                    <div class="cnt-checkout">
                        <section>
                            <figure><img src="./MrPeach_files/fig-checkout.png" alt=""></figure>
                            <h3> داره سفارش شما رو نهایی میکنه!</h3>
                            <p>لطفا منتظر بمون تا وضعیت سفارش رو نمایش بدیم ...</p>
                        </section>
                    </div>
                    <div class="cnt-donegorder">
                        <section>
                            <figure><img src="./MrPeach_files/fig-donegorder.png" alt=""></figure>
                            <!--<h3>سفارشت رو تموم کردی؟</h3>-->
                            <p>ما به اطلاع دادیم که سفارشت رو تموم کردی. هر موقع که پرداخت انجام شد لینک وضعیت سفارش رو
                                اینجا قرار میدیم.</p>
                            <div class="button-holder">
                                <button class="btn-small btn-default" id="og-undone">
                                    <span>می خوام سفارشم رو تغییر بدم</span>
                                </button>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="md-overlay"></div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.btn-add.logged-in').click(function () {
                var product = $(this).parent();
                var price = product.data('pprice');
                var id = product.data('pid');
                var title = product.data('pname');


                $.ajax({
                        type: 'get',
                        url: "{{route('api.cart.add')}}",
                        data: {
                            productId: id
                        },
                        success: function (data) {
                            $('.rest-cart').removeClass('empty')
                            var prevOrdered = $('.user-cart-list #product-'+ id);
                            var prevOrderedPrice = $
                            var totalPriceContainer = $('.cart-total span');
                            if(prevOrdered.length){

                                prevOrdered.find('.food-qty label').html(parseInt(prevOrdered.find('.food-qty label').html())+1)
                                totalPriceContainer.html(parseInt(totalPriceContainer.html())+parseInt(price));
                            }
                        }

                    }
                )
            }
        )

    </script>
@endsection
