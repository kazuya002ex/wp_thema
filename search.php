<?php get_header(); ?>
  <section>
    <h2>検索結果</h2>

    <ul class="news-area">
    <?php if(!have_posts()) : ?>
      <li>お探しの記事が存在しません。</li>
    <?php endif; ?>
    <?php while(have_posts()):the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><span><?php echo get_the_date('Y年n月j日'); ?></span><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>

    <?php get_search_form(); ?>
  </section>
<?php get_footer(); ?>