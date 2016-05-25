<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Email</title>
</head>
<body>
<p style="margin-bottom: 0;">
    From: {{ $name }}
</p>

<p>
    Email: {{ $email }}
</p>

<p>
    @foreach ($messageLines as $messageLine)
        {{ $messageLine }}<br>
    @endforeach
</p>
</body>
</html>