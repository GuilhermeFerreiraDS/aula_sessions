<?php session_start(); ?>
<hr>
<h1>Usuário: 
    <?php 
        echo $_SESSION['user'] . ' ' . $_SESSION['sobrenome']; 
    ?>
</h1>
<hr>
<h1>
    Telefone:
    <?php 
        echo $_SESSION['telefone']; 
    ?>
</h1>
<hr>
<h1>
    Idade:
    <?php 
        echo $_SESSION['idade']; 
    ?>
</h1>