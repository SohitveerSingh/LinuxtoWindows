<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">

                {{ session('status') }}

            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            {{-- <label for="email"></label> --}}
            <input type="email" name="email">
            <button type="submit">{{ __('Reset Password') }}</button>
        </form>
    </div>
</body>

</html>
