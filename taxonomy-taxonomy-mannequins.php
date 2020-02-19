<?php
// REDIRECT IF IS TAXONOMY PARENT OR CHILD
$term = get_queried_object();

if((int)$term->parent) {
   get_template_part('template-parts/content-taxonomy/sub-collections');
}else{
   get_template_part('template-parts/content-taxonomy/collections');
} 