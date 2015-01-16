<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            
            jQuery(document).ready(function(){
                jQuery('#insert_code').submit(function(){
                    var dados = jQuery( this ).serialize();

                    jQuery.ajax({
                        type: "POST",
                        url: "add_code.php",
                        data: dados,
                        success: function( data )
                        {
                            alert("Dados inseridos co sucesso");
                        }
                    });
                    
                    return false;
                });
            });

        </script>
    </head>
    <body>
        <form id="insert_code" role="form">
            <p>&nbsp;</p>
            <label>Code size</label>
            <input name="size" type="text" value="">
            <p>&nbsp;</p>
            <label>Number of codes to generate</label>
            <input name="number" type="text" value="">
            <p>&nbsp;</p>
            <input type="submit" name="enviar" value="Enviar" />
        </form>
    </body>
</html>