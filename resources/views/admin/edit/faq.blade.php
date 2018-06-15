<form method="POST">
    {{ csrf_field() }}
    Question:<br /><input type="text" name="question" value="{{ $faq->question }}" /><br /><br />
    Answer:<br /><textarea name="answer">{{ $faq->answer }}</textarea><br /><br />
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