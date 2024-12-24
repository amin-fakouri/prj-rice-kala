@php use Illuminate\Support\Facades\Auth; @endphp
@php use Illuminate\Support\Facades\URL; @endphp
<div>

    <div>
        @if (session()->has('message'))

            <button type="button" wire:click="close" class="alert bg-green-100 text-green-500 hover:bg-green-200
            hover:text-green-600 m-2
            focus:bg-green-200 focus:text-green-600 focus:shadow-green-600 border-none focus:outline-none
            focus:border-none outline-none animate__animated  animate__fadeInRight">
                با موفقیت ایجاد شد!
            </button>

        @elseif($alert == 0)


        @endif
    </div>

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
        <br>
        @php
            // متغیر i تعداد خرید هایی که بدون تخفیف را میشمارد و متغیر s خرید های تخفیف را میشمارد
                $i=0;
                $s=0;
        @endphp
        @foreach($buy_products as $buy_product)
            @if($buy_product->user_created_product == Auth::id())
                @php $i+=1; @endphp
                @php $x=$i; @endphp

            @else

                @php $x=0; @endphp

            @endif

        @endforeach

        @foreach($buy_products_discount as $buy_product_discount)
            @if($buy_product_discount->user_created_product == Auth::id())
                @php $s+=1; @endphp
                @php $y=$i; @endphp
            @else

                @php $y=0; @endphp
            @endif
        @endforeach

        @if($y==0 and $x==0)
            @php $buys = $x+$y-1; @endphp
            {{ 'تعداد فروش کالا:'.'0' }}
        @else
            @php $buys = $x+$y-1; @endphp
            {{ 'تعداد فروش کالا:'.$buys }}
        @endif

        <br><br>
        <hr>
        <a class="btn btn-outline-dark mt-2 pr-5 pl-5"
           href="{{ URL::signedRoute('my_dashboard', ['user_id' => Auth::id()]) }}">برگشت</a>
        <p style="position: absolute; font-size: 25px; margin-right: 100px; margin-top: -35px">|</p>
        <a class="border-none rounded-lg p-1 my_link hover:text-green-600 transition"
           style="margin-right: 26px; margin-top: 15px; position: absolute;"
           href="{{ URL::signedRoute('products_created') }}">دیدن کالا</a>
        <button
            class="border-none rounded-lg p-1 my_link hover:text-green-600 focus:text-green-600 transition"
            type="button" style="margin-right: 100px; margin-top: 15px; position: absolute;" wire:click="open_modal">
            ایجاد کالا
        </button>
    </div>


    @if($modal_page == 1)
        <div class="shadow-sm w-50 mx-auto mt-5 rounded p-4">

            <div class="row">
                <div class="col">
                    <input wire:model="price" type="number" placeholder="قیمت کالای خود را مشخص کنید" required
                           class="bg-gray-50 text-center transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>
            </div>
            <button type="button" wire:click="next_page_modal" class="flex w-full
                items-end float-end justify-center rounded-md bg-green-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-green-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all">
                بعدی
            </button>
            <br><br><br>
            <hr>
            <br>
            <button class="text-gray-950 hover:underline" type="button" wire:click="close_modal">بستن</button>

        </div>
    @elseif($modal_page == 2)
        <div class="shadow-sm w-75 rounded mt-5 p-4 mx-auto">
            <form wire:submit="create">
                <div class="row">
                    <div class="col">
                        <select wire:model="pic_url"
                                class="bg-gray-50 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option>برنج خود را انتخاب کنید</option>
                            <option value="1">برنج طارم</option>
                            <option value="2">برنج هاشمی</option>
                            <option value="3">برنج علی کاظمی</option>
                            <option value="4">برنج عنبر بو</option>
                            <option value="5">برنج چمپا</option>
                            <option value="6">برنج فجر</option>
                            <option value="7">برنج ندا</option>
                            <option value="8">برنج صدری</option>
                            <option value="9">برنج شیرودی</option>
                            <option value="10">برنج طارم زنجان</option>
                            <option value="11">برنج محسن</option>
                            <option value="12">برنج کانوش</option>
                            <option value="13">برنج طبیعت</option>
                            <option value="14">برنج هندی</option>
                        </select>
                    </div>

                    <div class="col">
                        <select wire:model="item_kesht"
                                class="bg-gray-50 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option>کشت خود را انتخاب کنید</option>
                            <option value="کشت اول">کشت اول</option>
                            <option value="کشت دوم">کشت دوم</option>
                        </select>
                    </div>
                </div>

                <br>

                <select wire:model="vazn"
                        class="bg-gray-50 text-center w-full transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                    <option>وزن مدنظر خود را انتخاب کنید...</option>
                    <option value="2کیلویی">2کیلویی</option>
                    <option value="5کیلویی">5کیلویی</option>
                    <option value="10کیلویی">10کیلویی</option>
                    <option value="50کیلویی">50کیلویی</option>
                    <option value="1تنی">1تنی</option>
                    <option value="2تنی">2تنی</option>
                    <option value="3تنی">3تنی</option>
                </select>

                <br><br>
                <hr>
                <h4 class="text-center text-green-600 mt-2 mb-2">تخفیف</h4>
                <input
                    class="bg-gray-50 text-center w-full transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"
                    wire:model.fill="discount" type="number" minlength="1" maxlength="2" min="0" max="100" value="0">
                <input hidden wire:model.fill="price" type="number" disabled placeholder="قیمت کالای خود را مشخص کنید"
                       required>
                <button class="flex w-full
                items-end float-end justify-center rounded-md bg-green-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-green-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all">
                    ایجاد
                </button>
                <br><br><br>
                <hr>
                <button class="text-gray-950 hover:underline" type="button" wire:click="close_modal">بستن</button>

            </form>
        </div>
    @endif
</div>

