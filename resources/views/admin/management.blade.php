<x-layout-admin>
<h1>management</h1>
<form method="POST" action="{{ route('logout') }}" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-link">Logout</button>
</form>

</x-layout-admin>