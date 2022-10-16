@extends('header')
@section('title')
Привести кота в приют
@endsection

@section('content')
@endsection

@section('content2')
<form action="add" method="get">
Имя кота:<br>
<input type ="text" name="name"><br>
Возраст кота:<br>
<input type ="text" name="age"><br>
Мужской пол?
<input type ="checkbox" name="M"><br>
<input type="submit" value ="OK">
</form>
@endsection

@section('content3')
@endsection