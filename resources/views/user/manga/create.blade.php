@extends('layouts.app')
@section('content')
<form  method="POST" action="/user/manags">
    {{ csrf_field() }}

    Select manga to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Manga" name="submit">
</form>    
@endsection