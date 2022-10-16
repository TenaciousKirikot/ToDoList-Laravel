@extends('header')

   @section('content')
   <?php
  DB::insert('insert into cats_table (name, age, sex) values (?, ?,?)', ['Леха', 9,1]);
   ?>
    @endsection
