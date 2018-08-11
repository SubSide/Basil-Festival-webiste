<form method="POST">
    {{ csrf_field() }}
    Name:<br /><input type="text" name="name" value="{{ old('name', $lezing->name) }}" /><br /><br />
    Description:<br /><textarea name="description">{{ old('description', $lezing->description) }}</textarea><br /><br />
    Time from:<br /><input type="text" name="time_from" value="{{ old('time_from', $lezing->time_from) }}" /><br /><br />
    Time to:<br /><input type="text" name="time_to" value="{{ old('time_to', $lezing->time_to) }}" /><br /><br />
    Picture url:<br /><input type="text" name="picture_url" value="{{ old('picture_url', $lezing->picture_url) }}" /><br /><br />
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

<br /><br /><a href="{{ route('list.lezingen') }}">Terug</a>