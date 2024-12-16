<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Person</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Contact Person</h1>
    <form action="{{ route('contacts.index') }}" method="get" class="container">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
    </form>
    <div class="container d-flex justify-content-center flex-wrap gap-3 py-5">
        @forelse ($contacts as $contact)
            <div class="card">
                <div class="card-body">
                    <p>{{ $contact->name }}</p>
                    <p>{{ $contact->nickname }}</p>
                    <p>{{ $contact->phone_number }}</p>
                    <img src="{{ $contact->image }}" alt="img">
                </div>
            </div>
        @empty
            <div class="card">
                <div class="card-body">
                    <p>Not Found</p>
                </div>
            </div>
        @endforelse
    </div>
    <div class="container d-flex justify-content-center">
        <div>
            {{ $contacts->links() }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>