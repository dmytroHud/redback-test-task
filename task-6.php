<?php
$events = new WP_Query(array(
    'post_type' => 'rb_event',
    'posts_per_page' => 6,
    'tax_query' => array(
        'relation' => 'AND',
		array(
			'taxonomy' => 'rb_event_category',
			'field'    => 'slug',
			'terms'    => 'latest-events',
        ),
        array(
            'taxonomy' => 'rb_event_category',
            'field'    => 'slug',
            'terms'    => 'previous-events',
            'operator' => 'NOT IN'
        )
    ),
    'meta_key' => 'start_date',
    'orderby' => array(
        'meta_value' => 'ASC',
        'title' => 'ASC',
    ),
));
?>


