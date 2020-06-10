<h1>correction Part4 exo6</h1>

<div>
    <?php
        function welcome($name, $firstName, $age){
            return 'Bonjour '.$firstName.' '.$name.', vous avez '.$age.' ans.';
        }
    ?>
    <p><?= welcome('Fontaine', 'Brian', 22) ?></p>
</div>