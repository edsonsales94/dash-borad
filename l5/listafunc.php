<DOCTYPE!>

<head>
	<?php
        require_once "./conexao/protheus12.php";
        $Conexao    = Conexao::getConnection();

        $sql = $Conexao->prepare("EXEC sp_ANIV_SEMANA '01'");
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
		
		$x=0;
						
        while ($row = $sql->fetch()) {
			$x++;
            echo "<tr class='tabela' align='center'>" .            
                
                "<td class='dia-aniv'>"  . $row["DIA"] . "</td>" .
                "<td class='nome-fun'>" . $row["Nome"] . "</td>" .
                "<td class='setor'>" . $row["CENTRO_CUSTO"] . "</td>" .
                "</tr>";
        };
		
		for($i=$x;$i<8;$i++)
			{
				 echo "<tr class='tabela' align='center'>" .            
                
                "<td class='dia-aniv'>" ."&nbsp". "</td>" .
                "<td class='nome-fun'>" . "&nbsp". "</td>" .
                "<td class='setor'>" . "&nbsp". "</td>" .
                "</tr>";
			};

			
        ?>
</head>