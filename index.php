<html lang="en">
    <head>
        <title>Cars</title>
    </head>
    <body>
        <form method="GET">
         <select name="car">
             <option value="ALL">ALL</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    </body>

    </html> 

<?php

isset($_GET)

$cars = [
    "BMW" => ["M3", "M5", "X4M"],
    "Audi" => ["A3", "A6", "A8"]
];
foreach($cars as $car => $models ) {
    echo "<h2> $car </h2>";
    foreach($models as $c){
        echo "<i> $c </i> <br>";
    }
}

?>