<!DOCTYPE html>
<html>
    <head>
    <body>

        <form name="Terminal_Atelier" id="Terminal_Atelier" action="" method="POST" >
            <input type="text" id="valeurCodeBarre" name="valeurCodeBarre" placeholder="Valeur du code barre..." value="">                                    
            <script type="text/javascript">
                document.getElementById("valeurCodeBarre").focus();
                </script>              
        </form>            

            <h1>Numéro de code barre : </h1><?php echo $numCodeBarre; ?>
            <h1>Commande : </h1><?php echo $infosScan->getNumCommande(); ?>
            <h1>Poste : </h1><?php echo $infosScan->getNomPoste(); ?>
            <h1>Reference : </h1>  <?php echo $infosScan->getReferenceCommande(); ?>
            <h1>Image du chassis : </h1><img src="\\SRV-INTRANET\E:\.jpg" alt="Image du chassis" />
            
        </body>
</html>