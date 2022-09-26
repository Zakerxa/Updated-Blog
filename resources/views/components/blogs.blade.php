@props(['blogs', 'populars']);

<div class="container">
    {{-- Search and Filter --}}
    <div class="row justify-content-center">
        {{-- Search By Input --}}
        <div class="col-12 col-md-8 col-lg-8 p-1 order-md-1">
            <form action="" class="d-flex" role="search" method="get">
                <input name="search" value="{{ request('search') }}" class="form-control me-2" type="search"
                    placeholder="Search . . ." aria-label="Search">
                @if (request('categories'))
                    <input type="hidden" name="categories" value="{{ request('categories') }}">
                @endif
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
        {{-- Filter By Category --}}
        <x-category-dropdown />
    </div>

    {{-- Show All Blogs --}}
    <div class="row justify-content-center pt-4 pb-4">
        <div class="col-12 col-md-8 pb-5">
            <x-latest-blogs :blogs="$blogs"></x-latest-blogs>
            <div class="row pt-4">
                <div class="col-12">
                    {{ $blogs->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 pb-5">
            <x-rightside-blogs :acceptor="$populars" msg="Popular" />
        </div>
    </div>

    <div class="row">

    </div>

</div>
