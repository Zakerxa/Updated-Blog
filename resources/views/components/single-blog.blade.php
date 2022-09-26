<x-layout>
    <div class="row p-0 m-0 justify-content-center">
        <div class="p-3">
            Home / <a href="/?categories={{$blog->category->name}}">{{$blog->category->name}}</a>
        </div>
        <div class="col-12 col-lg-7">
            <h3 class="p-1">{!! html_entity_decode($blog->title) !!}</h3>
            <img src="https://zakerxa.com/images/{{ $blog->blog_id }}/{{ $blog->pimg }}" alt="" width="100%">
                <p class="pt-4">{!! $blog->fcontent !!}</p>
                <p>{!! $blog->scontent !!}</p>
                <p>{!! $blog->tcontent !!}</p>
                <p>{!! $blog->focontent !!}</p>
                <p>{!! $blog->ficontent !!}</p>
                <p>{!! $blog->sicontent !!}</p>
                <p>{!! $blog->secontent !!}</p>

                <div class="row">
                    <div class="col-12">
                        <x-comments></x-comments>
                    </div>
                </div>
        </div>


        <div class="col-12 col-lg-4 offset-lg-1">
            <x-rightside-blogs :acceptor="$relatives" msg="Relative"></x-rightside-blogs>
        </div>

    </div>
</x-layout>
