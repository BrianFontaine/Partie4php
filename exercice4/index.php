<h1>Correction Part 4 exo 4 </h1>
<div>
    <?php
    function compare( $nbO, $nbT){
        if ($nbO > $nbT){
            return 'Le premier nombre est plus grand';
        } elseif ($nbO < $nbT) {
            return 'Le premier nombre est plus petit';
        }
        return 'Les deux nombres sont identiques';
    } 
    ?>
    <p><?= compare(rand(1,10) , rand(1,10)) ?></p>
</div>