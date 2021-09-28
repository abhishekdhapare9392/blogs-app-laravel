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
            <form action="{{route('blogs.save')}}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group mb-2">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug">
                </div>
                <div class="form-group mb-2">
                    <label for="">Content</label>
                    <textarea name="body" id="body" rows="5" class="form-control" placeholder="Content"></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" rows="3" class="form-control" placeholder="Excerpt"></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="">Author</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Author">
                </div>
                <div class="form-group mb-2">
                    <input type="submit" value="Save Blog" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>
@include('layouts.blog.footer')
