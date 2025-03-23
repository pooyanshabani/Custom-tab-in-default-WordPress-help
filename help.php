<?php 
//add help in posts/pages
add_action('admin_head', 'psh_add_custom_help_tab');
function psh_add_custom_help_tab() {
    $screen = get_current_screen();
    if ($screen->id === 'edit-page') {
        $screen->add_help_tab(
            array(
                'id'      => 'psh_help_tab',
                'title'   => 'Custom tab',
                'content' => '<p>Create a custom tab in the default WordPress help section.</p>',
			        	'callback' => 'psh_help_tabcallback',
		        		'priority' => 1
            )
        );
	}
}

function psh_help_tabcallback() {
	?>
	<div class="psh-help-cls">
    <p><span class="dashicons dashicons-info" aria-hidden="true" style="font-size: 16px; width: 16px; vertical-align: middle;"></span> It is also possible to use html tags and dashicon icons in this section.</p>
	</div>
	<?php
}
