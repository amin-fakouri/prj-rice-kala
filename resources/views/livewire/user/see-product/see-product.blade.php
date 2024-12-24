<div>

    <div data-aos="fade-up" style="padding: 10px;"
         class="rounded-md border-black mx-auto">
        <div class="card my_card shadow-sm mx-auto mt-2"
             style="width: 20rem; border-radius: 20px; outline: none; border: none; ">
            @switch($find_product_id->pic_url)
                @case($find_product_id['pic_url'] == 1)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 2)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_hashemi.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 3)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_ali_kazemi.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 4)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_anbar_bo.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 5)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_champa.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 6)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_fajr.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 7)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_neda.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 8)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_sadri.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 9)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_sheyrudi.webp') }}">
                    @break
                @case($find_product_id['pic_url'] == 10)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem_zanjan.webp') }}">
                    @break
                @case($find_product_id->pic_url == 11)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top"
                        src="{{ asset('storage/pics_product/rice_mohsen.webp') }}">
                    @break
                @case($find_product_id->pic_url == 12)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top"
                        src="{{ asset('storage/pics_product/rice_kanoosh.webp') }}">
                    @break
                @case($find_product_id->pic_url == 13)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top"
                        src="{{ asset('storage/pics_product/rice_tabiat.webp') }}">
                    @break
                @case($find_product_id->pic_url == 14)
                    <img
                        style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                        class="card-img-top"
                        src="{{ asset('storage/pics_product/rice_hendi.webp') }}">
                    @break
                @default
                    @break
            @endswitch
            <div class="card-body">
                <h6 class="card-title text-center">{{ $find_product_id->name_pro.$find_product_id->vazn }}</h6>
                <hr>
                <p class="card-text">
                    <strong>{{ number_format($find_product_id->price, 0).'تومان' }}</strong>
                </p>

                @foreach($companys as $company)
                    @if($company->user_id === $find_product_id->user_id)
                        <div class="card-text mb-1">
                            {{ 'نام تجاری: '.$company->name_company }}
                        </div>
                    @endif
                @endforeach

                <p class="card-text"><b>{{ 'تاریخ:'.$find_product_id->time_create_product }}</b></p>

                <div>
                    <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('buy_product', ['product_id' => $find_product_id->id]) }}"
                       class="flex items-end float-end justify-center w-full rounded-md bg-green-100 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-green-500 hover:bg-green-200
                                   hover:text-green-600 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-300 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        خرید</a>
                    <br><br><br>

                    <hr>

                    <br>
                    <a href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_dashboard', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}"
                       class="bg-yellow-100 text-yellow-500 p-2 rounded-lg hover:bg-yellow-200 hover:text-yellow-600 focus:bg-yellow-200 focus:text-yellow-600 max-w-max">
                        برگشت
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
