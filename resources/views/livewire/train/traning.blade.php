<div>
    @persist('scrollbar')
    <div class="overflow-y-scroll" wire:scroll>
        <h1 class="text-sm md:text-lg"><strong>Hi Molti!</strong></h1>

        <ul>
            <li>Home</li>
            <li>New</li>
            <li>About</li>
        </ul>

        <div>
            Football is Life
        </div>

        <div class="flex justify-center sm:justify-start md:justify-end lg:justify-around">
            <a href="#" class="text-red-600">Login</a>
            <a href="#" class="text-red-600">Sing Up</a>
        </div>

        <div class="flex items-center justify-center">
            <div class="bg-red-500 h-4 w-8"></div>
            <div class="bg-blue-500 h-8 w-8"></div>
            <div class="bg-green-500 h-12 w-8"></div>
        </div>

        <main class="px-16 py-6">

            <div class="flex justify-center grid">
                <p class="bg-gray-500 text-white">Hi Molti!</p>
            </div>



            <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">
                Rice Kala
            </h4>

            {{--        grid lg:grid-cols-3 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-10--}}

            <div class="flex overflow-x-scroll">
                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>

                <div class="mt-8 p-5">
                    <div class="bg-white overflow-hidden rounded drop-shadow-md">
                        <img src="{{ asset('storage/pics_product/rice_tarem.webp') }}" class="w-full h-52 sm:h-72">
                        <div class="m-4">
                            <span class="font-bold">5$</span>
                            <span class="block text-sm text-gray-500">Best Rice</span>
                        </div>
                    </div>
                </div>
            </div>


        </main>

    </div>
    @endpersist


</div>
