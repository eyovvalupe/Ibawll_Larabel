@extends('layouts.app')

@section('title', 'Cards')

@section('content')

<section id="cards">
  @foreach ($cards as $card)
    <article class="card">
    <header>
      <h2><a href="cards/{{ $card->id }}">{{ $card->name }}</a></h2>
    </header>
    <ul>
      @each('partials.item', $card->items()->orderBy('id')->get(), 'item')
    </ul>
    <form class="new_item">
      <input type="hidden" name="card_id" value="{{ $card->id }}">
      <input type="text" name="description" placeholder="new item">
    </form>
    </article>
  @endforeach
  <article class="card">
    <form class="new_card">
      <input type="text" name="name" placeholder="new card">
    </form>
  </article>
</section>

@endsection