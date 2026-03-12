<?php

add_action('template_redirect', 'disable_shop_page');

function disable_shop_page()
{

    if (is_shop()) {

        wp_redirect(home_url());

        exit;
    }
}