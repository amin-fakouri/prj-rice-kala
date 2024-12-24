<div>

    @if($page_mode == 0)
        <div style="box-shadow:  18px 18px 35px #bebebe,
             -18px -18px 35px #ffffff; border-radius: 50px" class="col-md-2 w-75 p-4 mx-auto mt-3">
            {{ 'نام :'.$search_company->f_name }}
            <br>
            {{ 'نام خانوادگی:'.$search_company->l_name }}
            <br>
            {{ 'نام تجاری:'.$search_company->name_company }}
            <br>
            {{ 'مکان شهر فروشنده:'.$search_company->location_city }}
            <br>
            {{ 'مکان مغازه/شرکت فروشنده:'.$search_company->location_work }}
            <br><br>
            <hr>
            <a class="btn btn-outline-dark mt-2 pr-5 pl-5"
               href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_dashboard', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}">برگشت</a>
            <p style="position: absolute; font-size: 25px; margin-right: 100px; margin-top: -40px">|</p>
            <button
                class="border-none rounded-lg my_link p-1 text-green-500 hover:text-green-600 focus:text-green-600 transition"
                style="margin-right: 26px; margin-top: 15px; position: absolute;" type="button"
                wire:click="product_dis">کالا های تخفیفی
            </button>
            <button
                class="border-none rounded-lg my_link p-1 text-green-500 hover:text-green-600 focus:text-green-600 transition"
                type="button" style="margin-right: 150px; margin-top: 15px; position: absolute;" wire:click="product">
                کالا بدون تخفیف
            </button>
        </div>
    @else
        <div style="box-shadow:  18px 18px 35px #bebebe,
             -18px -18px 35px #ffffff; border-radius: 50px" class="col-md-2 w-75 p-4 mx-auto mt-3">
            {{ 'نام :'.$search_company->f_name }}
            <br>
            {{ 'نام خانوادگی:'.$search_company->l_name }}
            <br>
            {{ 'نام تجاری:'.$search_company->name_company }}
            <br>
            {{ 'مکان شهر فروشنده:'.$search_company->location_city }}
            <br>
            {{ 'مکان مغازه/شرکت فروشنده:'.$search_company->location_work }}
            <br><br>
            <hr>
            <a class="btn btn-outline-dark mt-2 pr-5 pl-5"
               href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_dashboard', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}">برگشت</a>
            <p style="position: absolute; font-size: 25px; margin-right: 100px; margin-top: -40px">|</p>
            <button
                class="border-none rounded-lg my_link p-1 text-green-500 hover:text-green-600 focus:text-green-600 transition"
                style="margin-right: 26px; margin-top: 15px; position: absolute;" type="button"
                wire:click="product_dis">کالا های تخفیفی
            </button>
            <button
                class="border-none rounded-lg my_link p-1 text-green-500 hover:text-green-600 focus:text-green-600 transition"
                type="button" style="margin-right: 150px; margin-top: 15px; position: absolute;" wire:click="product">
                کالا بدون تخفیف
            </button>
            <button
                class="border-none rounded-lg my_link p-1 text-green-500 hover:text-green-600 focus:text-green-600 transition"
                style="position: absolute; margin-top: 15px; margin-right: 276px" type="button" wire:click="back">برگشت
                به حالت اول
            </button>
        </div>
    @endif

    <br>

    @if($page_mode == 0)
        <h1 hidden>{{ $i=0 }}</h1>

        @foreach($products_discount as $product_discount)
            <h1 hidden>{{ $i++ }}</h1>

            <div style="display: inline-block;  padding: 10px; margin-right: 25px;"
                 class="rounded-md border-black">
                <div class="card my_card shadow-sm "
                     style="width: 15rem; border-radius: 20px; outline: none; border: none; ">
                    @switch($product_discount->pic_url)
                        @case($product_discount->pic_url == 1)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem.webp') }}">
                            @break
                        @case($product_discount->pic_url == 2)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_hashemi.webp') }}">
                            @break
                        @case($product_discount->pic_url == 3)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_ali_kazemi.webp') }}">
                            @break
                        @case($product_discount->pic_url == 4)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_anbar_bo.webp') }}">
                            @break
                        @case($product_discount->pic_url == 5)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_champa.webp') }}">
                            @break
                        @case($product_discount->pic_url == 6)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_fajr.webp') }}">
                            @break
                        @case($product_discount->pic_url == 7)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_neda.webp') }}">
                            @break
                        @case($product_discount->pic_url == 8)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sadri.webp') }}">
                            @break
                        @case($product_discount->pic_url == 9)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sheyrudi.webp') }}">
                            @break
                        @case($product_discount->pic_url == 10)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem_zanjan.webp') }}">
                            @break
                        @case($product_discount->pic_url == 11)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_mohsen.webp') }}">
                            @break
                        @case($product_discount->pic_url == 12)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_kanoosh.webp') }}">
                            @break
                        @case($product_discount->pic_url == 13)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_tabiat.webp') }}">
                            @break
                        @case($product_discount->pic_url == 14)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_hendi.webp') }}">
                            @break
                        @default
                            @break
                    @endswitch
                    <div class="card-body">
                        <h6 class="card-title text-center">{{ $product_discount->name_pro.' '.$product_discount->vazn }}</h6>
                        <hr>
                        <p class="card-tex line-through text-gray-400"
                           style="font-size: 14px">{{ number_format($product_discount->price, 0).'تومان' }}</p>
                        <p class="card-text">
                            <strong>{{ number_format($product_discount->result_discount,0).'تومان' }}</strong>
                        </p>

                        @foreach($companies as $company)
                            @if($company->user_id === $product_discount->user_id)
                                <div class="card-text mb-1">
                                    {{ 'نام تجاری: '.$company->name_company }}
                                </div>
                            @endif
                        @endforeach

                        <p class="card-text"><b>{{ 'تاریخ:'.$product_discount->time_create_product }}</b></p>
                        <p style="background-color: rgba(0,0,0,0.8); color: white; padding: 5px; width: 50px; text-align: center;"
                           class="rounded-2xl card-text mt-1 mb-1">{{ $product_discount->discount.'%' }}</p>


                        <hr>


                        <div>
                            <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('see_product_discount', ['product_id' => $product_discount->id]) }}"
                               class="flex items-end float-end justify-center w-full rounded-md bg-green-100 px-5 py-2.5
                                    text-center text-sm shadow-sm mt-3 font-medium text-green-500 hover:bg-green-200
                                   hover:text-green-600 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-300
                                    transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                خرید</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        <h1 hidden>{{ $x=0 }}</h1>
        @foreach($products as $product)
            <h1 hidden>{{ $x++ }}</h1>
            <div style="display: inline-block;  padding: 10px; margin-right: 25px;"
                 class="rounded-md">
                <div class="card my_card shadow-sm "
                     style="width: 15rem; border-radius: 20px; outline: none; border: none; ">
                    @switch($product->pic_url)
                        @case($product->pic_url == 1)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem.webp') }}">
                            @break
                        @case($product->pic_url == 2)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_hashemi.webp') }}">
                            @break
                        @case($product->pic_url == 3)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_ali_kazemi.webp') }}">
                            @break
                        @case($product->pic_url == 4)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_anbar_bo.webp') }}">
                            @break
                        @case($product->pic_url == 5)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_champa.webp') }}">
                            @break
                        @case($product->pic_url == 6)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_fajr.webp') }}">
                            @break
                        @case($product->pic_url == 7)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_neda.webp') }}">
                            @break
                        @case($product->pic_url == 8)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sadri.webp') }}">
                            @break
                        @case($product->pic_url == 9)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sheyrudi.webp') }}">
                            @break
                        @case($product->pic_url == 10)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem_zanjan.webp') }}">
                            @break
                        @case($product->pic_url == 11)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_mohsen.webp') }}">
                            @break
                        @case($product->pic_url == 12)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_kanoosh.webp') }}">
                            @break
                        @case($product->pic_url == 13)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_tabiat.webp') }}">
                            @break
                        @case($product->pic_url == 14)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_hendi.webp') }}">
                            @break
                    @endswitch
                    <div class="card-body">
                        <h6 class="card-title text-center">{{ $product->name_pro.' '.$product->vazn }}</h6>
                        <hr>
                        <p class="card-text">
                            <strong>{{ number_format($product->price, 0).'تومان' }}</strong>
                        </p>

                        @foreach($companys as $company)
                            @if($company->user_id === $product->user_id)
                                <div class="card-text mb-1">
                                    {{ 'نام تجاری: '.$company->name_company }}
                                </div>
                            @endif
                        @endforeach

                        <p class="card-text"><b>{{ 'تاریخ:'.$product->time_create_product }}</b></p>

                        <hr>

                        <div>
                            <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('see_product_discount', ['product_id' => $product->id]) }}"
                               class="flex items-end float-end justify-center w-full rounded-md bg-green-100 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-green-500 hover:bg-green-200
                                   hover:text-green-600 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-300 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                خرید</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @elseif($page_mode == 1)
        <h1 hidden>{{ $i=0 }}</h1>

        @foreach($products_discount as $product_discount)
            <h1 hidden>{{ $i++ }}</h1>

            <div style="display: inline-block;  padding: 10px; margin-right: 25px;"
                 class="rounded-md border-black">
                <div class="card my_card shadow-sm "
                     style="width: 15rem; border-radius: 20px; outline: none; border: none; ">
                    @switch($product_discount->pic_url)
                        @case($product_discount->pic_url == 1)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem.webp') }}">
                            @break
                        @case($product_discount->pic_url == 2)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_hashemi.webp') }}">
                            @break
                        @case($product_discount->pic_url == 3)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_ali_kazemi.webp') }}">
                            @break
                        @case($product_discount->pic_url == 4)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_anbar_bo.webp') }}">
                            @break
                        @case($product_discount->pic_url == 5)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_champa.webp') }}">
                            @break
                        @case($product_discount->pic_url == 6)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_fajr.webp') }}">
                            @break
                        @case($product_discount->pic_url == 7)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_neda.webp') }}">
                            @break
                        @case($product_discount->pic_url == 8)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sadri.webp') }}">
                            @break
                        @case($product_discount->pic_url == 9)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sheyrudi.webp') }}">
                            @break
                        @case($product_discount->pic_url == 10)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem_zanjan.webp') }}">
                            @break
                        @case($product_discount->pic_url == 11)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_mohsen.webp') }}">
                            @break
                        @case($product_discount->pic_url == 12)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_kanoosh.webp') }}">
                            @break
                        @case($product_discount->pic_url == 13)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_tabiat.webp') }}">
                            @break
                        @case($product_discount->pic_url == 14)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_hendi.webp') }}">
                            @break
                        @default
                            @break
                    @endswitch
                    <div class="card-body">
                        <h6 class="card-title text-center">{{ $product_discount->name_pro.' '.$product_discount->vazn }}</h6>
                        <hr>
                        <p class="card-tex line-through text-gray-400"
                           style="font-size: 14px">{{ number_format($product_discount->price, 0).'تومان' }}</p>
                        <p class="card-text">
                            <strong>{{ number_format($product_discount->result_discount,0).'تومان' }}</strong>
                        </p>

                        @foreach($companies as $company)
                            @if($company->user_id === $product_discount->user_id)
                                <div class="card-text mb-1">
                                    {{ 'نام تجاری: '.$company->name_company }}
                                </div>
                            @endif
                        @endforeach

                        <p class="card-text"><b>{{ 'تاریخ:'.$product_discount->time_create_product }}</b></p>
                        <p style="background-color: rgba(0,0,0,0.8); color: white; padding: 5px; width: 50px; text-align: center;"
                           class="rounded-2xl card-text mt-1 mb-1">{{ $product_discount->discount.'%' }}</p>


                        <hr>


                        <div>
                            <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('see_product_discount', ['product_id' => $product_discount->id]) }}"
                               class="flex items-end float-end justify-center w-full rounded-md bg-green-100 px-5 py-2.5
                                    text-center text-sm shadow-sm mt-3 font-medium text-green-500 hover:bg-green-200
                                   hover:text-green-600 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-300
                                    transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                خرید</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    @elseif($page_mode == 2)
        <h1 hidden>{{ $x=0 }}</h1>
        @foreach($products as $product)
            <h1 hidden>{{ $x++ }}</h1>
            <div style="display: inline-block;  padding: 10px; margin-right: 25px;"
                 class="rounded-md">
                <div class="card my_card shadow-sm "
                     style="width: 15rem; border-radius: 20px; outline: none; border: none; ">
                    @switch($product->pic_url)
                        @case($product->pic_url == 1)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem.webp') }}">
                            @break
                        @case($product->pic_url == 2)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_hashemi.webp') }}">
                            @break
                        @case($product->pic_url == 3)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_ali_kazemi.webp') }}">
                            @break
                        @case($product->pic_url == 4)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_anbar_bo.webp') }}">
                            @break
                        @case($product->pic_url == 5)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_champa.webp') }}">
                            @break
                        @case($product->pic_url == 6)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_fajr.webp') }}">
                            @break
                        @case($product->pic_url == 7)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_neda.webp') }}">
                            @break
                        @case($product->pic_url == 8)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sadri.webp') }}">
                            @break
                        @case($product->pic_url == 9)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sheyrudi.webp') }}">
                            @break
                        @case($product->pic_url == 10)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem_zanjan.webp') }}">
                            @break
                        @case($product->pic_url == 11)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_mohsen.webp') }}">
                            @break
                        @case($product->pic_url == 12)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_kanoosh.webp') }}">
                            @break
                        @case($product->pic_url == 13)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_tabiat.webp') }}">
                            @break
                        @case($product->pic_url == 14)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top"
                                src="{{ asset('storage/pics_product/rice_hendi.webp') }}">
                            @break
                    @endswitch
                    <div class="card-body">
                        <h6 class="card-title text-center">{{ $product->name_pro.' '.$product->vazn }}</h6>
                        <hr>
                        <p class="card-text">
                            <strong>{{ number_format($product->price, 0).'تومان' }}</strong>
                        </p>

                        @foreach($companys as $company)
                            @if($company->user_id === $product->user_id)
                                <div class="card-text mb-1">
                                    {{ 'نام تجاری: '.$company->name_company }}
                                </div>
                            @endif
                        @endforeach

                        <p class="card-text"><b>{{ 'تاریخ:'.$product->time_create_product }}</b></p>

                        <hr>

                        <div>
                            <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('see_product_discount', ['product_id' => $product->id]) }}"
                               class="flex items-end float-end justify-center w-full rounded-md bg-green-100 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-green-500 hover:bg-green-200
                                   hover:text-green-600 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-300 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                                خرید</a>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @endif


</div>
