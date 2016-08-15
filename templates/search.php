<?php

if (have_posts()) :

get_template_part('template-parts/search/results');

else :

get_template_part('template-parts/search/no-results');


endif;

