@if($errors)
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif

<form action="{{ route('login.authenticate') }}" method="post">
    @csrf
    Username: <input type="string" name="username">
    <br>
    Password: <input type="password" name="password">
    <br>
    <button type="submit">Login</button>
</form>
