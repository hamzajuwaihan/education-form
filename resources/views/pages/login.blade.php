@extends('pages.layout.master')

@section('content')
    <form action="" method="post" class="container mt-5 md-5 p-5">
        <label for="username" class="form-label">UserName:</label>
        <input type="text" name="username" id="username" class="form-control">
    
        <label for="email" class="form-label">email:</label>
        <input type="text" name="email" id="email" class="form-control">
        
        <label for="password" class="form-label">password:</label>
        <input type="text" name="password" id="password" class="form-control">
        <button type="submit" class="btn btn-primary md-5 mt-2">Submit</button>
    </form>
@endsection