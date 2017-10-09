<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <div class="col push-l2 push-m1 l8 m10 s12">
            <div class="card col push-l1 push-m1 l8 m10 s12">
                <div class="row">

                    <form class="col push-l1 push-m1 l10 m10 s12" method="post" action="submit">
                        {{csrf_field()}}
                        <h2>Data Entry Form</h2>
                        <div class="row">
                            <div class="input-field ">

                                <input placeholder="Placeholder" id="first_name" name="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field">

                                <input placeholder="Placeholder" id="last_name" name="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field">

                                <input type="text" class="datepicker validate" id="birthdate" name="birthdate">
                                <label for="birthyear">Date of Birth</label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l5 m5 push-l1 push-m1 s12">
                                <select name="origin" id="origin">
                                    <option value="0" disabled selected>Choose your origin</option>
                                    <option value="1">Manila</option>
                                    <option value="2">Boracay</option>
                                    <option value="3">Cebu</option>
                                </select>
                                <label>City of Origin</label>
                            </div>
                            <div class="input-field col l5 m5 push-l1 push-m1 s12">
                                <select name="dest" id="dest">
                                    <option value="0" disabled selected>Choose your destination</option>
                                    <option value="1">Manila</option>
                                    <option value="2">Boracay</option>
                                    <option value="3">Cebu</option>
                                </select>
                                <label>City of Destination</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn cyan waves-effect waves-light right" style="margin-right:2em;" type="submit" onclick="Materialize.toast('Submitted!', 4000)" name="login">Submit!</button>
                        </div>
                    </form>

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
<script>
    $(document).ready(function() {
        $('select').material_select();
    });
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });
</script>
</body>
</html>
