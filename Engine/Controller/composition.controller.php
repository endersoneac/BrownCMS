<?php

namespace Controller {

	class Composition {
		public static function getList($source) { // Gerar estrutura de lista <ul><li>
			$list = "<ul>";
			
			foreach ( $source as $key ) {
				$list .= "<li>" . $source [$key] . "</li>";
			}
			
			$list .= "</ul>";
			
			return $list;
		}
		public static function getTable($source) { // Gerar estrutura de tablea <table><tr><td>
			$table = "<table>";
			
			foreach ( $source as $key ) {
				$table .= "<tr>";
				
				foreach ( $source [$key] as $key2 ) {
					$table .= "<td>" . $source [$key] [$key2] . "</td>";
				}
				$table .= "</tr>";
			}
			
			$table .= "</table>";
			
			return $table;
		}
		public static function getForm($source) { // Gerar formulário
		                                          
			// Array ( "Nome do campo", "Tipo de Campo, "Valor do Campo" )
			$form = "";
			foreach ( $source as $key ) {
				$form .= "<label>" . $source [$key] [1] . "</label>";
				
				switch ($source [$key] [2]) {
					case "text" :
						$form .= "<input name='" . $source [$key] [1] . "' type='text'>". $source [$key][3] ."</input>";
						break;
					case "password" :
						$form .= "<input name='" . $source [$key] [1] . "' type='password'></input>";
						break;
					case "submit" :
						$form .= "<input name='" . $source [$key] [1] . "' value='" . $source [$key] [3] . "' type='submit'></input>";
						break;
					case "file" :
						$form .= "<input name='" . $source [$key] [1] . "' type='file' accept='" . $source [$key] [3] . "'></input>";
						break;
					case "textarea" :
						$form .= "<textarea name='" . $source [$key] [1] . "'>". $source [$key][3] ."</textarea>";
						break;
					case "button" :
						$form .= "<button name='" . $source [$key] [1] . "'>" . $source [$key] [3] . "</button>";
						break;
					
					/*
					 * <input type="text"> - Finalizado
					 * <input type="password"> - Finalizado
					 * <input type="submit"> - Finalizado
					 * <input type="file"> - Finalizado
					 * <button> - Finalizado
					 * <textarea> - Finalizado
					 * <select>
					 * <option>
					 * <optgroup>
					 * <fieldset>
					 */
				}
			}
			return $form;
		}
	}
}
?>