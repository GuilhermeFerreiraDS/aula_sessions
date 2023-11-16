<?php $_SESSION['user'] = 'Neymar';
      $_SESSION['sobrenome'] = 'Jr';
      $_SESSION['idade'] = '33';
      $_SESSION['telefone'] = '123';
      $_SESSION['senha'] = '123';

?>

<div class="header">
    <h1>
        <?php echo $_SESSION['user']; ?>
    </h1>
</div>