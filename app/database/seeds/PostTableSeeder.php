<?php
class PostTableSeeder extends Seeder {
	public function run() {
		Post::create(array(
            'title' => 'Creador de Facebook llamó a Obama por el espionaje de NSA',
            'content' => 'Mark Zuckerberg habló con el presidente de EE.UU. para expresar su frustración sobre lo que califica como un daño duradero ocasionado por los programas de vigilancia.'
            ));
        Post::create(array(
            'title' => 'Google rediseña la búsqueda desde computadoras',
            'content' => 'Se implementaron algunos cambios de imagen en la búsqueda de datos de la página. El rediseño aumenta el tamaño de letra y elimina el subrayado abajo de los vínculos azules.'
            ));
        Post::create(array(
            'title' => 'Se filtran fotos y revelan detalles del nuevo HTC One 2014',
            'content' => 'El teléfono será presentado el 25 de marzo. Tendrá dos cámaras en la parte trasera. '
            ));
        
	}
}