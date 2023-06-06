@extends('layout.adminbar')
@section('page')
<div class="blank">
    @if(session()->has('success'))
    <div class="alert alert-info" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="article-header">
        <div class="jumlah-article">
            <div class="shape">
                <div class="column">
                    <center>
                    Jumlah
                    <p id="angka">{{ $News->count() }}</p>
                    Article
                    </center>
                </div>
            </div>
        </div>
        <div class="add-article">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >
                Add Article
              </button>
        </div>
    </div>
    <div class="article-info">
        <table class="table table-borderless" >
            <thead>
                <tr>
                    <th > ID </th>
                    <th > Title </th>
                    <th > Cover </th>
                    <th > Tanggal </th>
                    <th > Author </th>
                    <th > Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($News as $New)
                <tr>
                    <th>{{ $New->id }}</th>
                    <td>{{ $New->title }}</td>
                    <td><img src="{{ asset($New->cover) }}" ></td>
                    <td>{{ $New->tanggal }}</td>
                    <td>{{ $New->author }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Edit_{{ $New->id }}" form="NewsEdit_{{ $New->id }}" >Edit</button>
                        <form action="{{ route('news.delete',[$New->id]) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <div class="modal fade" id="Edit_{{ $New->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Article</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('news.update', $New->id) }}" method="post"  id="NewsEdit_{{ $New->id }}">
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                              <label for="author" class="col-form-label">Author of post:</label>
                              <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ $New->author }}">
                              @error('author')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                          <div class="form-group">
                              <label for="title" class="col-form-label">Title of post:</label>
                              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $New->title }}">
                              @error('title')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="slug" class="col-form-label">Slug of post:</label>
                              <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $New->slug }}">
                              @error('slug')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="excerpt" class="col-form-label">Excerpt:</label>
                              <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" >{{ $New->excerpt }}</textarea>
                              @error('excerpt')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="body" class="col-form-label">Content:</label>
                              <input type="hidden" name="body" id="body">
                              <trix-editor class="form-control " input="body" rows="4" cols="50" >{{ $New->body }}</trix-editor >
                            </div>
                            <div class="form-group">
                              <label for="cover" class="col-form-label">Add image url:</label>
                              <input type="text" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" value="{{ $New->cover }}">
                              @error('cover')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                    
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Create Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/admin/news" method="post" name="ffrom">
            @csrf
            <div class="form-group">
                <label for="author" class="col-form-label">Author of post:</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author">
                @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
                <label for="title" class="col-form-label">Title of post:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="slug" class="col-form-label">Slug of post:</label>
                <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="excerpt" class="col-form-label">Excerpt:</label>
                <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt"></textarea>
                @error('excerpt')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="body" class="col-form-label">Content:</label>
                <input type="hidden" name="body" id="body">
                <trix-editor class="form-control " input="body" rows="4" cols="50" ></trix-editor>
              </div>
              <div class="form-group">
                <label for="cover" class="col-form-label">Add image url:</label>
                <input type="text" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover">
                @error('cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    const title = document.ffrom.title;
     const slug = document.ffrom.slug;
  
     title.addEventListener("keyup", function() {
         let preslug = title.value;
         preslug = preslug.replace(/ /g,"-");
         slug.value = preslug.toLowerCase();
     });
    </script>
@endsection

