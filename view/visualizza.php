<?php
function visualizzaEsercente($incognita){
    ?>
    <?php $nomesito = "Lista Esercenti"; require __DIR__ . '/parcials/header.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>


    <?php while ($row = mysqli_fetch_array($incognita, MYSQLI_ASSOC)) {

        echo ' 
<u1  style="float: left; padding: 30px"> 
<div class="w3-panel w3-card"><p></p> 
            <div class="product-item">
                <form method="post" style="text-align: center" action="" >
                    <div style="color: black"> <strong>ID:</strong> ' . $row['id_amministratore'] . '</div>
                    <div style="color: black"><strong>Nome:</strong> ' . $row['nome'] . '</div>
                    <div style="color: black"><strong>E-Mail:</strong> ' . $row['email'] . '</div>
                </form>
            </div>
            
</div></u1>';
    } ?>

    </body>
    </html>
<?php  }
function visualizzaUtente($incognita){
    ?>
    <?php $nomesito = "Lista Utenti"; require __DIR__ . '/parcials/header.php'; ?>
    <body>
    <?php while ($row = mysqli_fetch_array($incognita, MYSQLI_ASSOC)) {

        echo ' 
<u1  style="float: left; padding: 30px">
<div class="w3-panel w3-card"><p></p> 
            <div class="product-item">
                <form method="post" style="text-align: center" action="" >
                    <div style="color: black"> <strong>ID di UTENTE:</strong> ' . $row['id_utente'] . '</div>
                    <div style="color: black"><strong>E-Mail:</strong> ' . $row['email'] . '</div>
                    <div style="color: black"><strong>Punti Accumulati:</strong> ' . $row['punti_accumulati'] . '</div>
                </form>
            </div>
            
</div></u1>';
    } ?>

    </body>
    </html>
<?php  }
function visualizzaQuestionario($incognita){
    ?>
    <?php $nomesito = "Lista Questionari"; require __DIR__ . '/parcials/header.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>
    <?php while ($row = mysqli_fetch_array($incognita, MYSQLI_ASSOC)) {

        echo ' 
<u1  style="float: left; padding: 30px"> 
<div class="w3-panel w3-card">
            <div class="product-item">
                <form method="post" style="text-align: center" action="" >
                    <div style="color: black"> <strong>ID Questionario:</strong> ' . $row['id_questionario'] . '</div>
                    <div style="color: black"><strong>ID Amministratore:</strong> ' . $row['id_amministratore'] . '</div>
                     <div style="color: black"><strong>Nome:</strong> ' . $row['nome'] . '</div>
                    <div style="color: black"><strong>Punti:</strong> ' . $row['punti'] . '</div>
                    <div style="color: black"><strong>Metodo di invio:</strong> ' . $row['metodo_invio'] . '</div>
                </form>
            </div>
            
</div></u1>';
    } ?>

    </body>
    </html>
<?php  }?>



