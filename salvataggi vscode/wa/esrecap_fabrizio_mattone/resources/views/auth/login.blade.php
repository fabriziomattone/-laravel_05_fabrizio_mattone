<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2 class="text-center">Accedi</h2>
        </div>
    </div>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('login')}}" method="POST">
                    @csrf
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
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label for="remember" class="form-label">Ricordami</label>
                      </div>
                    <button type="submit" class="btn btn-dark">accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>