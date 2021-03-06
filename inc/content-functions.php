<?php
function mind_format_phone($phoneNumber) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 4);

        $phoneNumber = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 10) {
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);

        $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }

    return $phoneNumber;
}





/**
 * Gutenberg scripts and styles
 *
 */
function be_gutenberg_scripts() {
	wp_enqueue_script( 'theme-editor', get_template_directory_uri() . '/js/editor.js', array( 'wp-blocks', 'wp-dom' ), THEME_VERSION, true );
}
add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );

/**
 * Gravity Forms Bootstrap Styles
 *
 * Applies bootstrap classes to various common field types.
 * Requires Bootstrap to be in use by the theme.
 *
 * Using this function allows use of Gravity Forms default CSS
 * in conjuction with Bootstrap (benefit for fields types such as Address).
 *
 * @see  gform_field_content
 * @link http://www.gravityhelp.com/documentation/page/Gform_field_content
 *
 * @return string Modified field content
 */

 //
 // /*======================================================================
 // 	Gravity form custom button
 // ----------------------------------------------------------------------*/
 // add_filter("gform_submit_button_1", "form_submit_button", 10, 2);
 // function form_submit_button($button, $form){
 // return "<button id='gform_submit_button_1'><div class='text'>{$form["button"]["text"]}</div> <i class='arrow fa fa-angle-double-right'></i></button>";
 // }
 //
 //
 // /*======================================================================
 // 	Gravity form custom button
 // ----------------------------------------------------------------------*/
 // add_filter("gform_submit_button_2", "form_submit_button2", 10, 2);
 // function form_submit_button2($button, $form){
 // return "<button id='gform_submit_button_2'><div class='text'>{$form["button"]["text"]}</div> <i class='arrow fa fa-angle-double-right'></i></button>";
 // }
 //


 add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
 function form_submit_button( $button, $form ) {
     return '<button class="btn btn-primary btm-lg mt-2 px-4 py-2 fs-5" id="gform_submit_button_' . $form['id'] . '"><span class="pe-3">' . $form["button"]["text"] . '</span><i class="fas fa-angle-double-right"></i></button>';
 }

add_filter("gform_field_content", "bootstrap_styles_for_gravityforms_fields", 10, 5);
function bootstrap_styles_for_gravityforms_fields($content, $field, $value, $lead_id, $form_id){

	// Currently only applies to most common field types, but could be expanded.

	if($field["type"] != 'hidden' && $field["type"] != 'list' && $field["type"] != 'multiselect' && $field["type"] != 'checkbox' && $field["type"] != 'fileupload' && $field["type"] != 'date' && $field["type"] != 'html' && $field["type"] != 'address') {
		$content = str_replace('class=\'medium', 'class=\'form-control medium', $content);
	}

	if($field["type"] == 'name' || $field["type"] == 'address') {
		$content = str_replace('<input ', '<input class=\'form-control\' ', $content);
	}

	if($field["type"] == 'textarea') {
		$content = str_replace('class=\'textarea', 'class=\'form-control textarea', $content);
	}

	if($field["type"] == 'checkbox') {
		$content = str_replace('li class=\'', 'li class=\'checkbox ', $content);
		$content = str_replace('<input ', '<input style=\'margin-left:1px;\' ', $content);
	}

	if($field["type"] == 'radio') {
		$content = str_replace('li class=\'', 'li class=\'radio ', $content);
		$content = str_replace('<input ', '<input style=\'margin-left:1px;\' ', $content);
	}

	return $content;

} // End bootstrap_styles_for_gravityforms_fields()
