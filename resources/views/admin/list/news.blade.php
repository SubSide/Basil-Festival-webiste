<table>
    <tr>
        <th>Naam</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($news as $newsItem)
        <tr>
            <td>{{ $newsItem->title }}</td>
            <td><a href="{{ route('edit.news', $newsItem->id) }}">X</a></td>
            <td><a href="{{ route('delete.news', $newsItem->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen nieuws</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.news') }}">Nieuw</a>