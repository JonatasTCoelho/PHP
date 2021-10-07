 <?php
     $filename = "cadastro.txt";

    if(!file_exists($filename))
            $handle = fopen($filename, "w");
        else
            $handle = fopen($filename, "a");
        
       fwrite($handle, $_POST['nome']. "-" .$_POST['CPF']."\n");
       fflush($handle);
       fclose($handle);

?>
