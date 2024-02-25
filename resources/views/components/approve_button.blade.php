<form action="{{ route('admin.login_manager_approve', $query->id) }}" method="POST">
    @csrf
    <button type='submit' class='btn btn-success'><i class='bi bi-check'></i>Izinkan login</button>
</form>
