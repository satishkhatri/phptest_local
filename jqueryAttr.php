<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>position demo</title>
    <style>
        div {
            padding: 15px;
        }
        p {
            margin-left: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<div>
    <p>Hello</p>

</div>
<p></p>

<script>
    var p = $( "p:first" );
    var position = p.position();
    $( "p:last" ).text( "left: " + position.left + ", top: " + position.top );
</script>
echo "test working";
</script>g

</body>
</html>