<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #DC143C;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff0000;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <img src="{{asset('app-assets/images/logo/prasetia.png')}}" alt="Logo" width="150px">
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
        @csrf


            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" :value="old('name')" id="name" required autofocus autocomplete="name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="noreg">Noreg:</label>
                <input type="noreg" name="noreg" id="noreg" :value="old('noreg')" required autofocus autocomplete="noreg"  class="form-control">
                @error('noreg')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"  name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Register</button>
            </div>
        </form>
        <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1"><span>Already registered? <a href="{{ route('login') }}" class="card-link">Login</a></span></p>
    </div>
</body>
</html>
