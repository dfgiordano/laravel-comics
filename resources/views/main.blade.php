<main>
    <section class="container">
        <div class="cards">
            @foreach ($comicsArray as $key)
            <div class="card">
                <a href="#">
                    <img class="tp" src="{{ $key['thumb'] }}" alt="{{ $key['series'] }}">
                </a>
                <a href="#">
                    <h3> {{ $key['series'] }} </h3> 
                </a>
            </div>
                
            @endforeach
        </div>  
    </section>
    
</main>