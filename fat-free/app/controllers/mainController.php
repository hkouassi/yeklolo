<?php
class mainController {

	function home(){
		F3::mset(array(
			'the_funky_front_dev'=>'Maxime'
			));
        echo Template::instance()->render('accueil.html');
	}

}
?>