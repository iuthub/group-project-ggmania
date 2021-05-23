<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form - Pure Codding</title>
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}"/>
</head>
<body>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" rel="stylesheet">    <div class="textbox">
<div class="logo" style="text-align:center;">
    <img src="{{ asset('/logo.svg') }}" alt="Logo" height="100" width="100">
</div>
    <div class="Registration">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="post" action="{{route('register')}}">
            @csrf
            <div class="login-text"><p  style="font-size:2em;font-weight: 800;">Registration</p></div>
            <div class="input-group">First name:
               <input name="name" type="text" placeholder="First Name" required>
            </div>
            <div class="input-group">Last name:
                <input name="last_name" type="text" placeholder="Last Name" required>
            </div>
            <div class="input-group">Username:
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">E-mail:
                <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <div class="input-group">Password:
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">Confirm password:
                <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
            </div>
            <div class="input-group">Phone number:
                <input type="text" placeholder="Phone number" name="phone_number"  minlength="9" maxlength="9" required>
            </div>
            <div class="input-group">Date of birth:
                <input type="date" placeholder="Date of Birth" name="birth_date" required>
            </div>
            <div class="input-group">Pastal code:
                <input type="text" placeholder="Postal code" name="postal_code" required>
            </div>
            <div class="input-group">City:
                <input type="text" placeholder="City" name="city" required>
            </div>
            <div class="input-group">Passport number:
                <input type="text" placeholder="Passport Number" name="passport_number" required>
            </div>
            <div class="button-register"><button type="submit" class="register">Create account</button></div>
        </form>
    </div>
</div>
</body>
</html>
