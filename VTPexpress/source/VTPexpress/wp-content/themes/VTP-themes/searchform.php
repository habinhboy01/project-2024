<form role="search" onsubmit="return submitForm();" method="get" class="search-form"
    action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>

        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Tìm kiếm...', 'placeholder', 'textdomain' ); ?>"
            value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>