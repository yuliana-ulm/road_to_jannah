<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <style>
            * {
            box-sizing: border-box;
            }

            body {
            background-color: #eeeeee;
            }

            img {
            display: block;
            width: 80px;
            margin: 30px auto;
            box-shadow: 0 5px 10px -7px #333333;
            border-radius: 50%;
            }

            .form {
            background-color: #ffffff;
            width: 500px;
            margin: 50px auto 10px auto;
            padding: 30px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px -3px #333;
            text-align: center;
            }

            input {
            border-radius: 100px;
            padding: 10px 15px;
            width: 50%;
            border: 1px solid #D9D9D9;
            outline: none;
            display: block;
            margin: 20px auto 20px auto;
            }

            button {
            border-radius: 100px;
            border: none;
            background: #719BE6;
            width: 50%;
            padding: 10px;
            color: #FFFFFF;
            margin-top: 25px;
            box-shadow: 0 2px 10px -3px #719BE6;
            display: block;
            margin: 55px auto 10px auto;
            }

            a {
            text-align: center;
            margin-top: 30px;
            color: #719BE6;
            text-decoration: none;
            padding: 5px;
            display: inline-block;
            }

            a:hover {
            text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="form">

            <img src="http://www.androidpolice.com/wp-content/themes/ap2/ap_resize/ap_resize.php?src=http%3A%2F%2Fwww.androidpolice.com%2Fwp-content%2Fuploads%2F2015%2F10%2Fnexus2cee_Search-Thumb-150x150.png&w=150&h=150&zc=3">
            <form method="post" action="{{ route('login.auth') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="row text-end">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Login</button>

                    </div>
                </div>
            </form>

             <a href="/register">Create account</a>

          </div>
       </body>
</html>
