@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1></div>
        <div class="card-body">
            <form action="/contact" method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea name="msg" class="form-control" id="msg" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send</button>
            </form>
        </div>
    </div>
@endsection