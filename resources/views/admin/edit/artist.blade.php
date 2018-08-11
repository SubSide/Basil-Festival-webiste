<form method="POST">
    {{ csrf_field() }}
    Name:<br /><input type="text" name="name" value="{{ old('name', $artist->name) }}" /><br /><br />
    Genre:<br /><input type="text" name="genre" value="{{ old('genre', $artist->genre) }}" /><br /><br />
    Description:<br /><textarea name="description">{{ old('description', $artist->description) }}</textarea><br /><br />
    Time from:<br /><input type="text" name="time_from" value="{{ old('time_from', $artist->time_from) }}" /><br /><br />
    Time to:<br /><input type="text" name="time_to" value="{{ old('time_to', $artist->time_to) }}" /><br /><br />
    Picture url:<br /><input type="text" name="picture_url" value="{{ old('picture_url', $artist->picture_url) }}" /><br /><br />
    <input type="submit" value="Submit" />
</form>

@if($errors->any())
    Foutmeldingen:<br />
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<br /><br /><a href="{{ route('list.artists') }}">Terug</a>