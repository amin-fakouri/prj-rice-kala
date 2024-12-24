<div>
    @if($pages == 0)
        <div class="shadow-sm w-75 rounded mx-auto mt-2 p-3">
            <input wire:model.fill="user_id" value="{{ \Illuminate\Support\Facades\Auth::id() }}" hidden disabled>
            <input wire:model.fill="product_id" value="{{ $find_product_discount->id }}" disabled hidden>


            <div class="row">
                <div class="col">
                    <input wire:model="f_name" placeholder="نام خود" required
                           class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>

                <div class="col">
                    <input wire:model="l_name" required placeholder="نام خانوادگی"
                           class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>
            </div>

            <textarea wire:model="your_location" placeholder="مکان تحویل کالا"
                      class="bg-gray-50 mb-3 w-full mt-2 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"></textarea>


            @foreach($accounts_company as $account_company)
                @foreach($products_discount as $product_discount)
                    @if($account_company->user_id == $product_discount->user_id)
                        @if($find_product_discount->code_pro == $product_discount->code_pro)
                            <input wire:model.fill="user_created_product" value="{{ $product_discount->user_id }}"
                                   disabled
                                   hidden>
                            <input wire:model.fill="name_company" value="{{ $account_company->name_company }}" disabled
                                   hidden>

                        @endif
                    @endif
                @endforeach
            @endforeach

            <div class="row">
                <div class="col">
                    <input wire:model.fill="name_pro" value="{{ $find_product_discount->name_pro }}" disabled
                           class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>

                <div class="col">
                    <input wire:model.fill="code_product" value="{{ $find_product_discount->code_pro }}" disabled
                           class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input wire:model.fill="phone_number" value="{{ auth()->user()->phone_number }}" disabled
                           class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>

                <div class="col">
                    <input wire:model.fill="price" value="{{ $find_product_discount->price }}" disabled
                           class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>

                <div class="col">
                    <input wire:model.fill="vazn" value="{{ $find_product_discount->vazn}}" disabled
                           class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
                </div>
            </div>


            <div class="mb-3">
                <button class="flex w-full
                items-end float-end justify-center rounded-md bg-green-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-green-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all"
                        wire:click="next_page">بعدی
                </button>
            </div>
            <br><br>
        </div>
    @elseif($pages == 1)
        <form wire:submit="create" class="shadow-sm mx-auto mt-2 w-50 rounded p-3">
            <div>
                @foreach($buys_id as $buy_id)

                @endforeach

                <input wire:model.fill="buy_id" disabled hidden value="{{ $buy_id->id+=1 }}">
                <h3 class="text-center card-subtitle">1324-6723-8973-1332</h3>
                <h2 class="text-center">{{ 'قیمت:'.$find_product_discount->result_discount }}</h2>
                <input wire:model.fill="user_id" value="{{ \Illuminate\Support\Facades\Auth::id() }}" hidden disabled>
                <input wire:model="f_name" placeholder="نام خود" disabled hidden>
                <input wire:model="l_name" placeholder="نام خانوادگی" disabled hidden>
                <textarea wire:model="your_location" placeholder="مکان تحویل کالا" disabled hidden></textarea>
                @foreach($accounts_company as $account_company)
                    @foreach($products_discount as $product_discount)
                        @if($account_company->user_id == $product_discount->user_id)
                            @if($find_product_discount->code_pro == $product_discount->code_pro)
                                <input wire:model.fill="user_created_product" value="{{ $product_discount->user_id }}"
                                       disabled
                                       hidden>
                                <input wire:model.fill="name_company" value="{{ $account_company->name_company }}"
                                       disabled hidden>
                            @endif
                        @endif
                    @endforeach
                @endforeach
                <input wire:model.fill="name_pro" value="{{ $find_product_discount->name_pro }}" disabled hidden>
                <input wire:model.fill="code_product" value="{{ $find_product_discount->code_pro }}" disabled hidden>
                <input wire:model.fill="price" value="{{ $find_product_discount->price }}" disabled hidden>
                <input wire:model.fill="vazn" value="{{ $find_product_discount->vazn }}" disabled hidden>
                <input wire:model.fill="phone_number" value="{{ auth()->user()->phone_number }}" hidden disabled>
                <input type="number" placeholder="مبغ را وارد کنید" min="{{ $find_product_discount->price }}"
                       class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"
                       value="{{ $find_product_discount->price }}">
                <button
                    class="flex w-full items-end float-end justify-center rounded-md bg-green-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-green-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all"
                    type="submit">خرید
                </button>
            </div>
            <br><br><br>
        </form>
    @endif

</div>
