<!DOCTYPE html>
<html lang="et">
    <head>
        <?php include("templates/head.php");?> 
    </head>
    <body>
        <div class="container">
            <?php include("templates/nav.php");?>
            <ol class="breadcrumb">
                <?php if (empty($_GET['type'])) echo "<li class=\"active\"> Hinnakiri</li>"; else echo "<li><a href=\"hinnakiri.php\">Hinnakiri</a></li>"; ?>
                <li>
                    <?php if ($_GET['type'] === "lehtpuud") echo "<span class=\"active\"> Lehtpuud</span>"; else echo "<a href=\"hinnakiri.php?type=lehtpuud\">Lehtpuud</a>"; ?> | 
                    <?php if ($_GET['type'] === "okaspuud") echo "<span class=\"active\"> Okaspuud</span>"; else echo "<a href=\"hinnakiri.php?type=okaspuud\">Okaspuud</a>"; ?> | 
                    <?php if ($_GET['type'] === "muud") echo "<span class=\"active\"> Teised istikud</span>"; else echo "<a href=\"hinnakiri.php?type=muud\">Teised istikud</a>"; ?>
                </li>
            </ol>
            <div class="content navbar navbar-default">
                <?php if ($_GET['type'] === "lehtpuud") { ?>
                <h2>Lehtpuud</h2>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Eestikeelne nimetus</th>
                            <th>Ladinakeelne nimetus</th>
                            <th>Hind</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Taim1</td>
                            <td>Ladin</td>
                            <td>60€</td>
                        </tr>
                        <tr>
                            <td>Taim2</td>
                            <td>Taim4</td>
                            <td>15€</td>
                        </tr>
                        <tr>
                            <td>Taim3</td>
                            <td>Taim</td>
                            <td>10€</td>
                        </tr>
                    </tbody>
                </table>
                <?php } elseif ($_GET['type'] === "okaspuud") { ?>
                <h5>Okaspuud</h5>
                <?php } elseif ($_GET['type'] === "muud") { ?>
                <h5>Teised istikud</h5>
                <?php } else { ?>
                <p>
                <h2>Hinnakiri</h2>
                </p>
                <p>Siia tuleb mingi kirjeldus!</p>
                <?php } ?>
            </div>
            <?php include("templates/footer.php");?>
        </div>
    </body>
</html>