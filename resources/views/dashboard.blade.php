<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --bg: #ffffff;
            --surface: #ffffff;
            --surface-soft: #f8f9fa;
            --border: #dee2e6;
            --text: #212529;
            --muted: #6c757d;
            --primary: #0d6efd;
            --primary-dark: #0b5ed7;
            --danger: #dc3545;
            --shadow: none;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background: var(--bg);
            min-height: 100vh;
        }

        a {
            color: #0d6efd;
            text-decoration: none;
        }

        a:hover {
            color: #0a58ca;
            text-decoration: underline;
        }

        .container,
        .cotainer {
            width: min(100%, 1140px);
            margin: 0 auto;
            padding: 0 12px;
        }

        .navbar {
            background: #e3f2fd !important;
            border-bottom: 1px solid #d7e7f2;
            padding: 12px 0;
            margin-bottom: 48px;
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .navbar-brand {
            font-size: 1.55rem;
            font-weight: 500;
            color: var(--text);
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 6px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-link {
            display: inline-block;
            padding: 8px 12px;
            color: rgba(0, 0, 0, 0.55);
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: rgba(0, 0, 0, 0.7);
            text-decoration: none;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .col-md-4 {
            width: min(100%, 600px);
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 4px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .card-header {
            margin: 0;
            padding: 10px 20px;
            font-size: 2rem;
            font-weight: 700;
            background: #f8f9fa;
            color: #212529;
            border-bottom: 1px solid var(--border);
        }

        .card-body {
            padding: 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 4px;
            font-size: 1rem;
            color: var(--text);
            background: #fff;
            outline: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .checkbox {
            color: var(--text);
            font-size: 1rem;
        }

        .d-grid {
            display: grid;
        }

        .btn {
            border: 0;
            border-radius: 4px;
            padding: 10px 16px;
            font-size: 1rem;
            font-weight: 400;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-dark,
        .btn-block {
            width: 100%;
        }

        .btn-dark {
            background: #212529;
            color: #fff;
        }

        .btn-dark:hover {
            background: #1c1f23;
        }

        .text-center {
            text-align: center;
        }

        .text-danger {
            display: inline-block;
            margin-top: 6px;
            color: var(--danger);
            font-size: 0.9rem;
        }

        .login-form,
        .signup-form {
            padding: 0 0 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--surface);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);
        }

        thead {
            background: #f8f9fa;
            color: #212529;
        }

        th,
        td {
            padding: 16px 18px;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        tbody tr:hover {
            background: #f8f9fa;
        }

        tbody tr:last-child td,
        tbody tr:last-child th {
            border-bottom: 0;
        }

        @media (max-width: 768px) {
            .navbar .container,
            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .card-header,
            .card-body,
            th,
            td {
                padding-left: 16px;
                padding-right: 16px;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Laravel Training</a>
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.createUser') }}">Create user</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>
