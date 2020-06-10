<h1>Correction Part4 exo 7</h1>

<div>
    <?php
    function profile($gender, $age){
        $message = '';
        if ($gender == 'F' && $age >= 18) {
            $message = 'Vous êtes une femme et vous êtes majeure';
        }elseif ($gender == 'H' && $age >= 18) {
            $message = 'Vous êtes un homme et vous êtes majeur';
        }elseif ($gender == 'F') {
            $message = 'Vous êtes une femme et vous êtes mineure';
        }else {
            $message = 'Vous êtes un homme et vous êtes mineur';
        }
        return $message;
    }
    ?>
    <p><?= profile(substr(str_shuffle('FH'), 0, 1), rand(1,30)) ?></p>
</div>