<table>
    <tr>
        <th>Question</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @forelse($faqs as $faq)
        <tr>
            <td>{{ $faq->question }}</td>
            <td><a href="{{ route('edit.faq', $faq->id) }}">X</a></td>
            <td><a href="{{ route('delete.faq', $faq->id) }}">X</a></td>
        </tr>
    @empty
        <tr>
            <td colspan="3">Nog geen faq</td>
        </tr>
    @endforelse
</table>
<a href="{{ route('new.faq') }}">Nieuw</a>
<br /><br /><a href="{{ route('admin') }}">Terug</a>