<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Consultas Eloquent
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="{{ route('all') }}">
                Lista de usuarios todos
            </a>
        </li>
        <li>
            <a href="{{ route('get','m') }}">
                Lista de usuarios Genero: Masculino
            </a>
        </li>
        <li>
            <a href="{{ route('get','f') }}">
                Lista de usuarios Genero: Femenino
            </a>
        </li>
    </ul>
</li>