<div>
    <div class="col-lg-4">
        <p class="mg-b-10">اختار المخزن لرؤية منتجاته</p><select class="form-control" tabindex="-1" aria-hidden="true">
            <option value="null"></option>
            @foreach ($Stocks as $Stock)
                <option value="{{ $Stock->id }}">{{ $Stock->name  }}</option>
            @endforeach
        </select>
    </div>

    <div class="card-body">
        <table class="table text-md" id="example-1">
            <thead>
                <tr>
                    <th class="wd-12p border-bottom-0">ID</th>
                    <th class="wd-12p border-bottom-0">اسم المنتج</th>
                    <th class="wd-12p border-bottom-0">الفئة</th>
                    <th class="wd-12p border-bottom-0">سعر الشراء</th>
                    <th class="wd-12p border-bottom-0">سعر البيع</th>
                    <th class="wd-12p border-bottom-0">تاريخ الاضافة</th>
                    <th class="wd-12p border-bottom-0">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_product as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->CategoryName }}</td>
                        <td>{{ $product->buy_price }}</td>
                        <td>{{ $product->sell_price }}</td>
                        <td>{{ $product->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('Product.edit', $product->id) }}" class="btn btn-sm btn-warning"><i
                                    class="fas fa-edit"></i></a>
                            <form action="{{ route('Product.destroy', $product->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
