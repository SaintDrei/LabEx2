<?php


?>

<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php


    echo "
    <script>
    $(document).ready(function(){
        Materialize.Toast('Welcome $fullname!', 5000);


    });

    </script>


        "; ?>
</head>

<body>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo left">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col l8 push-l2">

            <div class="card col">
                <h2>Results</h2>
                <div class="row">
                    <div class="col l5">
                        <b>Full Name:</b>
                    </div>
                    <div class="col l7">
                        <b>{{$fullname}}</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col l5 s10 m10 push-l1-s1">
                        <b>Age:</b>
                    </div>
                    <div class="col l7">
                        <b>{{$age}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large pink waves-effect waves-light">
        <i class="large material-icons">add</i>
    </a>

    <ul>
        <li>
            <a class="btn-floating red"><i class="material-icons medium">note_add</i></a>
            <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

    </ul>
</div>


</body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
