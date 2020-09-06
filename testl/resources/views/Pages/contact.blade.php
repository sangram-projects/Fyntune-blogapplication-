@extends('main')
@section('title', '| Contact')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>its sangram </h1>
            <p>You can contact from here</p>
            <hr>
            <form>
                <div class="from-group">
                    <label name="email">Email:</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="from-group">
                    <label name="subjecct">Subjecct:</label>
                    <input id="subjecct" name="subjecct" class="form-control">
                </div>

                <div class="from-group">
                    <label name="message">Message:</label>
                    <textarea id="message" name="message" class="form-control"> Type your message.... </textarea>
                </div>
                <hr>
                <input type="submit" value="send message" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
