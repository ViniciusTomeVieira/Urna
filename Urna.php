
<!DOCTYPE html>
<?php 
$digito = filter_input(INPUT_GET,'digito');
echo 'Candidatos: Gilmar = 24<br /> '
. 'Molusco = 13 <br />'
. 'Aecio = 45 ';



    
     
                                      if(($digito === '13')){
                                       
                                        $arquivo= "votosvalidos.txt";
                                        $conteudo=$digito.",";
                                        $abertura=fopen("$arquivo","a+");
                                        $gravacao=fwrite($abertura,$conteudo);
                                       
                                         #Reposiciona o ponteiro no início do arquivo
                                         fseek($abertura,0);
                                         $leitura=fread($abertura,filesize($arquivo));
                                         fclose($abertura);
                                         
                                      }else if(($digito === '24')){
                                          $arquivo= "votosvalidos.txt";
                                          $arquivo2= "qtdgilmar.txt";
                                        $abertura2=fopen("$arquivo2","r");
                                          $leitura2=fread($abertura2,filesize($arquivo2));
                                         fclose($abertura2);
                                         
                                         $abertura2=fopen("$arquivo2","w+");
                                         $contgilmar=$leitura2+1;
                                          $gravacao2=  fwrite($abertura2, $contgilmar);
                                         fclose($abertura2);
                                          
                                         $conteudo=$digito.",";
                                        $abertura=fopen("$arquivo","a+");
                                        $gravacao=fwrite($abertura,$conteudo);
                                       
                                         #Reposiciona o ponteiro no início do arquivo
                                         fseek($abertura,0);
                                         $leitura=fread($abertura,filesize($arquivo));
                                         fclose($abertura);
                                          
                                      }else if(($digito === '45')){
                                          $arquivo= "votosvalidos.txt";
                                        $conteudo=$digito.",";
                                        $abertura=fopen("$arquivo","a+");
                                        $gravacao=fwrite($abertura,$conteudo);
                                       
                                         #Reposiciona o ponteiro no início do arquivo
                                         fseek($abertura,0);
                                         $leitura=fread($abertura,filesize($arquivo));
                                      
                                         fclose($abertura);
                                          
                                      }
                                      
                                         
                                         
    
                        else if (($digito === "branco")){
                           
                            $arquivo= "votosbranco.txt";
                                        $abertura=fopen("$arquivo","r");
                                        $leitura=fread($abertura,filesize($arquivo));
                                         fclose($abertura);
                                         $abertura=fopen("$arquivo","w+");
                                         $contbranco=$leitura+1;
                                         $gravacao=  fwrite($abertura, $contbranco);
                                         fclose($abertura);
                                           
                        }else{
                            $arquivo= "votosnulos.txt";
                                        $abertura=fopen("$arquivo","r");
                                        $leitura=fread($abertura,filesize($arquivo));
                                         fclose($abertura);
                                         $abertura=fopen("$arquivo","w+");
                                         $contnulo=$leitura+1;
                                         $gravacao=  fwrite($abertura, $contnulo);
                                         fclose($abertura);
                                        
                        }
                        
                                         
?>

<html>
<head>
<title>Eleição</title>
<style>
    fieldset{
        width: 200px;
        background-color: yellow
    }
    input:hover{
        color: black;
        background-color: darkgray;
    }
   
    #branca:hover{
        background-color: white;
    }
     #laranja:hover{
        background-color: orange;
    }
     #verde:hover{
        background-color: green;
    }
</style>
</head>
<body>
  
     <fieldset> 
         
         <form name="urna" method="get" action="Urna.php">
      
   
        <table>
        <legend> Urna </legend>
     <tr>
      <td>
       <input type="text"  name="digito" >
      </td>
     </tr>
     <tr>
      <td><input type="button" value="1" onclick="urna.digito.value += '1'"></input>
      <input type="button" value="2" onclick="urna.digito.value += '2'"></input>  
      <input type="button" value="3" onclick="urna.digito.value += '3'"></input><br />
      </td>
     </tr>
     <tr>
      <td><input type="button" value="4" onclick="urna.digito.value += '4'"/>
          <input type="button" value="5" onclick="urna.digito.value += '5'"/>
      <input type="button" value="6" onclick="urna.digito.value += '6'"/><br />
      </td>
     </tr>
     <tr>
      <td><input type="button" value="7" onclick="urna.digito.value += '7'"/>
      <input type="button" value="8" onclick="urna.digito.value += '8'"/>  
      <input type="button" value="9" onclick="urna.digito.value += '9'"/><br /></td>
     </tr>
     <tr>
       
      <td><input type="button" value="0" onclick="urna.digito.value += '0'"/><br></td>
      
     </tr>
     
       
    </table></br>
<input type="submit" value="branco" onclick="urna.digito.value += 'branco'" id="branca"/>
<input type="reset" value="corrige" id="laranja">
<input type="submit" value="confirma" id="verde"/>
 
</table>
</form>
     
       
    
 </body>
</html>

                                        
