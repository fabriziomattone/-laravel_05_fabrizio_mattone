<x-layout>

    <div class="container my-5">
        <div class="row">
            <h1 class="text-center">ANIME</h1>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            @foreach ($animes as $anime)
                <div class="col-12 col-md-3 my-2 d-flex justify-content">
                    <x-card :anime="$anime" />
                </div>
            @endforeach
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <h2>anime</h2>
        </div>
    </div>


    <div class="container my-5">
        <div class="row" id="wrapper"></div>
    </div>

    <script>
        fetch('{{ route('api.index') }}')
            .then(response => response.json())
            .then(data => {
                let wrapper = document.querySelector('#wrapper');
                data.forEach(item => {
                    let col = document.createElement('div');
                    col.classList.add('col-12', 'col-md-3', 'my-3', 'd-flex', 'justify-content');
                    let card = document.createElement('div');
                    card.classList.add('card');
                    card.style.width = '18rem';
                    card.innerHTML = `
                        <img src="${item.img}" class="card-img-top" alt="...">
                         <div class="card-body">
                        <h5 class="card-title">${item.title}</h5>
                        <p class="card-text">${item.genre}</p>
                        <p class="card-text">${item.episodes}</p>
                        </div>`;
                        col.appendChild(card);
                        wrapper.appendChild(col);


                });
            })
            .catch(error => {
                console.error('si è verificato un problema:', error);
            })
    </script>


</x-layout>
