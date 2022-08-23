<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f7f7f7;
            }

            html, body {
                height: 100%;
            }

            .row {
                --bs-gutter-x: 1.5rem;
                --bs-gutter-y: 0;
                display: flex;
                flex-wrap: wrap;
                margin-top: calc(-1 * var(--bs-gutter-y));
                margin-right: 0;
                 margin-left: 0;
            }

            .row>* {
                flex-shrink: 0;
                max-width: 100%;
                padding-right: 0;
                padding-left: 0;
            }

            a{
                text-decoration: none;
                color: rgb(86, 86, 86);
                margin: 10px;
            }

            a:hover{
                color: #38598b;
                text-shadow: 0px 0px 7px rgba(0, 0, 0, 0.171);
                letter-spacing: 0.5px;
                transition: 0.7s;
            }

            i{
                margin: 5px;
            }

            .links{
                margin-top: 30px;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <section class="row h-100 mw-100">
            <div class="col-sm-12 my-auto d-flex justify-content-center">
                <div class="card-block w-80">
                
                   @yield('content')

                </div><!--w-80-->
            </div><!--col-sm-12-->
        </section><!--row-->

         <script src="https://kit.fontawesome.com/8772d4e44f.js" crossorigin="anonymous"></script>
    </body>
</html>
