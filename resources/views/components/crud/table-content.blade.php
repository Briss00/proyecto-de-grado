<tr>
    <th scope="row">{{ $key }}</th>
    @yield('datas')
    <td>
        <a href="{{ route($edit_route_name, $data->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route($delete_route_name, $data->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>

    </td>
</tr>
