<html>


    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" type="text/css" href="css/custom.css">


        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>


<body>
<div class="container">
<form action = "/edit/<?php echo $data[0]->id; ?>" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <table>
        <tr>
            <td>Name</td>
            <td>

                <input type = 'text' name = 'name'
                       value = '<?php echo$data[0]->name; ?>'/>
            </td>
        </tr>
        <tr>
            <td>lastname</td>
            <td>
                <input type = 'text' name = 'lastname'
                       value = '<?php echo$data[0]->lastname; ?>'/>
            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Update student" />
            </td>
        </tr>
    </table>

</form>
</div>
</body>
</html>