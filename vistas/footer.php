<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <style>
            footer{
                background-color: #151D28;
            }
            footer .logo-vanguardia img{
                width: 25em; 
                padding: 1em 2em;"
            }
            footer .logo-kia img{
                width: 12em;
            }
            @media (max-width: 600px){
                footer .logo-vanguardia img {
                width: 25em;
                padding: 0em 2em;
                }
                footer .logo-kia img {
                    width: 10em;
                }
            }
        </style>
    </head>
    <body>

        <footer>
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-1-3@m uk-flex uk-flex-middle uk-flex-center logo-vanguardia uk-margin-remove">
                    <img src="./image/logoBody.png" alt="">
                </div>
                <div class="uk-width-expand@m uk-margin-remove"></div>
                <div class="uk-width-1-4@m uk-flex uk-flex-middle uk-flex-center logo-kia uk-margin-remove">
                    <img src="./image//logoKia.png" alt="">
                </div>
            </div>
        </footer>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
    </body>
</html>