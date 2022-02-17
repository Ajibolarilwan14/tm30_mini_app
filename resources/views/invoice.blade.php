<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Create Invoice</title>
</head>
<body>
    
    <form action="{{ route('invoice.store') }}" method="post">
        @csrf
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" {{ old('amount') }} name="amount" id="amount" placeholder="amount">
                    @error('amount')
                        <p class="font-weight-bold text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" class="form-control mt-2 mb-3" {{ old('tax') }} name="tax" id="tax" placeholder="tax">
                    @error('tax')
                        <p class="font-weight-bold text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>