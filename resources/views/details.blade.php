@extends('layouts.layout')
@section('main')
    <section class="comic-detail">
        <div class="spacer"></div>

        <div class="detail-container">
            <div class="container-left">
                <img src="{{ $cardDetails['thumb'] }}" alt="">
                <h2>
                    {{ $cardDetails['title'] }}
                </h2>
                <div class="price">
                    US.PRICE: {{ $cardDetails['price'] }}
                </div>
                <p>
                    {{ $cardDetails['description'] }}
                </p>
            </div>
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">


        </div>
    </section>
@endsection


<style>
    .comic-detail {
        width: 100%;
    }

    h2 {
        color: #003f5e;
        font-size: 2.2em;
        text-transform: uppercase;
    }

    .spacer {
        height: 8vh;
        background-color: #0282f9;
    }

    .detail-container {
        width: 75%;
        margin: 0 auto;
        display: flex;
        padding-block: 5em;
        gap: 3em;
        justify-content: center;
        align-items: flex-start;
    }

    .container-left {
        width: 40%;
        line-height: 1.6;
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .container-left img {
        height: 250px;
        position: absolute;
        top: 35%;
        border: 1px solid white;
    }

    .price {
        border: 1px solid black;
        color: white;
        background-color: #55ba59;
        padding: 10px;
    }

    .detail-container>img {}
</style>
