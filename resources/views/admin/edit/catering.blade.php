<form method="POST">
    {{ csrf_field() }}
    Name:<br /><input type="text" name="name" value="{{ old('name', $catering->name) }}" /><br /><br />
    Description:<br /><textarea name="description">{{ old('description', $catering->description) }}</textarea><br /><br />
    Picture url:<br /><input type="text" name="picture_url" value="{{ old('picture_url', $catering->picture_url) }}" /><br /><br />
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

<br /><br /><a href="{{ route('list.catering') }}">Terug</a>