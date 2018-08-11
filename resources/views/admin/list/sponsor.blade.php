<table>
    <tr>
        <th>Naam</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($sponsors as $sponsor)
        <tr>
            <td>{{ $sponsor->name }}</td>
            <td><a href="{{ route('edit.sponsor', $sponsor->id) }}">X</a></td>
            <td><a href="{{ route('delete.sponsor', $sponsor->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen sponsoren</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.sponsor') }}">Nieuw</a>
<br /><br /><a href="{{ route('admin') }}">Terug</a>