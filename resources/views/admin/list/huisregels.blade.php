<table>
    <tr>
        <th>Question</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($huisregels as $huisregel)
        <tr>
            <td>{{ $huisregel->question }}</td>
            <td><a href="{{ route('edit.huisregel', $huisregel->id) }}">X</a></td>
            <td><a href="{{ route('delete.huisregel', $huisregel->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen huisregels</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.huisregel') }}">Nieuw</a>
<br /><br /><a href="{{ route('admin') }}">Terug</a>