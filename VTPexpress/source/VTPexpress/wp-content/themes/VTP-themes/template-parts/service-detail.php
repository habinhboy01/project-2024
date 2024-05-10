<?php /**template name: service */ get_header() ?>

<div class="crumb">
    <?php the_title() ?>
</div>
<div class="container ser-detail-wrap">
    <div class="img-bg">
        <?php the_post_thumbnail() ?>
    </div>
    <div class="row detail-content">
        <div class="col-lg-8">
            <?php the_content() ?>
        </div>
        <div class="col-lg-4">
            <div class="content-table">

            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>