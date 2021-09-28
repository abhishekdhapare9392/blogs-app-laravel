@include('layouts.blog.header')
<section class="section py-5">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('alert'))
                        <div class="{{ session()->get('class') }}">
                            {{ session()->get('alert') }}
                        </div>
                        <?php  session()->flush('alert');  
                               session()->flush('class');  ?>
                    @endif
                </div>
            </div>
            <form action="{{route('blogs.update', $blog->id)}}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $blog->title }}">
                </div>
                <div class="form-group mb-2">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ $blog->slug }}">
                </div>
                <div class="form-group mb-2">
                    <label for="">Content</label>
                    <textarea name="body" id="body" rows="5" class="form-control" placeholder="Content">{{ $blog->body }}</textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" rows="3" class="form-control" placeholder="Excerpt">{{ $blog->excerpt }}</textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="">Author</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Author" value="{{ $blog->author }}">
                </div>
                <div class="form-group mb-2">
                    <input type="submit" value="Update Blog" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>
@include('layouts.blog.footer')
