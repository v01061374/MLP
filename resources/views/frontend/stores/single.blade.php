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
                                <div class="rest-cart has-discount empty">
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
                                                                                    <small class="price">{{$item['product']['price'] * $item['quantity']}}
                                                                                        تومان
                                                                                    </small>
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
                                            <a href="{{route('front.order.prepare')}}">
                                                <button class="btn-default btn-checkout">
                                                    <span>ادامه سفارش</span>
                                                    <div class="loader white"></div>
                                                </button>
                                            </a>

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
                                                                                    <small class="price">{{$item['product']['price'] * $item['quantity']}}
                                                                                        تومان
                                                                                    </small>
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
                                            <a href="{{route('front.order.prepare')}}">
                                                <button class="btn-default btn-checkout">
                                                    <span>ادامه سفارش</span>
                                                    <div class="loader white"></div>
                                                </button>
                                            </a>

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
            var itemsContainer = $('.user-cart-list > div');


            $.ajax({
                    type: 'get',
                    url: "{{route('api.cart.add')}}",
                    data: {
                        productId: id
                    },
                    success: function (data) {
                        $('.rest-cart').removeClass('empty');
                        var prevOrdered = $('.user-cart-list #product-' + id);
                        var totalPriceContainer = $('.cart-total span');
                        if (prevOrdered.length) {

                            prevOrdered.find('.food-qty label').html(parseInt(prevOrdered.find('.food-qty label').html()) + 1)
                            totalPriceContainer.html(parseInt(totalPriceContainer.html()) + parseInt(price));
                        }
                        else {
                            $('.rest-cart').removeClass('empty');
                            $('.cart-size.round-full').html(parseInt($('.cart-size.round-full').html()) + 1);
                            itemsContainer.append('<div class="item" id="product-' + id + '">' +
                                '<button class="anc-rmv">×</button>' +
                                '<div class="item-holder">' +
                                '<aside>' +
                                '<h3>' + title + '' +
                                '<small ' +
                                'class="price">' +
                                price +
                                'تومان' +
                                '</small>' +
                                '</h3>' +
                                '</aside>' +
                                '<div class="qty-holder">' +
                                '<div class="food-qty">' +
                                '<label>' +
                                '1' +
                                '</label>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>');
                            totalPriceContainer.html(parseInt(totalPriceContainer.html()) + parseInt(price));
                        }
                    }

                }
            )
        })
        @if($userCart)
        $(document).on('click', '.item .anc-rmv', function () {
            var item = $(this).parent();
            var id = item.prop('id').split('product-')[item.prop('id').split('product-').length - 1];
            var price = parseInt($(this).parent().find('small.price').html());
            var qty = parseInt($(this).parent().find('.food-qty label').html());
            var totalPriceContainer = $('.cart-total span');


            $.ajax({
                type: 'get',
                url: "{{route('api.cart.remove')}}",
                data: {
                    productId: id,
                    cartId: parseInt("{{$userCart['id']}}")
                },
                success: function () {
                    item.remove();
                    $('.cart-size.round-full').html(parseInt($('.cart-size.round-full').html()) - 1);

                    totalPriceContainer.html(totalPriceContainer.html() - (qty * price));
                    if (totalPriceContainer.html() == 0) {
                        $('.rest-cart').addClass('empty');
                    }

                }

            })
        })
        @endif


    </script>
@endsection
