<x-layout>

    <div class="container my-5">
        <div class="row">
            <h2 class="text-center">Inserisci libro</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            
            <div class="col-12 col-md-8">
                <form action="{{route('book.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                      @error('title')
                          <div class="fst-italic">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}">
                        @error('author')
                            <div class="fst-italic">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="cover" class="form-label">Copertina</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        @error('cover')
                            <div class="fst-italic">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="plot" class="form-label">Trama</label>
                        <textarea name="plot" id="plot" cols="30" rows="5" class="form-control">{{old('plot')}}</textarea>
                        @error('plot')
                            <div class="fst-italic">{{$message}}</div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-dark">Inserisci libro</button>
                </form>
            </div>

        </div>
    </div>

</x-layout>