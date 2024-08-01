<?php 

/**
 * The Class.
 */

 function call_techvertuMetaPages()
 {
	 new call_techvertuMetaPages();
 }
 
 if (is_admin()) {
	 add_action('load-post.php', 'call_techvertuMetaPages');
	 add_action('load-post-new.php', 'call_techvertuMetaPages');
 }
 
 class call_techvertuMetaPages
 {
 
	 public function __construct()
	 {
		 add_action('add_meta_boxes', array($this, 'add_meta_box'));
		 add_action('save_post', array($this, 'save'));
	 }

	 public function add_meta_box($post_type)
	 {
		 $post_type_page = array('product');
		 
		 if (in_array($post_type, $post_type_page)) {
			 add_meta_box(
				 'some_meta_box_name',
				 __('Product items', 'water'),
				 array($this, 'page_box_content'),
				 $post_type_page,
				 'normal',
				 'high'
			 );
			
		 }
 
	 }
 
	 public function save($post_id)
	 {
 
		 if (!isset($_POST['myplugin_inner_custom_box_nonce'])) {
			 return $post_id;
		 }
 
		 $nonce = $_POST['myplugin_inner_custom_box_nonce'];
 
		 // Verify that the nonce is valid.
		 if (!wp_verify_nonce($nonce, 'myplugin_inner_custom_box')) {
			 return $post_id;
		 }
 
		 if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
			 return $post_id;
		 }
 
		 // Check the user's permissions.
		 if ('page' == $_POST['post_type']) {
			 if (!current_user_can('edit_page', $post_id)) {
				 return $post_id;
			 }
		 } else {
			 if (!current_user_can('edit_post', $post_id)) {
				 return $post_id;
			 }
		 }
		
 
		 $data_sheet = sanitize_text_field($_POST['data_sheet']);
		 // Update the meta field.
		 update_post_meta($post_id, 'data_sheet', $data_sheet);

		 // Update the meta field.
		 update_post_meta($post_id, 'sparePart', $sparePart);

		 $engineSpecification = $_POST['engineSpecification'];
		 // Update the meta field.
		
		 
		 
      
	 }
 
	 public function page_box_content($post)
	 {
		 wp_nonce_field('myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce');
         $aboutImageURL = get_post_meta($post->ID, 'data_sheet', true);
	 ?>
		 <ul>
           
            <li>
                    <label for="image_url"><?php _e('Download data sheets', 'water'); ?></label>
                    <input type="text" name="data_sheet" id="data_sheet" value="<?php echo $aboutImageURL; ?>" class="regular-text">
                    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="<?php _e('Select techsheet', 'water'); ?>">
                    <br>
                    <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $('#upload-btn').each(function() {
                                $('#upload-btn').click(function(e) {
                                    e.preventDefault();
                                    var image = wp.media({
                                            title: '<?php _e('Upload Picture', 'morris'); ?>',
                                            multiple: false
                                        }).open()
                                        .on('select', function(e) {
                                            var uploaded_image = image.state().get('selection').first();
                                            console.log(uploaded_image);
                                            var image_url = uploaded_image.toJSON().url;
                                            $('#data_sheet').val(image_url);
                                        });
                                });
                            });

                        });
                    </script>
                </li>
				
				
			 
		 </ul>
	 <?php
	 }
	 

	 public function admin_public_ui($editorName, $post){
		wp_nonce_field('myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce');
		 $editorMeta = get_post_meta($post->ID, $editorName, true);
		?>
		<ul>
				<li>
					<?php 
					$editor_id = $editorName;
					$settings = array( 'media_buttons' => true );
					wp_editor( $editorMeta , $editor_id, $settings );					
					?>
				</li>
			 
		 </ul>
		<?php 
	 }
	
 }