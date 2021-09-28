@include('layouts.blog.header')
    <section class="section py-5">
        <div class="row">
            <div class="col-md-10 m-auto text-right">
                    <a href="{{route('blogs')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 m-auto">
                <h2>{{ $blog->title }}</h2>
                <p> By: <span class="text-muted">{{ $blog->author }}</span> At: <span class="text-muted"><?php 
                date_default_timezone_set("Asia/Kolkata");
                echo date_format($blog->created_at, 'd M Y, H:i A'); ?></span></p>
                <p>
                    {{ $blog->body }}
                </p>
            </div>
        </div>
    </section>
@include('layouts.blog.footer')