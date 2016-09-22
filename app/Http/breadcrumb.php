<?php

	/* 	------------	Función que extrae e imprime breadcrumbs	-----------	 */

breadcrumb::seleccionaGrado($grado) {
		switch ($grado) {
			case '1': $grado = 'primergrado';
				break;
			case '2': $grado = 'segundogrado';
				break;
			case '3': $grado = 'tercergrado';
				break;
			case 'I': $grado = 'semestreI';
				break;
			case 'II': $grado = 'semestreII';
				break;
			case 'III': $grado = 'semestreIII';
				break;
			case 'IV': $grado = 'semestreIV';
				break;
			case 'V': $grado = 'semestreV';
				break;
			case 'VI': $grado = 'semestreVI';
				break;
		}
		return $grado;
	}

breadcrumb::generaBreadCrumbs() {
		$uri = $_SERVER['REQUEST_URI'];
		$uriActual = explode('/', $uri);
		$elemsURI = count($uriActual);
		$j = $elemsURI - 1;
		$termina = false;
		while ($uriActual[$j] != 'educamedia') {
			$j--;
		}
		echo '<a href=' . url($uriActual[$j]);
		echo '>' . strtoupper($uriActual[$j]) . '</a>';
		$hrefCompleta = $uriActual[$j];
		$j++;
		for ($i = $j; $i < $elemsURI; $i++) {
			if (strlen($uriActual[$i]) < 4) {
				$gradoURI = MediatecaController::seleccionaGrado($uriActual[$i]);
				$termina = true;
			} else {
				$gradoURI = $uriActual[$i];
			}
			$hrefCompleta = url($hrefCompleta . "/" . $gradoURI);
			echo ' / <a href="' . $hrefCompleta;
			if (strpos($uriActual[$i], '%C3%A9') !== false) {
				$gradoURI = 'Proped&#201;utico';
				$termina = true;
			}
			echo'">' . strtoupper($gradoURI) . '</a>';
			if ($termina == true) {
				break;
			}
		}
	}
}