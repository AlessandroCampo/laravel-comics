@extends('layouts.layout')
@section('main')
    <main>

        <div class="comics-container">
            <div class="label top-left">
                current series
            </div>
            <div class="label bottom-middle">
                <a href="/details">
                    load more
                </a>

            </div>
            @foreach ($comics_db as $item)
                <div class="card">
                    <div class="img" style="background-image: url('{{ $item['thumb'] }}');">
                    </div>

                    <div>
                        {{ $item['title'] }}
                    </div>
                </div>
            @endforeach
        </div>
        <section class="icons">
            <div class="icons-container">
                @foreach ($icons as $icon)
                    <div class="icon-card">
                        <img src="{{ Vite::asset($icon['path']) }}" alt="">
                        {{ $icon['name'] }}
                    </div>
                @endforeach
            </div>

        </section>

    </main>
@endsection


<style>
    div.label {
        background-color: #0282f9;
        font-weight: bolder;
        padding-inline: 25px;
        padding-block: 10px;
        position: absolute;
        text-transform: uppercase;
    }

    div.label.top-left {
        font-size: 2em;
        transform: translateY(-50%);
        top: 0%;
        left: 0%;
    }

    div.label.bottom-middle {
        font-size: 0.8em;
        transform: translateX(-50%);
        padding-inline: 55px;
        top: 90%;
        left: 50%;
    }

    .comics-container {
        width: 75%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 1.5em;
        flex-wrap: wrap;
        color: white;
        justify-content: space-between;
        padding-top: 3.5em;
        padding-bottom: 7em;
        position: relative;
    }

    .card {
        width: calc((100% - 10em) / 6);
        height: 250px;
        font-size: 0.8em;
        text-align: center;
        text-transform: uppercase;
        font-weight: bolder;
        display: flex;
        flex-direction: column;
        gap: 1.2em;
    }

    .img {
        width: 100%;
        height: 80%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    div.icons-container {

        width: 75%;
        margin: 0 auto;
        padding-block: 3.2em;
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    section.icons {
        background-color: #0282f9;
    }

    div.icon-card {
        color: white;
        display: flex;
        text-transform: uppercase;
        font-weight: bold;
        align-items: center;
        gap: 15px;
    }

    div.icon-card img {
        height: 70px;
    }

    div.icon-card:last-child img {
        height: 50px;
    }
</style>
