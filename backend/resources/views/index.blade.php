<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <title>Link Shortener</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            html {
                height: 100%;
            }

            body {
                font-family: 'Nunito', sans-serif;
                height: 100%;
            }

            .container {
                height: 100%;
            }

            .content {
                width: 600px;
            }

            .center-vertically {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container center-vertically" id="container">

            <div class="content">
                <h1 class="display-4">Link Shortener</h1>

                <form id="submit_link_form">
                    <div class="form-group" >
                        <label for="original_link">Enter your long link here</label>
                        <div class="input-group mb-3">
                            <input type="url" class="form-control" id="original_link" aria-describedby="original_link" placeholder="Your link">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Shorten</button>
                            </div>
                        </div>
                        <small id="original_link" class="form-text text-muted"></small>
                    </div>
                </form>

                <div>
                    <div class="alert alert-success" role="alert">
                        Your link has been shortened:
                    </div>

                    <div class="input-group mb-3">
                        <input type="url" class="form-control" id="original_link" aria-describedby="original_link">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Copy</button>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-light">Shorten another link</button>
                </div>
            </div>

        </div>
    </body>
</html>
