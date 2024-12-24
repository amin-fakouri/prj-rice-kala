<div>
    <div class="rounded shadow p-3 w-50 mx-auto mt-5">
        <div class="card-title bg-green-600 text-white rounded shadow-sm text-center mx-auto p-3">
            <h3 style="font-size: 15px">ایجاد حساب برای شروع یک تجارت پر سود!</h3>
        </div>
        <br>
        <form wire:submit="create">
            <div class="row">
                <div class="col">
                    <input wire:model="f_name" placeholder="نام"
                           class="bg-gray-50 text-center mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"
                           autofocus required>
                </div>

                <div class="col">
                    <input wire:model="l_name" placeholder="نام خانوادگی"
                           class="bg-gray-50 mb-3 text-center transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"
                           required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input hidden="hidden" wire:model.fill="phone_number" value="{{ $find_id['phone_number'] }}"
                           class="bg-gray-50 text-center mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"
                           disabled>
                </div>
            </div>

            <input wire:model="name_company" placeholder="نام کار که نشان دهنده شما باشد"
                   class="bg-gray-50 mb-3 w-full text-center transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"
                   required>


            <input wire:model="password" placeholder="رمز عبور" required minlength="8" maxlength="8"
                   class="bg-gray-50 mb-3 text-center w-full transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">


            <textarea wire:model="location_city" placeholder="آدرس خود" required
                      class="bg-gray-50 transition mb-3 border text-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"></textarea>


            <textarea wire:model="location_work" placeholder="آدرس محل کار‌" required
                      class="bg-gray-50 w-full mb-3 text-center transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"></textarea>


            <br>
            <button type="submit"
                    class="flex w-full items-end float-end justify-center rounded-md bg-green-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-green-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all">
                بعدی
            </button>

        </form>
        <br><br><br>
        <hr>
        <a class="text-center btn btn-link text-green-600 hover:text-green-700 transition mx-auto"
           href="{{ \Illuminate\Support\Facades\URL::signedRoute('login_company') }}">ورود به حساب خود</a>
        <br><br><br>
    </div>

</div>
