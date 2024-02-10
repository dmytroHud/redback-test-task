<?php
$facebook = get_field('facebook_link');
$twitter = get_field('twitter_link');
$instagram = get_field('instagram_link');

$social_links = [
    $facebook,
    $twitter,
    $instagram
];

?>

<?php if (!empty($social_links)): ?>
    <ul>
        <?php foreach ($social_links as $social_link): ?>
            <?php if (!empty($social_link)): ?>
                <li>
                    <a href="<?php echo esc_url($social_link['url']); ?>"
                       target="<?php echo esc_attr($social_link['target'] ? : '_self'); ?>">
                        <?php echo esc_html($social_link['title']); ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
