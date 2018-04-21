<?php
/**
 * Template for displaying Zarinpal payment error message.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/zarinpal-payment/payment-error.php.
 *
 * @author   Mohmmad Javad Heydari 
 * @package  LearnPress/Zarinpal/Templates
 * @version  1.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<?php $settings = LP()->settings; ?>

<div class="learn-press-message error ">
	<div><?php echo __( 'Transation failed', 'learnpress-zarinpal' ); ?></div>		
</div>
