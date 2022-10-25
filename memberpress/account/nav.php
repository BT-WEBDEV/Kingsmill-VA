<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>
<?php
require_once( get_template_directory() . '/memberpress/account/krr_ezlinks_api.php' ); 

if($_SESSION['mepr_member_number'] != get_user_meta($mepr_current_user->ID, "mepr_member_number", true) ) {

    $_SESSION['mepr_member_number'] = get_user_meta($mepr_current_user->ID, "mepr_member_number", true);
    $krr_ezlinks_api = new krr_ezlinks_api;
    
    $_SESSION["ezlink_member_login_link"] = $krr_ezlinks_api->getUserToken($_SESSION['mepr_member_number']);

}

if($_SESSION['mepr_member_number']) {
    $ezlink_member_teetime_link = "http://www.ezlinks.com/MemberAutoLogin.asp?Sponsor=kingsmillmem&MemberNumber=" . $_SESSION['mepr_member_number'] . "&Verify=" . md5("kingsmillmem" . $_SESSION['mepr_member_number']);
}

if(!get_user_meta($mepr_current_user->ID, "mepr_member_number", true)) {
    $_SESSION["error_status"] = "Add your Member Number. Please contact to Admin!";
}
?>

<div class="mp_wrapper krr_memberpress_nav">
    <div id="mepr-account-nav">
        <span class="mepr-nav-item <?php MeprAccountHelper::active_nav('home'); ?>">
            <a href="<?php echo MeprHooks::apply_filters('mepr-account-nav-home-link',$account_url.$delim.'action=home'); ?>"
                id="mepr-account-home"><?php echo MeprHooks::apply_filters('mepr-account-nav-home-label',_x('Edit profile', 'ui', 'memberpress')); ?></a>
        </span>

        <!-- <span class="mepr-nav-item <?php MeprAccountHelper::active_nav('subscriptions'); ?>">
        <a href="<?php echo MeprHooks::apply_filters('mepr-account-nav-subscriptions-link',$account_url.$delim.'action=subscriptions'); ?>"
            id="mepr-account-subscriptions"><?php echo MeprHooks::apply_filters('mepr-account-nav-subscriptions-label',_x('Subscriptions', 'ui', 'memberpress')); ?></a></span>
        <span class="mepr-nav-item <?php MeprAccountHelper::active_nav('payments'); ?>">
        <a href="<?php echo MeprHooks::apply_filters('mepr-account-nav-payments-link',$account_url.$delim.'action=payments'); ?>"
            id="mepr-account-payments"><?php echo MeprHooks::apply_filters('mepr-account-nav-payments-label',_x('Payments', 'ui', 'memberpress')); ?></a>
        </span> -->

        <!-- Tee Time -->
        <?php if($ezlink_member_teetime_link) { ?>
        <span class="mepr-nav-item">
            <a target="_blank" href="<?php echo $ezlink_member_teetime_link; ?>"
                id="mepr-account-teetime">Tee Time</a>
        </span>
        <?php } ?>

        <!-- Statement -->
        <?php if($_SESSION["ezlink_member_login_link"]) { ?>
        <span class="mepr-nav-item">
            <a target="_blank" href="<?php echo $_SESSION["ezlink_member_login_link"]; ?>"
                id="mepr-account-statement">Statement</a>
        </span>
        <?php } ?>


        <span class="mepr-nav-item <?php MeprAccountHelper::active_nav('newpassword'); ?>">
            <a href="<?php echo MeprHooks::apply_filters('mepr-account-nav-newpassword-link',$account_url.$delim.'action=newpassword'); ?>"
                id="mepr-account-newpassword"><?php echo MeprHooks::apply_filters('mepr-account-nav-newpassword-label',_x('Change Password', 'ui', 'memberpress')); ?></a>
        </span>

        <?php MeprHooks::do_action('mepr_account_nav', $mepr_current_user); ?>
        <span class="mepr-nav-item"><a href="<?php echo MeprUtils::logout_url(); ?>"
                id="mepr-account-logout"><?php _ex('Logout', 'ui', 'memberpress'); ?></a></span>
        
    </div>
</div>

<?php
if(isset($expired_subs) and !empty($expired_subs) && (empty($_GET['action']) || $_GET['action'] != 'update')) {
  // $account_url = MeprUtils::get_permalink(); // $mepr_options->account_page_url();
  $sub_label = MeprHooks::apply_filters('mepr-account-nav-subscriptions-label',_x('Subscriptions', 'ui', 'memberpress'));
  $delim = preg_match('#\?#',$account_url) ? '&' : '?';
  $errors = array(sprintf(_x('You have a problem with one or more of your %1$s. To prevent any lapses in your %1$s please visit your %2$s%3$s%4$s page to update them.', 'ui', 'memberpress'),strtolower($sub_label),'<a href="'.$account_url.$delim.'action=subscriptions">',$sub_label,'</a>'));
  MeprView::render('/shared/errors', get_defined_vars());
}