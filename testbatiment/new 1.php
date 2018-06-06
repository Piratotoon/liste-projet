<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>pseudo class :target</title>
    <style type="text/css">
header { border-bottom: 1px solid black;}
header p {text-align: right;}
  
#inscription , #connection {
    height: 0;
    overflow: hidden;
    transition: height 1.5s;
} 
#connection:target {
    height: 100px;
}
#inscription:target {
    height: 100px;
}
    </style>
</head>
<body>
    <header>
        <p><a href="#connection">connection</a> | <a href="#inscription">inscription</a></p>
        <form action="" id="connection">
            <fieldset>
                <legend>connection</legend>
                <label>login</label><input type="text" required />
                <label>pass</label><input type="password" required/>
                <input type="submit" value="connection"/>
                <a href="#">fermer</a>
            </fieldset>
        </form>
        <form action="" id="inscription">
            <fieldset>
                <legend>inscription</legend>
                <label>login</label><input type="text" required />
                <label>pass</label><input type="password" required />
                <input type="submit" value="inscription"/>
                <a href="#">fermer</a>
            </fieldset>
        </form>
    </header>
</body>
</html>