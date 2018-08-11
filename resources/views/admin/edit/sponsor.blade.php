<form method="POST">
    {{ csrf_field() }}
    Name:<br /><input type="text" name="name" value="{{ old('name', $sponsor->name) }}" /><br /><br />
    ImageUrl:<br /><input type="text" name="imageUrl" value="{{ old('imageUrl'. $sponsor->imageUrl) }}" /><br /><br />
    Description:<br /><textarea name="description">{{ old('description', $sponsor->description) }}</textarea><br /><br />
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

<br /><br /><a href="{{ route('list.sponsors') }}">Terug</a>