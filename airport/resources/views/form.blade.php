<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            @csrf
            <label for="partenza">Partenza</label>
            <select id="partenza"class="" name="departure">
                <option value="Catania">Catania</option>
                <option value="Londra">Londra</option>
                <option value="Berlino">Berlino</option>
                <option value="Milano">Milano</option>
            </select>
            <label for="arrivo">Arrivo</label>
            <select id="arrivo"class="" name="arrival">
                <option value="Catania">Catania</option>
                <option value="Londra">Londra</option>
                <option value="Berlino">Berlino</option>
                <option value="Milano">Milano</option>
            </select>
            <button name="submit" type="submit" class="btn btn-primary">Cliccami</button>
        </form>
    </body>
</html>
