<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holló Vadászbolt - Elérhetőség</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <script src="{{ asset('assets/js/mainJs.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>
    @extends('layout')

    @section('title', 'Kapcsolat')
    
    @section('content')
        <h1>Kapcsolat</h1>
    
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Név</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label for="message">Üzenet</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
            </div>
    
            <button type="submit" class="btn btn-primary">Küldés</button>
        </form>

        <iframe
        width="600"
        height="450"
        style="border:0"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAJFj5keCr2hLDG2hCUTfSnjTy4G4tOaQs
          &q=Space+Needle,Seattle+WA">
      </iframe>
          &q=Space+Needle,Seattle+WA">
      </iframe>
      

    @endsection
    



</body>

</html>
