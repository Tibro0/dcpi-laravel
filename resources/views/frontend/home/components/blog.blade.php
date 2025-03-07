<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Latest News</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- blog post -->
            @foreach ($blogs as $blog)
                <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div
                        class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset($blog->image) }}" alt="Post thumb">
                        <div class="card-body">
                            <!-- post meta -->
                            <ul class="list-inline mb-3">
                                <!-- post date -->
                                <li class="list-inline-item mr-3 ml-0">{{ date('F d, Y', strToTime($blog->date)) }}</li>
                                <!-- author -->
                                <li class="list-inline-item mr-3 ml-0">By {{ $blog->user->name }}</li>
                            </ul>
                            <a href="{{ route('blog.details', $blog->slug) }}">
                                <h4 class="card-title">{{ limitText($blog->title, 26) }}</h4>
                            </a>
                            <p class="card-text">{{ $blog->short_description }}</p>
                            <a href="{{ route('blog.details', $blog->slug) }}" class="btn btn-primary btn-sm">read
                                more</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
