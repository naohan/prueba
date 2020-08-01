<?php
function color($fila)
{
	if($fila%2==0){
		return "par";
	}else{
		return "impar";
	}
}


function H($title, $head, $data)
{
?>
<style>
.titulo
{
	background-color:#F33;
	color:#fff;
	height:50px;
	text-align:center;
	font-size:36px;
}

.subTitulo
{
	background-color:#F6C;
	color:#fff;
	height:30px;
	text-align:center;
	font-size:18px;
}

.par
{
	background-color:#FF9;
	height:20px;
	font-size:12px;
}

.impar
{
	background-color:#6FC;
	height:20px;
	font-size:12px;
}


</style>

<table width="100%" border="1" cellpadding="1">
  <tr>
    <td class="titulo" colspan="<?php echo(count($head)); ?>"><?php echo($title); ?></td>
  </tr>
  
  <tr>
    <td class="subTitulo"><?php echo($head[0]); ?></td>
    <td class="subTitulo"><?php echo($head[1]); ?></td>
    <td class="subTitulo"><?php echo($head[2]); ?></td>
    <td class="subTitulo"><?php echo($head[3]); ?></td>
    <td class="subTitulo"><?php echo($head[4]); ?></td>
  </tr>
	<?php
    for($i=0; $i<count($data); $i++)
    {  
    ?>
      <tr>
        <?php
        for($j=0; $j<count($head); $j++)
        { 
		
		$colorFila=color($i); 
        ?>
            <td class="<?php echo($colorFila); ?>" ><?php echo($data[$i][$j]); ?></td>
        <?php
        }//Fin de for columnas ($j)
        ?>
      </tr>
    <?php
    }//Fin de for filas ($i)
    ?>
</table>

<?php
}//Fin de funcion
?>