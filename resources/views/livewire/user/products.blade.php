<div>
    <button class="w-full w-100" style="color: black; position: absolute; z-index: 1;" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
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
                {{ __('خروج از سیستم') }}
            </button>
        </div>
    </div>

    @foreach($products as $product)
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
</div>
