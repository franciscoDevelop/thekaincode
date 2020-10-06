<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    @foreach ($users['data'] as $user)
        <div>{{ $user->name }}</div>
    @endforeach

    {!! links($users['current_page'], $users['pages']) !!}
</body>

</html>