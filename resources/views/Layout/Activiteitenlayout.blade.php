@section('content')

<div class="container">
    <div class="content">
        <div class="title m-b-md" style="text-align: center; padding-top: 8vh; color: #9fb23a; ">
            <h1>Activiteiten Pagina</h1>
        </div>

        <div class="row" style="padding-top: 5vh; padding-bottom: 5vh;">
            <div class="column" style="padding-left: 1vw;"><blockquote>
                    @foreach($text as $texts)
                        <h1 style="color: #9fb23a">{{ $texts->Titel }}</h1> <h2 style="color: #ffd73d">{{ $texts->SubTitel }}</h2> <div>{{ $texts->Tekst }}</div>
                        @endforeach

                </blockquote></div>
            <div class="column">
                <div>
                    <form action="{{url('Cursussen')}}" class="was-validated" method="post">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        <label for="Cursus">Cursus</label>
                        <select id="Cursus" name="Cursus">
                            <option value="Cursus1">Cursus1</option>
                            <option value="Cursus2">Cursus2</option>
                            <option value="Cursus3">Cursus3</option>
                        </select>
                        <input type="submit" value="Submit">
                    </form>
                </div>
             </div>
        </div>

    </div>
</div>
@endsection
