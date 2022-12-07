<?php /* Template Name: Page accueil */  ?>


<?php get_header( 'ECFracoon' ); 
?>
</head>
<body>
    <main>
          

        <?php
        $args = array(
            'post_type'=> 'post',
            'orderby'    => 'ID',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'posts_per_page' => 4
        );

        $result = new WP_Query( $args );

        if ( $result-> have_posts() ) : ?>
            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <article>
                    <?php the_post_thumbnail()?>
                    <?php the_content(); ?>
                </article>   
            <?php endwhile; ?>
        <?php endif; ?>


        
        <aside>
            <div>
                <section>
                    <h3>Catégories</h3>
                    <ul>
                        <li><a href="#" title="Redirection ...">High-Tech</a></li>
                        <li><a href="#" title="Redirection ...">Concentré du web</a></li>
                        <li><a href="#" title="Redirection ...">A propos</a></li>
                        <li><a href="#" title="Redirection ...">Astuces pour les développeurs</a></li>
                        <li><a href="#" title="Redirection ...">Ressources</a></li>
                        <li><a href="#" title="Redirection ...">Bonnes pratiques</a></li>
                    </ul>
                </section>
                <section>
                    <h3>Catégories</h3>
                    <ul>
                        <li><a href="#" title="Redirection ...">High-Tech</a></li>
                        <li><a href="#" title="Redirection ...">Concentré du web</a></li>
                        <li><a href="#" title="Redirection ...">A propos</a></li>
                        <li><a href="#" title="Redirection ...">Astuces pour les développeurs</a></li>
                        <li><a href="#" title="Redirection ...">Ressources</a></li>
                        <li><a href="#" title="Redirection ...">Bonnes pratiques</a></li>
                    </ul>
                </section>
            </div>
        </aside>

    </main>

</body>




<?php get_footer('ECFracoon');
?>