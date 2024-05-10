<?php /**template name: tracking */ get_header() ?>

<div class="container">
    <div class="heading-tracking-title">Tra cứu đơn hàng</div>

    <div class="tracking-line mb-5">


        <div class="code">
            <form action="" method="POST">
                <label for="">Mã đơn hàng</label>
                <input type="text" class="text" name="order-code" value="VTP123">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="car-loading">
            <div class="car-body">
                <div class="front wheel"></div>
                <div class="back wheel"></div>
            </div>
            <div class="cover">
                <div class="path"></div>
            </div>
            <div class="loading-text">Đang kiểm tra...</div>
        </div>
        <div class="order-info row position-relative"
            data-json="<?php bloginfo('template_directory') ?>/data/tracking.json">
        </div>


    </div>

</div>


<?php get_footer() ?>