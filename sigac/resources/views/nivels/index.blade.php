<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
     <h1>Niveis: </h1>
     @foreach ($nivels as $nivel)
        <div>
            <h2>{{ $nivel->nome }}</h2>
            <hr>
        </div>
     @endforeach
</div>
