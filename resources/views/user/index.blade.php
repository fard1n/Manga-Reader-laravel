@extends('layouts.app')
@section('content')
    <div>
        <h1>
            <ul>
            <li><a href="/user/{{$user->email}}/edit">{{$user->email}}</a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </h1>
    </div>
@endsection        