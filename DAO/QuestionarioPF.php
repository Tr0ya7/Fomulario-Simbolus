<?php
	require_once "Conexao.php";
	require_once "../Class/QuestionarioPF.php";
	require_once "../Tools/funcoes.php";

	class QuestionarioPFDAO
	{
		private $conn = null;
		public function __construct($Conexao = null)
		{
			if($Conexao == null)
			{
				$this->conn = new Conexao();
			}
			else
			{
				$this->conn = $Conexao;
			}
		}

		// verificar se existe
		public function GetQuestionarioPF()
	    {
	        
			$sql = "SELECT QUE_CODIGO FROM QUEST_SITE_PF WHERE FOR_CODIGO = {$_SESSION['fornecedor_codigo']}";
			$questionarios = array();
			

	        $query = $this->conn->GetQuery($sql);
	        while ($row = $this->conn->GetQueryResult($query))
	        {
	            $Questionario = new QuestionarioPF();
	            $Questionario->setQueCodigo($row->QUE_CODIGO);
	            $questionarios[] = $Questionario;
	        }        
	        return $questionarios;   
	    }

	    // insert questionario
		public function inserirQuestionario($que_1_1, $que_1_2, $que_1_3, $que_1_texto, $que_2_1, $que_2_2, $que_2_texto, $que_3_1, $que_3_2, $que_3_3, $que_3_texto, 
		   $que_4_1, $que_4_2, $que_4_texto, $que_5_1, $que_5_natureza, $que_5_parte, $que_5_aberto, $que_5_texto, $que_6_1, $que_6_natureza, $que_6_parte, $que_6_aberto,
		   $que_6_texto, $que_7_1, $que_7_natureza, $que_7_parte, $que_7_aberto, $que_7_texto, $que_8_1, $que_8_2, $que_8_3, $que_8_texto, $que_9_1, $que_9_2, 
		   $que_9_texto, $que_10_1, $que_10_texto, $que_11_1, $que_11_texto, $que_12_texto)
	    {
            $sql = "INSERT INTO QUEST_SITE_PF VALUES (GEN_ID(GERA_ID_QUEST_SITE, 1), {$_SESSION['fornecedor_codigo']}, current_timestamp, current_timestamp, '{$que_1_1}', ";
			$sql = $sql . "'{$que_1_2}', '{$que_1_3}', '{$que_1_texto}', '{$que_2_1}', '{$que_2_2}', '{$que_2_texto}', '{$que_3_1}', '{$que_3_2}', '{$que_3_3}', '{$que_3_texto}',";
			$sql = $sql . "'{$que_4_1}', '{$que_4_2}', '{$que_4_texto}', '{$que_5_1}', '{$que_5_natureza}', '{$que_5_parte}', '{$que_5_aberto}', '{$que_5_texto}', '{$que_6_1}', ";
			$sql = $sql . "'{$que_6_natureza}', '{$que_6_parte}', '{$que_6_aberto}', '{$que_6_texto}', '{$que_7_1}', '{$que_7_natureza}', '{$que_7_parte}', '{$que_7_aberto}', ";
			$sql = $sql . "'{$que_7_texto}', '{$que_8_1}', '{$que_8_2}', '{$que_8_3}', '{$que_8_texto}', '{$que_9_1}', '{$que_9_2}', '{$que_9_texto}', '{$que_10_1}', "; 
			$sql = $sql . "'{$que_10_texto}', '{$que_11_1}', '{$que_11_texto}', '{$que_12_texto}'); ";

	        $query = $this->conn->GetQuery($sql);
	        if (!$this->conn->GetQuery($sql, $trasanc))
	        {
	            $this->conn->Rollback($trasanc);
	            return false;
	        }
	        return true;
	    }


	}
?>