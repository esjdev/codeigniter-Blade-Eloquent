<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

@extends('header.app')

@section('title','Home Page')

@section('content')
    <hr>
    <h3>List Users</h3>
    <ul>
        @foreach ($users as $value)
            <li>Username: {{ $value->username }}</li>
            <li>Email: {{ $value->email }}</li><br>
        @endforeach
    </ul>
@stop