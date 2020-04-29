<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Quotes</title>
</head>
<body>
    <?php
    $quotes = array(
        "You're gonna need a bigger boat.",
        "May the Force be with you... always.",
        "I'm as mad as hell, and I'm not going to take it anymore!",
        "You talkin' to me?",
        "I'll make him an offer he can't refuse.",
        "Yo, Adrian!",
        " Your asking me how smart I am?! OK, I'll tell you - Let me put it this way, have you ever heard of Plato, Aristotle, Socrates? \r\n Yes \r\n MORONS! ALL OF THEM!! "
    );
    ?>
    <h1>TechCareers Favourite Films</h1>
    <form action="" method="GET">
        Enter a number: <input type="text" name="quote-number">
        <input type="submit">
    </form>
    <p><?php echo $quotes[$_GET["quote-number"]] ?></p>
</body>
</html>