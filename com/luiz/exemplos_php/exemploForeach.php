<?php
        $things = array("Conversar com bancos de dados"
                       ,"Enviar cookies"
                       ,"Avaliar conteúdo de formulários"
                       ,"Costruir páginas dinâmicas");
        foreach ($things as $thing) {
            echo "<li>$thing</li>";
        }
        
        unset($thing);
      ?>