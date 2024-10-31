<?php
function ub_mag_filter_robots($rv, $public)
{
    $content = get_option('ub_mag_content');
    if ($content) {
        $rv = esc_attr(strip_tags($content));
    }

    return $rv;
}
function ub_mag_deactivation()
{
    delete_option('ub_mag_content');
}

function ub_mag_activation()
{
    add_option('ub_mag_content', false);
}
