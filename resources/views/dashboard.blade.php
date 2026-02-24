<h1>Dashboard</h1>

@auth
    <p>Halo, {{ auth()->user()->name }}</p>
@endauth

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>