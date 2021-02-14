<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="content">
                <form class="form-horizontal" method="GET" action="/api/sortData">
                    {{ csrf_field() }}

                    <div>
                        <label>Order by rating</label>
                        <select id="rating" name="rating">
                            <option value="highest">highest</option>
                            <option value="lowest">lowest</option>
                        </select>
                    </div>
                    <div>
                        <label>Minimum rating</label>
                        <input type="text" id="minRating">
                    </div>
                    <div>
                        <label>Order by date</label>
                        <select id="date" name="date">
                            <option value="newest">newest</option>
                            <option value="oldest">oldest</option>
                        </select>
                    </div>
                    <div>
                        <label>Prioritize by text</label>
                        <select id="prioritize" name="prioritize">
                            <option value="yes">yes</option>
                            <option value="no">no</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Sort now
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </body>
</html>
