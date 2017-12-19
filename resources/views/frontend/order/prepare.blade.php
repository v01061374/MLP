@extends('frontend.layouts.master')

@section('body-class')home-page
@endsection
@section('content')
    <div class="main-content" id="order-prepare-container">
        <div class="content-inner">
            <section class="home-section home-qu-s qu-s">
                <div class="wrapper clearfix " id="order-prepare" style="margin-top: 20px">
                    @if($totalPrice == 0)
                        <p style="width: 100%; text-align: center; color: #888; direction: rtl;">سبد خرید شما خالی است.</p>
                    @else
                        <div class="white-box d-p-b cp-added">
                            <ul>
                                <li class="total-price-holder"><label>کل هزینه سفارش </label>
                                    <aside class="total-price"><b id="total-price">{{$totalPrice}} تومان</b></aside>
                                </li>
                            </ul>
                            <textarea name="address" id="address" cols="30" rows="5" placeholder="آدرس"></textarea>
                            <input type="text" name="postalCode" id="postalCode" placeholder="کد پستی">
                            <button class="btn-default" id="finalizeOrder">
                                پرداخت
                            </button>
                        </div>
                    @endif

                </div>
            </section>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        $('#finalizeOrder').on('click', function () {
           var address = $('#address').val();
           var postalCode = $('#postalCode').val();

           if(address.length < 10){
               alert('آدرس را صحیح وارد کنید.')
           }
           else if((postalCode.length > 10 || postalCode.length < 10) || ! $.isNumeric(postalCode)) {
               alert('کد پستی را صحیح وارد کنید.')
           }
           else{
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });
               $.ajax({
                   type: "POST",
                   url: "{{route('front.order.finalize')}}",
                   data: {
                       'address_details': address,
                       'postalCode': postalCode,
                       'totalPrice': "{{$totalPrice}}"
                   },
                   success: function (result) {
                       console.log(result);
                       $('#order-prepare').html('<p style="width: 100%; text-align: center; color: #888; direction: rtl;">سفارش با موفقیت ثبت شد.</p>')
                   }

               });
           }
        });
        
    </script>
@endsection
