<div>

    <button style="position: absolute" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-filter-right"
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
               href="{{ \Illuminate\Support\Facades\URL::signedRoute('dash_seller', ['id' => auth()->user()->id]) }}"
               wire:navigate>برگشت</a>
            <br>
            <hr>
            <br>
            <button class="nav-link" wire:click="logout">
                {{ __('Log Out') }}
            </button>
        </div>

    </div>

    <br>

    @foreach($products as $product)
        @if($product->user_id == \Illuminate\Support\Facades\Auth::id())
            <div data-aos="fade-up" style="display: inline-block;  padding: 10px; margin-right: 25px;"
                 class="rounded-md">
                <div class="card my_card shadow-sm "
                     style="width: 20rem; border-radius: 20px; outline: none; border: none; ">
                    @switch($product->pic_url)
                        @case($product['pic_url'] == 1)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem.webp') }}">
                            @break
                        @case($product['pic_url'] == 2)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_hashemi.webp') }}">
                            @break
                        @case($product['pic_url'] == 3)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_ali_kazemi.webp') }}">
                            @break
                        @case($product['pic_url'] == 4)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_anbar_bo.webp') }}">
                            @break
                        @case($product['pic_url'] == 5)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_champa.webp') }}">
                            @break
                        @case($product['pic_url'] == 6)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_fajr.webp') }}">
                            @break
                        @case($product['pic_url'] == 7)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_neda.webp') }}">
                            @break
                        @case($product['pic_url'] == 8)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sadri.webp') }}">
                            @break
                        @case($product['pic_url'] == 9)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sheyrudi.webp') }}">
                            @break
                        @case($product['pic_url'] == 10)
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
                        @default

                    @endswitch
                    <div class="card-body">
                        <h6 class="card-title text-center">{{ $product->name_pro }}</h6>
                        <hr>
                        <p class="card-text"><strong>{{ number_format($product->price, 0).'تومان' }}</strong></p>
                        <p class="card-text">{{ $product->item_kesht }}</p>
                        <p class="card-text"><b>{{ 'تاریخ:'.$product->time_create_product }}</b></p>

                        <div>
                            <button wire:click="delete_product({{ $product->id }})"
                                    class="flex  w-full items-end float-end justify-center rounded-md bg-red-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-red-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all"
                                    type="button">
                                حذف
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    @foreach($products_discount as $product_discount)
        @if($product_discount->user_id == auth()->user()->id)
            <div data-aos="fade-up" style="display: inline-block;  padding: 10px; margin-right: 25px;"
                 class="rounded-md border-black">
                <div class="card my_card shadow-sm "
                     style="width: 20rem; border-radius: 20px; outline: none; border: none; ">
                    @switch($product_discount->pic_url)
                        @case($product_discount['pic_url'] == 1)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_tarem.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 2)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_hashemi.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 3)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_ali_kazemi.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 4)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_anbar_bo.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 5)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_champa.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 6)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_fajr.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 7)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_neda.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 8)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sadri.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 9)
                            <img
                                style="width: 100%; height: 100%; border-radius: 20px 20px 3px 3px; aspect-ratio: 1; object-fit: contain"
                                class="card-img-top" src="{{ asset('storage/pics_product/rice_sheyrudi.webp') }}">
                            @break
                        @case($product_discount['pic_url'] == 10)
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

                    @endswitch
                    <div class="card-body">
                        <h6 class="card-title text-center">{{ $product_discount->name_pro }}</h6>
                        <hr>
                        <p class="card-tex line-through text-gray-400"
                           style="font-size: 14px">{{ number_format($product_discount->price, 0).'تومان' }}</p>
                        <p class="card-text">
                            <strong>{{ number_format($product_discount->result_discount,0).'تومان' }}</strong></p>
                        <p class="card-text">{{ $product_discount->item_kesht }}</p>
                        <p class="card-text"><b>{{ 'تاریخ:'.$product_discount->time_create_product }}</b></p>

                        <div>
                            <button wire:click="delete_product_discount({{ $product_discount->id }})"
                                    class="flex items-end float-end justify-center w-75 rounded-md bg-red-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-red-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all"
                                    type="button">
                                حذف
                            </button>
                            <p style="position: absolute; margin-right: 56px; margin-top: 15px; font-size: 28px">|</p>
                            <p style="background-color: rgba(0,0,0,0.8); color: white; padding: 5px; width: 50px; text-align: center; position: absolute; margin-top: 20px"
                               class="rounded-2xl">{{ $product_discount->discount.'%' }}</p>
                        </div>
                    </div>
                </div>
            </div>

        @endif
    @endforeach
</div>
</div>
