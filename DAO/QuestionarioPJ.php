<?php
	require_once "Conexao.php";
	require_once "../Class/QuestionarioPJ.php";
	require_once "../Tools/funcoes.php";

	class QuestionarioPJDAO
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
		public function GetQuestionarioPJ()
	    {
	        
			$sql = "SELECT QUE_CODIGO FROM QUEST_SITE_PJ WHERE FOR_CODIGO = {$_SESSION['fornecedor_codigo']}";
			$questionarios = array();
			

	        $query = $this->conn->GetQuery($sql);
	        while ($row = $this->conn->GetQueryResult($query))
	        {
	            $Questionario = new QuestionarioPJ();
	            $Questionario->setQueCodigo($row->QUE_CODIGO);
	            $questionarios[] = $Questionario;
	        }        
	        return $questionarios;   
	    }

	    // insert questionario
		public function inserirQuestionario($que_1_1, $que_1_2, $que_1_3, $que_1_texto, $que_2_1, $que_2_2, $que_2_3, $que_2_texto, $que_3_1, $que_3_2, $que_3_3, $que_3_texto, 
		   $que_4_1, $que_4_natureza, $que_4_parte, $que_4_decisao, $que_4_texto, $que_5_1, $que_5_natureza, $que_5_parte, $que_5_decisao, $que_5_texto, $que_6_1, $que_6_texto,
		   $que_7_1, $que_7_2, $que_7_3, $que_7_4, $que_7_5, $que_7_6, $que_7_texto, $que_8_1, $que_8_2, $que_8_3, $que_8_4, $que_8_5, $que_8_6, $que_8_7, $que_8_8, $que_8_9, 
		   $que_8_texto, $que_9_1, $que_9_texto, $que_10_1, $que_10_texto, $que_11_texto)
	    {

	        $sql = "INSERT INTO QUEST_SITE_PJ VALUES (GEN_ID(GERA_ID_QUEST_SITE, 1), {$_SESSION['fornecedor_codigo']}, current_timestamp, current_timestamp, '{$que_1_1}', ";
			$sql = $sql . "'{$que_1_2}', '{$que_1_3}', '{$que_1_texto}', '{$que_2_1}', '{$que_2_2}', '{$que_2_3}', '{$que_2_texto}', '{$que_3_1}', '{$que_3_2}', '{$que_3_3}', ";
			$sql = $sql . "'{$que_3_texto}', '{$que_4_1}', '{$que_4_natureza}', '{$que_4_parte}', '{$que_4_decisao}', '{$que_4_texto}', '{$que_5_1}', '{$que_5_natureza}', ";
			$sql = $sql . "'{$que_5_parte}', '{$que_5_decisao}', '{$que_5_texto}', '{$que_6_1}', '{$que_6_texto}', '{$que_7_1}', '{$que_7_2}', '{$que_7_3}', '{$que_7_4}', ";
			$sql = $sql . "'{$que_7_5}', '{$que_7_6}', '{$que_7_texto}', '{$que_8_1}', '{$que_8_2}', '{$que_8_3}', '{$que_8_4}', '{$que_8_5}', '{$que_8_6}', '{$que_8_7}', ";
			$sql = $sql . "'{$que_8_8}', '{$que_8_9}', '{$que_8_texto}', '{$que_9_1}', '{$que_9_texto}', '{$que_10_1}', '{$que_10_texto}', '{$que_11_texto}'); ";
			echo $sql;
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