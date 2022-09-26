<div class="col-12 col-md-4 col p-1 order-md-0">
    <div class="dropdown">
        <button class="btn btn-outline-primary dropdown-toggle w-100" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ isset($currentcategory) ? $currentcategory->name : 'Filter By Categories' }}
        </button>
        <ul class="dropdown-menu">
            @foreach ($categories as $category)
                <li>
                    <a class="dropdown-item" href="/?categories={{ $category->slug }}{{request('search')?'&search='.request('search') : ''}}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
