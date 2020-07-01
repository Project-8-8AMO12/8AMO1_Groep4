<style>
    .column {
        float: left;
        width: 50%;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    blockquote {
        /*background: #f9f9f9;*/
        border-left: 5px solid #ffd73d;
        margin: 1.5em 10px;
        padding: 0.5em 10px;
        quotes: "\201C""\201D""\2018""\2019";
    }
    blockquote:before {
        color: #ffd73d;
        /*content: open-quote;*/
        font-size: 4em;
        line-height: 0.1em;
        margin-right: 0.25em;
        vertical-align: -0.4em;
    }
    blockquote p {
        display: inline;
    }

    .active {

        color: #ffd73d;
    }

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

</style>

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
