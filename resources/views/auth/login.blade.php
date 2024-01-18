<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <style>
       /* Gaya umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0; /* Hapus margin bawaan dari body */
        }

        .container {
            max-width: 420px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 12px;
        }

        .container h2 {
            text-align: center;
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

        /* Media Query untuk perangkat berukuran kecil (seperti handphone) */
        @media only screen and (min-width: 601px) and (max-width: 1024px) {
            .container {
                max-width: 80%; 
                padding: 30px;
            }
        }


    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-2">
            <p>Version 2.0</p> 
            <img src="{{asset('app-assets/images/logo/prasetia.png')}}" alt="Logo" width="135px">
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

        <form method="POST" action="{{ route('custom.login') }}">
        @csrf

            <div class="form-group">
                <label for="login_type">Select Type Login:</label>
                <select name="login_type" id="login_type" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="department">Pengguna Departemen</option>
                </select>
            </div>

            <div class="form-group">
                <label for="noreg">Noreg:</label>
                <input type="number" name="noreg" id="noreg" :value="old('noreg')" required autofocus autocomplete="username"  class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="show_password" name="show_password">
                <label class="form-check-label" for="show_password">{{ __('Show Password') }}</label>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-danger">Login</button>
            </div>
        </form>

        <p class="card-subtitle text-muted text-center font-small-3 my-1"><span>Don't have an account ? <a href="mailto:kpi@prasetia.co.id?subject=Request%20Account%20User%20KPI%20Corporate&body=Silakan%20Isi Form%20Di Bawah ini.%0ANoreg :%20......... %0AEmail :%20......... %0ANama : ........" class="card-link">Request account</a></span></p>
        <p class="card-subtitle text-muted text-center font-small-3 my-1"><span>Forget an account ? <a href="{{ route('password.request') }}" class="card-link">Forget</a></span></p>
    </div>
</body>

</html>

<script>
    const showPasswordCheckbox = document.getElementById('show_password');
    const passwordInput = document.getElementById('password');

    showPasswordCheckbox.addEventListener('change', function() {
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>


<script>
  function openLarkForm() {
    var toEmail = 'kpi@prasetia.co.id';
    var subject = 'Request Account User KPI Corporate';
    var body = 'Silakan Isi Form Di Bawah ini.%0AEmail : ........ %0ANama : ........';
    
    var larkLink = 'https://prasetia.larksuite.com/mail?to=' + encodeURIComponent(toEmail) + '&subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
    
    // Membuka jendela baru
    window.open(larkLink, '_blank');
  }
</script>