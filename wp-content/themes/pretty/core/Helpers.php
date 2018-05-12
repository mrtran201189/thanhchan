<?php 

class Helpers
{
	public static function getPostTag($post_id = 0, $prefix = ', ')
	{
		$tags = get_the_tags();
		// $tags = wp_get_post_tags($post_id);
		$str_tag = "";
		$array_tag = [];
		if (!isset($tags) || empty($tags)) {
			return $str_tag;
		}

		foreach ($tags as $tag):
			// $link_tag = get_term_link($tag, 'post_tag');
			$link_tag = get_tag_link($tag->term_id);
           	$array_tag[] = '<span class="tag"><a href="' . $link_tag . '" title="' . $tag->name . '">' . $tag->name . '</a></span>';
        endforeach;
        return $str_tag = implode($prefix, $array_tag);
	}

	public static function getEntryContent($post_id = 0) {
		if (!is_single()) {
			return get_the_excerpt($post_id);
		}
		else {
			return get_the_content();
		}
	}

	public static function getSlider()
	{
		$html = "";
		$sliders = get_posts(array( 'post_type' => 'slider'));
		return $sliders;
	}

	public static function getMenuNav()
	{
		$nav_menus = wp_get_nav_menu_items('main');
		$str_menu = '<ul class="nav navbar-nav">';
		foreach ($nav_menus as $key => $nav_menu) {
			$categories = get_categories(['parent' => $nav_menu->object_id]);
            if (empty($categories)) {
	            $str_menu .= '<li><a href="' . $nav_menu->url . '">' . ucfirst($nav_menu->title) . '</a></li>';
            }
            else {
            	$str_menu .= '<li><a href="#works-collapse" class="has-child" data-toggle="collapse">' . ucfirst($nav_menu->title) . '<span class="caret"></span></a>';
            	$str_menu .= '<ul class="dropdown-menu" id="works-collapse">';
            	foreach ($categories as $category) {
            		$str_menu .= '<li><a href="'. get_category_link($category->term_id) .'">'. ucfirst($category->name) .'</a></li>';
        		}
        		$str_menu .= '</ul>';
        		$str_menu .= '</li>';
            }
		}


		$str_menu .= "</ul>";
		return $str_menu;
	}


	public static function getAttachmentGalleries($post_id = null)
	{
		$galleries = [];
	    $attachments = new Attachments( 'attachments', $post_id); /* pass the instance name */
	    if( $attachments->exist() ) :
	        while( $attachments->get() ) :
	            $galleries[] = $attachments->url();
	        endwhile;
	    endif;

	    if ($attachments->total() == 1) {
	        $galleries = array_merge($galleries, $galleries);
	    }
	    return $galleries;
	}

	public static function getLogos()
	{
		$image = get_template_directory_uri() . PATH_NO_IMAGE;
		$logos = get_posts(array( 'post_type' => 'logo', 'post_status' => 'publish'));
		if (isset($logos) && !empty($logos)) {
			$image = get_image(get_the_post_thumbnail_url($logos[0]->ID));
		}
		return '<img src="'.$image.'" alt="" style="width: 100%; height: 100%;" />';
	}

	public function getAddress()
	{
		$logos = get_posts(array( 'post_type' => 'logo', 'post_status' => 'publish'));
		if (isset($logos) && !empty($logos)) {
			return $logos[0]->post_content;
		}
	}

	public static function getUrlBack()
	{
		if (isset($_SERVER['HTTP_REFERER'])) {
			return $_SERVER['HTTP_REFERER'];
		}
	}

	public static function showMessageContact()
	{
		$mess = isset($_GET['mess']) ? $_GET['mess'] : '';
		$message = "";
		if ($mess == 'success') {
			$message = "Đăng ký thành công";
		}
		else if($mess == 'error') {
			$message = "Có lỗi xảy ra. Bạn vui lòng thử lại.";
		}
		return "<h4 style='text-align:center;'>$message</h4>";
	}

	public static function showTitle($title, $number_word  = 30, $character_end = '...') {
		$words = preg_split("/\s/",$title);
        $words = array_splice($words, 0, $number_word);
        if (str_word_count($title) > $number_word)
            return implode(" ", $words) . $character_end;
        else
            return $title;
	}

	public static function getCaption($post_id) {
		$caption = get_post_meta($post_id, 'caption', false);
		return isset($caption) && !empty($caption) ? $caption [0] : '';
	}

	public static function get_the_post_thumbnail_url($post ) {
		$size = 'post-thumbnail' ;
		$post_thumbnail_id = get_post_thumbnail_id( $post );
		if ( ! $post_thumbnail_id ) {
			return false;
		}
		return wp_get_attachment_image_url( $post_thumbnail_id, $size );
	}

	public static function getNumberCoupon() {
		return $value = get_option( 'number_coupon', '' );
	}

	public static function getTennhanvien($post_id) {
		$tennv = get_post_meta($post_id, 'tennhanvien', false);
		return isset($tennv) && !empty($tennv) ? $tennv [0] : '';
	}

	public static function getEmailnhanvien($post_id) {
		$mailnv = get_post_meta($post_id, 'emailnhanvien', false);
		return isset($mailnv) && !empty($mailnv) ? $mailnv [0] : '';
	}

	public static function getSDTnhanvien($post_id) {
		$sdtnv = get_post_meta($post_id, 'sdtnhanvien', false);
		return isset($sdtnv) && !empty($sdtnv) ? $sdtnv [0] : '';
	}

	public static function getFacebooknhanvien($post_id) {
		$fbnv = get_post_meta($post_id, 'facebooknhanvien', false);
		return isset($fbnv) && !empty($fbnv) ? $fbnv [0] : '';
	}
	public static function getService($post_id) {
		$service = get_post_meta($post_id, 'service', false);
		return isset($service) && !empty($service) ? $service [0] : '';
	}
	public static function getWebsite($post_id) {
		$website = get_post_meta($post_id, 'website', false);
		return isset($website) && !empty($website) ? $website [0] : '';
	}
}