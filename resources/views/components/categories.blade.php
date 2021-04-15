<div class='departments '>
    <div class='swiper-container h-100'>
        <div class='w-75 h-100 mx-auto d-flex flex-nowrap swiper-wrapper text-align-center'>
            @php
                use App\Http\Controllers\CategoryController;
                $categoryController = new CategoryController();
                $categories = $categoryController->show();
            @endphp
            @foreach ($categories as $category)
                <a class=' swiper-item department px-3 py-2'>{{ $category }}</a>
            @endforeach
        </div>
    </div>
</div>

