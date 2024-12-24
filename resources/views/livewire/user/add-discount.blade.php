<div>
    <h3>تخفیف</h3>
    <hr>
    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
        <div
            class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
            <img style="width: 100%; height: 100%" src="{{ asset('storage/pics_product/rice_tarem.jpg') }}"
                 alt="card-image">
        </div>
        <div class="p-6">
            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                {{ $find_id_product->price.'تومان' }}
            </h5>
            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                برنج طارم
            </p>
        </div>
        <div class="p-6 pt-0">
            <button disabled wire:click="delete_product({{ $find_id_product->id }})"
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-600 text-white shadow-md shadow-red-500/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                    type="button">
                حذف
            </button>

            @foreach($discounts as $my_discount)
                @if($find_id_product->id == $my_discount->product_id)
                    <form wire:submit="create">
                        <input wire:model.fill="product_id" value="{{ $find_id_product->id }}" disabled>
                        <input wire:model.fill="price" value="{{ $find_id_product->price }}" disabled>
                        <input wire:model="discount" type="number" max="100" min="1" required>
                        <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-600 text-white shadow-md shadow-red-500/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">اضافه کردن</button>
                    </form>
                    @break
                @else
                    <button type="button" wire:click="delete_discount({{ $my_discount->id }})" class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-red-500/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">حذف تخفیف</button>
                    @break
                @endif
            @endforeach

        </div>
    </div>
</div>
