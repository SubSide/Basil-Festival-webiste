<table>
    <tr>
        <th>Naam</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($artists as $artist)
        <tr>
            <td>{{ $artist->name }}</td>
            <td><a href="{{ route('edit.artist', $artist->id) }}">X</a></td>
            <td><a href="{{ route('delete.artist', $artist->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen artiesten</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.artist') }}">Nieuw</a>
<br /><br /><a href="{{ route('admin') }}">Terug</a>