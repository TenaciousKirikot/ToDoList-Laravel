@extends('template')
@section('nav1-class')
@endsection

@section('title')
TODO List
@endsection

@section('body')
    @foreach($data as $e)
        <?php
            echo $e['name'].'  '.$e['age'].'<br>';

        ?>
        <form action="delete-cheese" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <?php 
                echo '<input type="hidden" value="'.$e['id'].'" name="id">';
            ?>
            <input type="submit">
        </form><br>
    @endforeach
@endsection