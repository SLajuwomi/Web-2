@extends('layouts.main')
@section('title', 'Add Books')
@section('buttons')
<a href="{{ url('/') }}">Home</a>
<a class="active" href="{{ url('/addbook') }}">Add Book</a>
<a href="{{ url('/bookdetail') }}">Book Detail</a>
<a href="{{ url('/error') }}">Demo Error</a>
@stop

@section('content')
<div class="menu">
    <section>
        <img src="https://www.iconpacks.net/icons/2/free-opened-book-icon-3163-thumb.png" alt="coffee icon" />
        <h2>Add a Book</h2>
    </section>
    <div class="form">
        <form name="add-new" method="POST" action=""> <!-- //MAYBE: action="{{ url('/') }}" -->
            <section role="booktitle">
                <div class="booktitle-entry">
                    <label for="booktitle">Book Title:</label>
                    <input type="text" name="booktitle" id="booktitle" value="{{ old('booktitle') }}" />
                    @if ($errors->has('booktitle'))
                    <div class="error" style="color:red">{{ $errors->first('booktitle') }}</div>
                    @endif
                </div>
            </section>
            <section role="condition">
                <div class="bookcondition-entry">
                    <label for="bookcondition">Book Condition:</label>
                    <select name="bookcondition" id="bookconditon">
                        <option value="">Select an option</option>
                        <option value="1">1=poor</option>
                        <option value="2">2=fair</option>
                        <option value="3">3=good</option>
                        <option value="4">4=excellent</option>
                    </select>
                    @if ($errors->has('bookcondition'))
                    <div class="error" style="color:red">{{ $errors->first('bookcondition') }}</div>
                    @endif
                </div>
            </section>
            <section role="price">
                <div class="price-entry">
                    <label for="price">Book Price:</label>
                    <input type="text" name="price" id="price" value="{{ old('price') }}" />
                    @if ($errors->has('price'))
                    <div class="error" style="color:red">{{ $errors->first('price') }}</div>
                    @endif
                </div>
            </section>
            <input type="submit" value="Submit">
            @csrf
        </form>

    </div>

</div>
@stop