<?php
 $miconn=new mysqli("10.20.25.214", "root", "avaras08", "datosPersonales");
            
            if($miconn->connect_errno){
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno. ") ". $miconn->connect_error;
            }
   
            $sql="SELECT * FROM persona";
            
            $resultado = $miconn -> query($sql);
            ?>

<form>
<?php
            echo $resultado->num_rows;
            
            while($fila = $resultado -> fetch_assoc()){
            echo "<input type=radio name='idpersona' value=$idpersona>";  
            echo $fila["idpersona"]."/".$fila["nombre"]."\n";
            echo "<br>"
                
            }
            
       
                
                ?>
</form>