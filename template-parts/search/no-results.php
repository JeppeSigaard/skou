<section class="no-results section-padding">
    <header class="section-header">
        <h1><?php echo ( is_404() ) ? 'Siden ikke fundet' : 'Søgningen gav 0 resultater'; ?></h1>
    </header>
    <form action="<?php echo esc_url(get_bloginfo('url')) ?>" method="get" class="search-form">
        <input type="text" name="s">
        <input type="submit">
    </form>
</section>
