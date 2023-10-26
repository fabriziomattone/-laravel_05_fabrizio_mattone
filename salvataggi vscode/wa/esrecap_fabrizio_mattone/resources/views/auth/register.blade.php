<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2 class="text-center">Registrati</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                      @error('name')
                          <div class="fst-italic">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                            <div class="fst-italic">{{$message}}</div>
                        @enderror
                    </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >
                        @error('password')
                            <div class="fst-italic">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-dark">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>