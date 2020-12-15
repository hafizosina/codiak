<?php
/**
 * Template Name: Login Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
global $wpdb;
$Tablename= "FormLogin";
if (isset( $_POST['username']) ) {
$user=$_POST['username'];
$pass=$_POST['password'];
 $sql="SELECT * FROM " .$Tablename. " WHERE user='".$user."' AND pass='".$pass."' limit 1";
 $result=$wpdb->get_results($sql,ARRAY_A);
 print_r($result);
 if (isset($result[0])){
     echo "aa";
 }
 echo "BLA";

}


while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
get_footer(); ?>

<div class="loginbox">
	<img src="hello.png" class="avatar">
	<form method="POST" action="#">
	<h1>Login Here</h1>
	<form>
		<p>Username</p>
		<input type="text" name="username" placeholder="ENTER Username">
		<p>Password</p>
		<input type="text" name="password" placeholder="ENTER PASSWORD">
		<input type="submit" name="submit" value="Login">
		<a href="#">Lost Your Password</a><br>
		<a href="#">Dont have an account?</a> 
		</form> </div>
