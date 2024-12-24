<div>


    <div class="animate__animated animate__fadeInUp w-50 mx-auto p-3 mt-5">
        <fieldset style="border: 1px solid green; border-radius: 20px">
            <legend
                style="position: absolute; margin-top: -20px; color: green; margin-left: 20px; background-color: white; width: max-content">
                ورود به سیستم
            </legend>
            <br>
            <form wire:submit="login" class="p-4">
                <div class="mb-3"><input maxlength="11" min="11" required style="text-align: center"
                                         wire:model="phone_number"
                                         class="bg-gray-50 transition border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-blue-500 block w-full light:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-green-500 dark:focus:border-green-500"
                                         placeholder="شماره تماس"></div>
                @error('phone_number')
                <h4 class="w-full bg-red-100 text-red-600 p-2 text-center"
                    style="border-radius: 8px;">{{ $message }}</h4>
                <br>
                @enderror
                <div class="mb-3">
                    <button type="submit"
                            class="text-green-500 bg-green-100 hover:bg-green-200 hover:text-green-600 transition rounded-lg focus:bg-green-100 focus:text-green-500 focus:rounded-lg; text-center w-full p-2">
                        ورود به سیستم
                    </button>
                </div>
                <hr>
                <div class="w-full mt-2 text-center">
                    <a class="w-full link-success underline"
                       href="{{ route('my_register') }}" wire:navigate>ثبت
                        نام</a>
                </div>
            </form>
        </fieldset>
    </div>


</div>
