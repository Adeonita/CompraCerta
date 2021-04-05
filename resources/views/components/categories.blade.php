<div class='departments  w-100'>
    <div class='w-75 h-100 mx-auto d-flex flex-row justify-content-center align-items-center'>
        @php    
            use App\Http\Controllers\CategoryController;

            $categoryController = new CategoryController(); 
            $categories = $categoryController->show();
        @endphp
        @foreach($categories as $category)
            <a class='department mx-2'>{{ $category }}</a>
        @endforeach
    </div>
</div>