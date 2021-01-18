<?php
    //include class
    include __DIR__ . '/class/Shoes.php';
    include __DIR__ . '/class/Jackets.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>prodotti</h1>
    </header>

    <main>
        <div class="product">
        <div class="shoes">
                <h2>Scarpe</h2>
                <h3>
                    <?php 
                    
                    $first_shoes = new Shoes('nike', 70 , 42);
                    var_dump($first_shoes);
                    echo $first_shoes->name;
                    
                    ?>
                </h3>
                <div class="discount">
                    <h3>
                        Hai diritto ad uno sconto del 
                        <?php echo $first_shoes->getDiscount(); ?>%
                        sul prodotto selezionato

                    </h3>

                    <h4>

                        Prezzo scontato: 
                        <?php echo $first_shoes->makeDiscount(); ?>€
                    </h4>

                        <?php 
                        // var_dump($first_shoes); 
                        ?>
                </div>
            
            </div>
            <div class="jackets">
                <h2>Jackets</h2>
                <h3>
                    <?php 
                    
                    $first_jacket = new Jackets('NorthFace', 210, 10);
                    // var_dump($first_jacket);
                    echo $first_jacket->name;
                    
                    ?>
                </h3>
                <div class="discount">
                    <h3>
                        Hai diritto ad uno sconto del 
                        <?php echo $first_jacket->getDiscount(); ?>%
                        sul prodotto selezionato

                    </h3>

                    <h4>

                        Prezzo scontato: 
                        <?php echo $first_jacket->makeDiscount(); ?>€
                        
                        
                    </h4>

                        <?php var_dump($first_jacket); ?>
                </div>
            
            </div>
        </div>
    </main>

</body>
</html>
    <!-- //prova

    $first = new Jackets('scarpe', 20);
    $first->getDiscount(); -->