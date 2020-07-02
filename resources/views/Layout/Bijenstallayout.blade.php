@section('content')
    <div class="container">
        <div class="content">
            <div class="title m-b-md" style="text-align: center; padding-top: 8vh; color: #9fb23a; ">
                <h1>Bijenstal Pagina</h1>
            </div>

            <div class="row" style="padding-top: 5vh; padding-bottom: 5vh;">
                <div class="column" style="padding-left: 1vw;"><blockquote>
                        @foreach($text as $texts)
                            <h1 style="color: #9fb23a">{{ $texts->Titel }}</h1> <h2 style="color: #ffd73d">{{ $texts->SubTitel }}</h2> <div>{{ $texts->Tekst }}</div>
                        @endforeach

                    </blockquote></div>
                <div class="column">
                    <img class="img-fluid" style="max-width: 100%;" src="{{asset('images/image002.png')}}">
                </div>
            </div>

        </div>
    </div>

@endsection
