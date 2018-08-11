<table>
    <tr>
        <th>Naam</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($lezingen as $lezing)
        <tr>
            <td>{{ $lezing->name }}</td>
            <td><a href="{{ route('edit.lezing', $lezing->id) }}">X</a></td>
            <td><a href="{{ route('delete.lezing', $lezing->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen lezingen</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.lezing') }}">Nieuw</a>
<br /><br /><a href="{{ route('admin') }}">Terug</a>