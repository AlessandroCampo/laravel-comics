@extends('layouts.layout')
@section('main')
    <section class="comic-detail">

        <div class="detail-container">
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
    </section>
@endsection


<style>
    .comic-detail {
        width: 100%;
    }

    .detail-container {
        width: 75%;
        margin: 0 auto;
    }
</style>
