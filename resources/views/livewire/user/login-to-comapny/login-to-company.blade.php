<div>

    <br>

    <div class="rounded shadow p-3 w-50 mx-auto mt-5">
        <div class="card-title bg-green-600 text-white rounded shadow-sm text-center mx-auto p-3">
            <h3 style="font-size: 15px">ورود به حساب خود!</h3>
        </div>
        <br>
        <form wire:submit="login">
            <input wire:model="name_company" placeholder="نامی که نشان دهنده کار شما باشد"
                   class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
            <input wire:model="password" placeholder="رمز عبور"
                   class="bg-gray-50 mb-3 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full ps-10 p-2.5 light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500">
            @error('name_company')
            <p class="bg-yellow-100 text-yellow-500
            focus:bg-yellow-200 rounded-lg p-2 w-max focus:text-yellow-600 focus:shadow-yellow-600 border-none focus:outline-none
            focus:border-none outline-none animate__animated  animate__fadeInRight">
                شما مجوز  این حساب را ندارید!
            </p>
            @enderror
            <br>
            <button type="submit"
                    class="flex  w-full items-end float-end justify-center rounded-md bg-green-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-green-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all">
                بعدی
            </button>
        </form>
        <br><br><br>
        <hr>
        <a class="text-center btn btn-link text-green-600 hover:text-green-700 transition mx-auto"
           href="{{ \Illuminate\Support\Facades\URL::signedRoute('register_company', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}">ایجاد
            حساب</a>
        <br><br><br>
    </div>
</div>
