<?php /* Template Name: With Second Menu Location */ ?>

<div class="js-filter">
<?php 

$args = array(
  'post_type' => 'post',
  'post_per_page' => -1
);

$query = new WP_Query($args);

if($query->have_posts()) :
  while($query->have_posts()) : $query->the_post();
  the_title('<h2>', '</h2>');
endwhile;
endif;
wp_reset_postdata();?>
</div>

<div class="categories">
<ul>
<li class="js-filter-item"><a href="">All</a></li>
<?php
$cat_args = array(
'exclude' => array(1),
'opeion_all' => 'All'
);

$categories = get_categories($_args);
foreach($categories as $cat) : ?>
<li class="js-filter-item"><a data-category="<?= $cat->term_id; ?>" href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name; ?></a></li>
<?php endforeach; ?>
</ul>
</div>
