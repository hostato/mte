<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<style type="text/css">
	.login .form-group {
		margin-bottom: 30px;
	}
</style>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-content login">
				<h1>Логин</h1>
				<form class="form-horizontal" method="post" action="">
					
					<?php if (isset($login_errors) && $login_errors === true) { ?>
						<div class="alert alert-danger" role="alert">
						  <strong>Error!</strong> Неправильный логин или пароль.
						</div>
					<?php } ?>
					<div class="form-group">
				    	<label for="log" class="col-sm-2 control-label">Логин</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" id="log" placeholder="Логин" name="log">
				    	</div>
				  	</div>
				  <div class="form-group">
				    <label for="pwd" class="col-sm-2 control-label">Пароль</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="pwd" placeholder="Пароль" name="pwd">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox" name="remember"> Запомнить меня
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Логин</button>
				    </div>
				  </div>
					<input type="hidden" name="guest" value="1">
				</form>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
