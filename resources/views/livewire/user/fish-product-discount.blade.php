<div>
    <h3>فیش واریزی</h3>
    <hr>
    <table class="table-light table">
        <tr>
            <th>نام خریدار</th>
            <th>نام خانوادگی خریدار</th>
            <th>شماره تلفن خریدار</th>
            <th>مکان خریدار</th>
            <th>نام کالا</th>
            <th>نام شرکت فروشنده</th>
            <th>کد کالا</th>
            <td>وزن</td>
            <th>قیمت اصلی</th>
            <th>تخفیف</th>
            <th>قیمت الان</th>
            <th>تاریخ</th>
        </tr>

        <tr>
            <td>{{ $find_product_id->f_name }}</td>
            <td>{{ $find_product_id->l_name }}</td>
            <td>{{ $find_product_id->phone_number_user }}</td>
            <td>{{ $find_product_id->your_location }}</td>
            <td>{{ $find_product_id->name_product }}</td>
            <td>{{ $find_product_id->name_company }}</td>
            <td>{{ $find_product_id->code_product }}</td>
            <td>{{ $find_product_id->vazn }}</td>
            <td>{{ $find_product_id->price }}</td>
            <td>{{ $find_product_id->discount }}</td>
            <td>{{ $find_product_id->result_discount }}</td>
            <td>{{ $find_product_id->time_send }}</td>
        </tr>
    </table>
    <button class="flex mx-auto
                items-end float-end justify-center rounded-md bg-green-600 px-5 py-2.5 text-center text-sm shadow-sm mt-3 font-medium text-white hover:bg-green-700 hover:shadow focus:outline-none focus:ring-4 focus:ring-green-700 transition-all" type="button" onclick="window.print()">عکس فیش</button>
    <hr>
    <a class="btn btn-link" href="{{ \Illuminate\Support\Facades\URL::signedRoute('my_dashboard', ['user_id' => \Illuminate\Support\Facades\Auth::id()]) }}">صفحه اصلی</a>
</div>
