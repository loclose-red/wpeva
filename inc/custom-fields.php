<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

$theme_options = Container::make('theme_options', __('Theme Options'));
$theme_options->add_tab('Description',[
            Field::make_textarea('descriptshop' , 'Description du magasin'),

            ]);
$theme_options->add_tab('Info footer',[
    Field::make_text('contactadresse' , 'Adresse postale'),
    Field::make_text('contactphone' , 'Telephone'),
    Field::make_text('contactmail' , 'Email'),
        ]);

$theme_options->add_tab('Contenu du slider',[
    Field::make( 'complex', 'crb_media_item' )
    ->add_fields( 'photograph', array(
        Field::make_text('slide_message' , 'Message du slide'),
            Field::make_text('slide_button_text' , 'Texte du bouton'),
            Field::make( 'radio', 'crb_radio', __( 'Position du texte' ) )
            ->set_options( array(
		        'gauche' => 'Gauche',
		        'milieu' => 'Milieu',
		        'droite' => 'Droite',
	        ) ),
            Field::make( 'image', 'crb_image', __( 'Image' ) )
	            ->set_type( array( 'video' ) ),
            Field::make( 'association', 'crb_association', __( 'Association' ) )
                ->set_types( array(
                    array(
                    'type'      => 'post',
                    'post_type' => 'page',

                    )
            ) ),
    ) )            
]);


        