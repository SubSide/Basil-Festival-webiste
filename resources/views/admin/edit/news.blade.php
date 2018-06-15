<form method="POST">
    {{ csrf_field() }}
    Title:<br /><input type="text" name="title" value="{{ old('title', $news->title) }}" /><br /><br />
    Content:<br /><textarea name="content">{{ old('content', $news->content) }}</textarea><br /><br />
    BackgroundColor:<br /><input type="text" name="backgroundColor" value="{{ old('backgroundColor', $news->backgroundColor) }}" /><br /><br />
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