@include('layouts.blog.header')

<section class="section py-5">
    <div class="row mb-3">
        <div class="col-md-12 text-right">
            <a href="{{ route('blogs.add') }}" class="btn btn-primary">Add Blog</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('alert'))
                <div class="{{ session()->get('class') }}">
                    {{ session()->get('alert') }}
                <?php  session()->flush('alert');  
                       session()->flush('class');  ?>
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-12 col-md-4 mb-2">
                <div class="card rounded shadow h-100">
                    <div class="card-body">
                        <h1>{{ $blog->title }}</h1>
                        <p>{{ $blog->excerpt }}...</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('blogs.view', $blog->slug) }}" type="submit" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('blogs.edit', $blog->slug) }}" type="submit" class="btn btn-info"><i class="fas fa-pencil"></i></a>
                        <a href="{{ route('blogs.delete', $blog->slug) }}" type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@include('layouts.blog.footer')