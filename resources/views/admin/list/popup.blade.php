<table>
    <tr>
        <th>Naam</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($popups as $popup)
        <tr>
            <td>{{ $popup->name }}</td>
            <td><a href="{{ route('edit.popup', $popup->id) }}">X</a></td>
            <td><a href="{{ route('delete.popup', $popup->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen popupmarkten</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.popup') }}">Nieuw</a>
<br /><br /><a href="{{ route('admin') }}">Terug</a>