<?php
function night_form_search_block_form_alter(&$form, &$form_state, $form_id,$variables) {
    // $form['actions']['text'] = t('Search'); 
    $form['actions']['submit']['#attributes'] = array('class' => array('element-invisible')); 
    $form['actions']['sub'] = array(
        '#prefix' => '<button class="btn btn-blue">',
        '#markup' => '<span class="glyphicon glyphicon-search"></span>',
        '#suffix' => '</button>',
    );
}
function night_theme(&$existing, $type, $theme, $path) {
   $hooks['user_login_block'] = array(
     'template' => 'templates/user-login-block',
     'render element' => 'form',
   );
   return $hooks;
 }
function night_preprocess_user_login_block(&$vars) {
  $vars['name'] = render($vars['form']['name']);
  $vars['pass'] = render($vars['form']['pass']);
  $vars['submit'] = render($vars['form']['actions']['submit']);
  $vars['rendered'] = drupal_render_children($vars['form']);
} 
function night_preprocess_page(&$vars) {
  drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 'external');
  drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 'external');
}