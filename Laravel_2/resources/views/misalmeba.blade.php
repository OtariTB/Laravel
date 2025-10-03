<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamarjoba !</title>
</head>
<body>
    <h1>Gtxovt Sheavset forma</h1>

    <form action="{{ route('greeting.result') }}" method="POST">
        @csrf
        <label>თქვენი სახელი:</label><br>
        <input type="text" name="user_name" value="{{ old('user_name') }}"><br><br>

        <label>საყვარელი ფერი:</label><br>
        <input type="text" name="favorite_color" value="{{ old('favorite_color') }}"><br><br>

        <label>რისი გაკეთება გიყვართ ყველაზე მეტად?</label><br>
        <textarea name="favorite_activity">{{ old('favorite_activity') }}</textarea><br><br>

        <button type="submit">გაგზავნა</button>
    </form>
</body>
</html>