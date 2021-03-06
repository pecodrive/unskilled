<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
        <div class="articleDate text-center">
            <time>最終更新日時 <?php echo get_the_modified_date("Y/m/d H:i:s");?></time>
        </div>
        <?php get_template_part("sns"); ?>
        <div class="articleTitle text-center">
            <h1>
                <?php the_title();?>
            </h1>
        </div>
        <div class="articleCategory text-center">
        <?php
            foreach (get_the_category() as $item) {
                $link = get_category_link($item->term_id);
                echo "<a href=\"{$link}\">{$item->name}</a>";
            }
        ?>
        </div>
        <div class="recomend text-center">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="outlineWrap center-block col-xs-12">
            <?php get_template_part("outline"); ?>
        </div>
        <div class="content">
            <?php the_content();?>
        </div>
        <?php get_template_part("sns"); ?>
<?php get_template_part("related"); ?>
<?php endif; wp_reset_query();?>
<?php get_template_part("comments"); ?>
</div><!-- main -->
<?php get_template_part("sidebar"); ?>
<?php get_footer(); ?>
