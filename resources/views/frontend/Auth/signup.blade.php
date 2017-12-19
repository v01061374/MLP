@extends('frontend.layouts.master')

@section('body-class')home-page
@endsection
@section('content')
    <div class="main-content" id="user-signup-container">
        <div class="content-inner">
            <section class="home-section home-qu-s qu-s">
                <div class="wrapper clearfix " id="user-signup" style="margin-top: 20px">
                    <div class="form-group">
                        <form method="post" action="{{route('front.user.signup.submit')}}" id="user-signup-form">
                            <input name="email" type="email" class="form-control" id="email" placeholder="ایمیل">
                            <input name="firstName" type="text" class="form-control" id="firstName" placeholder="نام">
                            <input name="lastName" type="text" class="form-control" id="lastName" placeholder="نام خانوادگی">
                            <input name="phoneNumber" type="text" class="form-control" id="phoneNumber" placeholder="شماره تلفن">
                            <input name="username" type="text" class="form-control" id="username" placeholder="نام کاربری">
                            <input name="password" type="text" class="form-control" id="password" placeholder="پسوورد">
                            <button type="submit" id="submit" class="btn btn-default">ثبت نام</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection
@section('scripts')
    <script>
        $('#submit').on('click', function (e) {
            var email = $('#email').val();
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var username = $('#username').val();
            var phone = $('#phone').val();
            var password = $('#password').val();

            if(!/(.+)@(.+){2,}\.(.+){2,}/.test(email)){
                alert('ایمیل را صحیح وارد کنید.');
                e.preventDefault();
            }
            else if(!firstName.length){
                alert('نام را صحیح وارد کنید.');
                e.preventDefault();
            }
            else if(!lastName.length){
                alert('نام خانوادگی را صحیح وارد کنید.');
                e.preventDefault();
            }
            else if(phone.length > 10 || phone.length < 10 || !$.isNumeric(phone)){
                alert('شماره تلفن را صحیح وارد کنید.');
                e.preventDefault();
            }
            else if(!username.length){
                alert('نام کاربری را صحیح وارد کنید.');
                e.preventDefault();
            }
            else if(!password.length){
                alert('پسوورد را صحیح وارد کنید.');
                e.preventDefault();
            }
            else{

            }


        });
    </script>
@endsection
