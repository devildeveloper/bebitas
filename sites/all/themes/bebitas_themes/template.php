<?php 
function bebitas_theme_preprocess_page(&$variables, $hook) {

    $arg0 = arg(0);
    $arg1 = arg(1);

    if (isset($variables['node']->type) && $variables['node']->type == "portada") {
        $variables['theme_hook_suggestions'][] = 'page__portada';
    }elseif (isset($variables['node']->type) && $variables['node']->type == "bebita") {
        $variables['theme_hook_suggestions'][] = 'page__bebita';
    }elseif (isset($variables['node']->type) && $variables['node']->type == "page") {
        $variables['theme_hook_suggestions'][] = 'page__anunciate';
    }
}  
function bebitas_theme() {
    $items = array();
    // create custom user-login.tpl.php
    $items['user_login'] = array(
        'render element' => 'form', 'path' => drupal_get_path('theme', 'bebitas_theme') . '/templates',
        'template' => 'page__login'
    );
    return $items;
}
?>
