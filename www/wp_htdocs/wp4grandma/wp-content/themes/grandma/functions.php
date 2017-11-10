<?php

register_nav_menu('gnav', 'グローバルナビゲーション');


//add_theme_support( 'menus' );
//add_theme_support( 'post-thumbnails' );


//アップデート通知を非表示
if (!current_user_can('administrator')) {
  add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));
}


//権限ごと
function remove_menus() {
  if (!current_user_can('administrator')) {
    remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit-comments.php');
    remove_menu_page('profile.php');
    remove_menu_page('tools.php');
  }
}
add_action('admin_menu', 'remove_menus');

remove_action( 'welcome_panel', 'wp_welcome_panel' );


//ダッシュボード
function example_remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  
  remove_meta_box('dashboard_activity', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');



add_action('wp_dashboard_setup', 'my_dashboard_widgets');
function my_dashboard_widgets() {
  wp_add_dashboard_widget('my_theme_options_widget', 'マスターたちよ', 'my_dashboard_widget_function');
}
function my_dashboard_widget_function() {
  global $wp_meta_boxes;
  //echo "メンテナンス中だよ(´・ω・｀)";
  echo "ゆっくりしていってね(´・ω・｀)";
  /*
  echo "<pre>";
  var_dump($wp_meta_boxes['dashboard']);
  echo "</pre>";
  */
}



//管理画面上部のメニューを非表示
function my_wp_before_admin_bar_render() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('wp-logo');
  //$wp_admin_bar->remove_menu('site-name');
  $wp_admin_bar->remove_menu('updates');
  $wp_admin_bar->remove_menu('comments');
  $wp_admin_bar->remove_menu('new-content');
  $wp_admin_bar->remove_menu('my-account');
}
add_action( 'wp_before_admin_bar_render', 'my_wp_before_admin_bar_render' );


//表示オプションとヘルプも非表示
function my_admin_head(){
  echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
  echo '<style type="text/css">#screen-options-link-wrap{display:none;}</style>';
}
add_action('admin_head', 'my_admin_head');


//
function custom_admin_footer() {
  echo 'やぁ(´・ω・｀)&nbsp;';
}
add_filter('admin_footer_text', 'custom_admin_footer');


//セルフピンバックの禁止
function no_self_ping( &$links ) {
  $home = get_option( 'home' );
  foreach ( $links as $l => $link )
    if ( 0 === strpos( $link, $home ) )
      unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );



/*
## Admin
*/

function my_admin_style(){
  wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );
