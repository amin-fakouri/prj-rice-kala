<div>
    <h1>فروشنده شو و فروشت رو دو برابر کن!</h1>
    <hr>
    <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('login_company') }}">رفتن به حساب خود</a>
    |
    <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('register_company', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}">ایجاد حساب برای شروع فروش کالا</a>
</div>
