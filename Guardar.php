<?php
        //conectamos con el servidor 
         =$conectar=mysql_connect('databases.000webhost.com','id18838052_gustavo','$h+@0UX4(p-S=t_/')
        //verificamos la conexion
        if(!$conectar){
            echo ''No se pudo conectar con el servidor ''
        }else{

            $base=mysql_select_db( 'id18838052_misegundabase' );
            if(!$base){
                echo''No se encontro la base de datos'';
            }
        }
        //recuperar las variables
        $nombre=$_POST[ ' nombre ' ];
        $email=$_POST[ ' email ' ];
		$telf=$_POST[ ' telf ' ];
		$Cantidad=$_POST[' Cantidad ' ];
		$fechahora_usuario=$_POST[ ' fechahora_usuario ' ]
		$list=$_POST [ ' list ' ]
		$Ref!!=$_POST [ ' Ref!! ' ]
		$output=$_POST [ ' output ' ]
		$file=$_POST [ ' file ']
		$file=$_POST [ ' file ']
		
        //hacemos la sentencia sql
        $sql=''INSERT INTO datos  VALUES ( '$nombre',
                                           '$email',
                                           '$telf',
										   '$Cantidad',
										   '$Fecha_usuario',
										   'list',
										   'Ref!!',
										   'output',
										   'file',
										   'file')'';
        //ejecutamos la sentencia sql
        $ejecutar=mysql_query($sql);
        //verificamos la ejecucion
        if(!$ejecutar){
            echo  ''Ups... ¡Hubo un error! ";
        }else{
            echo "Datos guardados correctamente<br><a href= ' Formulario.html ' >Volver</a>'';
        }
?>