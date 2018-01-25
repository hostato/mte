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

get_header(); 
$user_id = get_current_user_id();
$birthDate = get_user_meta($user_id,'u_birth_date',true);
?>

<style type="text/css">
	.login .form-group {
		margin-bottom: 30px;
	}
</style>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-content login">
				<?php echo get_avatar( get_current_user_id(), 64 ); ?>
				<h3>Мой профиль</h3>
				<section id="search-2" class="widget widget_search">
					<?php if (isset($successMsg)) { ?>
						<?php if ($successMsg === true) { ?>
							<div class="alert alert-success" role="alert">
							  <strong>Обновление совершено!</strong> Дата рождения обновлена.
							</div>
						<?php } else { ?>
							<div class="alert alert-danger" role="alert">
							  <strong>Ошибка!</strong> Обновление не удалось. Вы не внесли изменения.
							</div>
						<?php } ?>
					<?php } ?>
					<form role="search" method="post" class="search-form">
						<label for="birthdate">
							<span class="screen-reader-text">Дата рождения:</span>
						</label>
						<input type="text" id="birthdate" class="search-field" name="birthdate" value="<?php echo $birthDate; ?>">
						<button type="submit" class="search-submit" name="updateDBR" value="updateDBR">Обновит</button>
					</form>
				</section>
				<m method="post">
					<a href="<?php echo wp_logout_url( '/login' ); ?>">Выход</a>
				</form>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.13/jquery.mask.min.js"></script>
<script type="text/javascript">

			$('#birthdate').mask('99.99.9999',{placeholder:"dd.mm.yyyy"});


</script>
<?php get_footer();
