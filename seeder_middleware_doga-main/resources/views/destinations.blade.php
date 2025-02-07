<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($destinations as $destination)
            <li>{{$destination->destination}} - {{$destination->departure}} - {{$destination->price}} <br>
            @if (auth()->check() && auth()->user()->role == 'user')
                    <form action="{{ route('destination.show', $destination->id)}}" method="GET">
                        <input type="submit" value="Mutat">
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>