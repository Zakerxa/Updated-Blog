<div class="row">
    <div class="col-12">
        <h1 class="border-bottom p-3"> {{ $msg }} Posts</h1>
     </div>
    @foreach ($acceptor as $blog)
        <div class="col-12">
            <div class="m-1 card shadow">
                <img src="https://zakerxa.com/images/{{ $blog->blog_id }}/{{ $blog->pimg }}" alt="">
                <div class="card-body">
                    <a href="/blog/{!! $blog->blog_id !!}">
                        <h5 class="card-title">{!! html_entity_decode($blog->title) !!}</h5>
                    </a>
                    <a href="/?categories={{ $blog->category->slug }}">
                        <p>{{ $blog->category->name }}</p>
                    </a>
                    <p class="card-text">{{ Str::substr($blog->fcontent, 0, 75) }} ...</p>
                    <div class="row">
                        <div class="col">
                            <p class="card-text"><small
                                    class="text-muted">{{ \Carbon\Carbon::parse($blog->created_date)->diffForHumans() }}</small>
                            </p>
                        </div>
                        <div class="col text-end">
                            <p class="card-text"><small class="text-muted">{{ $blog->views }} views</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
