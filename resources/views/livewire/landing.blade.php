<div>
    @if(Route::has('auth'))
      @php return redirect(URL::signedRoute('my_dashboard', ['user_id' => \Illuminate\Support\Facades\Auth::id()] )); @endphp
    @else
        <div class="bg-gray-100">
            adsd
        </div>
        <h2>Landing</h2>
        <hr>
        <a href="{{ route('my_register') }}" class="text-red-600">ثبت نام</a>
        <a href="{{ route('my_login') }}">ورود به سیستم</a>
    @endif

</div>
