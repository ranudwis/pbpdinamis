<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>login</h1>

        <form method="post" action="{{ url('login') }}">
            @csrf

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <input type="text" name="nama" />

            <input type="submit" />
        </form>
    </body>
</html>
