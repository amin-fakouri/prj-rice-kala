<div>

    <button  class="w-full w-100" style="color: black; position: absolute; z-index: 1;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
             aria-controls="offcanvasExample">
        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-filter-right"
             viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5"/>
        </svg>
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">rIce-KaLA</h5>
            <button type="button"
                    class="btn-close d-inline-flex focus-ring focus-ring-light py-1 px-2 text-decoration-none border rounded-2"
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <a class="nav-link"
               href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_dashboard', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}"
               wire:navigate>برگشت</a>
            <br>
            <hr>
            <br>


            <a class="nav-link"
               href="{{ \Illuminate\Support\Facades\URL::signedRoute('register_company', ['user_id' => auth()->user()->id]) }}"
               wire:navigate>فروشنده شو</a>
            <br>
            <hr>
            <br>
            <button class="nav-link" wire:click="logout">
                {{ __('Log Out') }}
            </button>
        </div>
    </div>
    <h1 class="text-center"><b>کالا های تخفیفی که خریده اید</b></h1>

    <table class="table table-light mx-auto w-75 text-center rounded-lg shadow-sm ">
        @php $i=0; @endphp
        <tr>
            <th>#</th>
            <th>نام کالا</th>
            <th>کد کالا</th>
            <th>ساعت خرید</th>
            <th>وزن</th>
            <th>قیمت</th>
            <th>نام تجاری فروشده</th>
        </tr>

        @foreach($product_discount_buys as $product_discount_buy)
            @if($product_discount_buy->user_id == \Illuminate\Support\Facades\Auth::id())
                @php $i+=1; @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $product_discount_buy->name_product }}</td>
                    <td>{{ $product_discount_buy->code_product }}</td>
                    <td>{{ $product_discount_buy->time_send }}</td>
                    <td>{{ $product_discount_buy->vazn }}</td>
                    <td>{{ $product_discount_buy->result_discount }}</td>
                    @foreach($companys as $company)
                        @if($company->user_id == $product_discount_buy->user_created_product)
                            <td>{{ $company->name_company }}</td>
                        @endif
                    @endforeach
                </tr>
            @endif
        @endforeach

    </table>

    <hr>

    <h1 class="text-center"><b>کالا های اصلی که خریده اید</b></h1>

    <table class="table table-light mx-auto w-75 text-center rounded-lg shadow-sm">
        @php $i=0; @endphp
        <tr>
            <th>#</th>
            <th>نام کالا</th>
            <th>کد کالا</th>
            <th>ساعت خرید</th>
            <th>وزن</th>
            <th>قیمت</th>
            <th>نام تجاری فروشده</th>
        </tr>

        @foreach($product_buys as $product_buy)
            @if($product_buy->user_id == \Illuminate\Support\Facades\Auth::id())
                @php $i+=1; @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $product_buy->name_product }}</td>
                    <td>{{ $product_buy->code_product }}</td>
                    <td>{{ $product_buy->time_send }}</td>
                    <td>{{ $product_buy->vazn }}</td>
                    <td>{{ $product_buy->price }}</td>
                    @foreach($companys as $company)
                        @if($company->user_id == $product_buy->user_created_product)
                            <td>{{ $company->name_company }}</td>
                        @endif
                    @endforeach
                </tr>
            @endif
        @endforeach

    </table>

{{--    <h1 class="text-center"><br>کالا های تخفیفی که فروخته اید</h1>--}}

{{--    @php $x=0; @endphp--}}

{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>#</th>--}}
{{--            <th>نام کالا</th>--}}
{{--            <th>کد کالا</th>--}}
{{--            <th>ساعت خرید</th>--}}
{{--            <th>قیمت</th>--}}
{{--            <th>نام خریدار</th>--}}
{{--        </tr>--}}

{{--        @foreach($product_discount_buys as $product_discount_buy)--}}
{{--            @if($product_discount_buy->user_id == \Illuminate\Support\Facades\Auth::id())--}}
{{--                <tr>--}}
{{--                    <td>{{ $x }}</td>--}}
{{--                    <td>{{ $product_discount_buy->name_product }}</td>--}}
{{--                    <td>{{ $product_discount_buy->code_product }}</td>--}}
{{--                    <td>{{ $product_discount_buy->time_send }}</td>--}}
{{--                    <td>{{ $product_discount_buy->result_discount }}</td>--}}
{{--                    @foreach($companys as $company)--}}
{{--                        @if($company->user_id == $product_discount_buy->user_created_product)--}}
{{--                            <td>{{ $company->name_company }}</td>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </tr>--}}
{{--            @endif--}}
{{--        @endforeach--}}

{{--    </table>--}}


</div>
