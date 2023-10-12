<div>
    <h4>No cuenta con un correo institucional</h4>
    
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Cerrar Sesión</button>
</form>
</div>
