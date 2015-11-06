<html>
    <head>
        <title>Tool Box</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="sticky-footer.css" rel="stylesheet">
        <script type="text/javascript" language="javascript" src="/js/jquery-2.1.4.min.js"></script>


    <style>

    .list a{
        font-size: 1.5em;
    }
    .list label{
        font-size: 1.1em;
        color: #9494B8;
        font-weight: 100;
    }

    .title {
        font-size: 70px;
        font-weight: 100;
        font-family: 'Lato';
        text-align: center;
    }

    .error_page {
        font-size: 60px;
        font-family: 'Lato';
    }


    hr {
        height: 1px;
        border: 0;
        border-top: 1px solid #ccc;
        margin: 1em 0;
        padding: 0; 
    }

    .nav {
        text-align: center;
    }

    .footer {
        text-align: center;
        color: #9494B8;
    }

                /*
                html, body {
                    height: 100%;
                }

                body {
                    margin: 0;
                    padding: 0;
                    width: 100%;
                    display: table;
                    font-weight: 100;
                    font-family: 'Lato';
                }

                .container {
                    text-align: center;
                    display: table-cell;
                    vertical-align: middle;
                }

                .content {
                    text-align: center;
                    display: inline-block;
                }
    */
    </style>
    </head>

    <body>
        <div class="header">
            <div class="title">Tool Box
            </div>

            </div>     


        <div class="container">
                <ul class="nav nav-tabs">
                  <li id="home"><a href="{{ url('/home') }}">Home</a></li>
                  <li id="tools"><a href="{{ url('/tools') }}">Tools</a></li>
                  <li id="users"><a href="{{ url('/users') }}">Users</a></li>
                  <li id="transactions"><a href="{{ url('/transactions') }}">Transactions</a></li>
            
            <form class="navbar-form navbar-right" role="search">

                    <a href="/auth/login" class="btn btn-default">Log In</a>
                    <a href="/auth/register" class="btn btn-default">Register</a>
                
            </form>    

            </ul>
    
                        @yield('content')

        <hr>
         <div class="footer">            
            <div>
                Group 35 | Wan Zulsarhan | Copyright 2015
            </div>
         </div>

        </div>



    </body>
</html>