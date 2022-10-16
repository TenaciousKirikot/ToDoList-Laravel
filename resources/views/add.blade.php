@extends('template')
@section('title')
Add Task
@endsection

@section('nav1-class')
active
@endsection

@section('body')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <form method="POST" action="add-task">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        Title:<br>
        <input type="text" name="title"><br>
        Description:<br>
        <input type="text" name="description"><br>
        Starts:<br>
        <input type="datetime-local" name="starts"><br>
        Ends:<br>
        <input type="datetime-local" name="ends"><br>
        Status:<br>
        <input type="text" name="status" list="statusList">
        <datalist id="statusList">
            <option value="Started">
            <option value="In Progress">
            <option value="Completed">
        </datalist>
        <input type="submit">
    </form>
@endsection