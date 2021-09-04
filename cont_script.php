    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        
        <title>Document</title>
    </head>
    <body>
    
        <h1>Contando...</h1>    
            <div class="center2">
            <div class="responsive container2">
            <?php               
                $init = $_POST['num_inicio'];
                $end = $_POST['num_final'];
                $increment = $_POST['num_incremento'];
                
                if($init <= $end){
                    while($init <= $end){
                        echo "<br>"."<h3>$init</h3>";
                        $init += $increment;
                    }    
                }
                elseif ($init >= $end){
                    while($init >= $end){
                        echo "<br>"."<h3>$init</h3>";
                        $init -= $increment;
                    }
                }     
                echo "<br> <br>"."<a  href='".$_SERVER['HTTP_REFERER']."'><button>Voltar</button></a>";
                ?>
                
        </div>
        <div class="clear"></div>
    </div>
    
    </body>
    </html>