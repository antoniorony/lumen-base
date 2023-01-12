<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumen - Login</title>
    @include('css.bulma')
    <link rel="stylesheet" href="<?php echo url('resources\views\css\estilo.css') ?>">
</head> 
<body class="has-background-info">
    @php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);    
        var_dump($dados);
    @endphp

    <section class="container column is-one-quarter ">
        <div class="card">
            <header class="card-header ">
            <p class="card-header-title ">
                Login
            </p>
            <button class="card-header-icon" aria-label="more options">
                <span class="icon">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </button>
            </header>
            <div class="card-content">
            <div class="content">
                <div class="field">
                    <form action="post">
                            <p class="control has-icons-left has-icons-right">
                            <input class="input" type="email" placeholder="Email">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                            <input class="input" type="password" placeholder="Password">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                            <button class="button is-success">
                                Login
                            </button>
                            </p>
                    </form>
                </div>  
                <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
            </div>
            </div>
            <footer class="card-footer">
            </footer>
        </div>
    </section>
</body>
</html>