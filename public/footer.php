<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, search, form, icons" />
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/footer-distributed-with-search.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

    <body>
        <!-- The content of your page would go here. -->

        <footer class="footer-distributed">

            <div class="footer-left">

                <p class="footer-links">
                    <a href="index.php?page=homepage">Home</a>
                    ·
                    <a href="index.php?page=agenda">Agenda</a>
                    ·
                    <a href="index.php?page=contact">Contact</a>
                    ·
                    <a href="index.php?page=over-ons">Over ons</a>
                </p>

            </div>


            <div class="footer-right">

                <form action="index.php" method="GET">
                    <input type="hidden" name="page" value="zoeken">
                    <input type="text" placeholder="Vul een zoekopdracht in" name="term" />
                    <i class="fa fa-search"></i>
                </form>

            </div>

        </footer>

    </body>

</html>
