<table>
    <tr>
        <th>Naam</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($catering as $cater)
        <tr>
            <td>{{ $cater->name }}</td>
            <td><a href="{{ route('edit.catering', $cater->id) }}">X</a></td>
            <td><a href="{{ route('delete.catering', $cater->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen catering</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.catering') }}">Nieuw</a>
<br /><br /><a href="{{ route('admin') }}">Terug</a>