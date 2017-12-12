@extends('layouts.master')

@section('title')
Happy P4 √ Ideas Blueprint.
@endsection

@section('description')
Happy P4 √ Ideas Blueprint.
@endsection

@section('content')
<div class="wrapper">
    <section>
        <div class="blueprint_delete_wrapper">
            <h2>Are you sure you want to delete {{ $blueprint->title }}?</h2>
            <form action="/blueprint/{{ $blueprint->id }}" method="post">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <input type="submit" name="submit" value="Delete - {{ $blueprint->title }}">
            </form>
            <p class='cancel'>
                <a href='{{ $previousUrl }}'>No, I changed my mind.</a>
            </p>
        </div>
    </section>
</div>
@endsection