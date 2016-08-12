<?php

if (have_posts()) : while (have_posts()) : the_post();

the_title();

endwhile;

else :

get_template_part('template-parts/search/no-results');

get_template_part('template-parts/common/news-section');

endif;

