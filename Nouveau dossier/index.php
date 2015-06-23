<! Doctype html ><!--page de connection-->
<html>
<head>
    <title>Connection</title>
    <!-- metas -->
    <meta charset="UTF-8" />
    <!-- style -->
    <link rel="stylesheet" href="Css/index.css" />
    <!-- scripts -->
    <script src="Js/index.js" ></script>
</head>
<body>
<?php //erreur de connexion
if (!empty($_POST["warning"]))
{
    echo "<div class='warning'>".$_POST["warning"]."</div>";
} ?>

<div id="entête">
    <p>Connection</p>
</div>

<div class="formulaire">
    <p>
    <!-- formulaire de connection -->
    <form id="test" action="Connection.php" method="post">
        <table id="tableForm">
            <tr>
                <td>
                    <input type="email" required="required" name="mail" placeholder="Mail" />
                </td>

            </tr>
            <tr>
                <td>
                    <input type="password" required="required" name="pass" placeholder="Mot de Passe" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit">
                </td>
                <td>
                    <a href="enregistrement.php" ><input type="button"  value="Inscription" /> </a>
                </td>
            </tr>
        </table>
    </p>
</div>


</body>
</html>


