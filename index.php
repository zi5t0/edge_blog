<?php

class BlogController
{
	public $data = ["primer post", "segundo post", "tercer post"];

	function list_posts(){
		return $this->data;
	}

	function print_post($post) {
		echo $this->get_formatted_post($post);
	}

	function get_formatted_post($post) {
		return "<h1>$post</h1>";
	}
}

$blog = new BlogController();
$posts = $blog->list_posts();

foreach ($posts as $post) {
	$blog->print_post($post);
}

?>
