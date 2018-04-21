<?php
/**
 * Template for displaying Zarinpal payment form.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/addons/zarinpal-payment/form.php.
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

<p><?php echo $this->get_description(); ?></p>

<div id="learn-press-zarinpal-form" class="<?php if(is_rtl()) echo ' learn-press-form-zarinpal-rtl'; ?>">
    <p class="learn-press-form-row">
        <label><?php echo wp_kses( __( 'Email', 'learnpress-zarinpal' ), array( 'span' => array() ) ); ?></label>
        <input type="text" name="learn-press-zarinpal[email]" id="learn-press-zarinpal-payment-email"
               maxlength="19" value=""  placeholder="info@midiyasoft.com"/>
		<div class="learn-press-zarinpal-form-clear"></div>
    </p>
	<div class="learn-press-zarinpal-form-clear"></div>
    <p class="learn-press-form-row">
        <label><?php echo wp_kses( __( 'Mobile', 'learnpress-zarinpal' ), array( 'span' => array() ) ); ?></label>
        <input type="text" name="learn-press-zarinpal[mobile]" id="learn-press-zarinpal-payment-mobile" value=""
               placeholder="09121234567"/>
		<div class="learn-press-zarinpal-form-clear"></div>
    </p>
	<div class="learn-press-zarinpal-form-clear"></div>
</div>
