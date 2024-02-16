<section class="bg-white flex text-blue-dark min-h-1/2">
    <div class="grid lg:flex container w-page mx-auto px-8 py-16 gap-36">
        <div class="left-col flex flex-col w-full lg:w-1/2">
            <h2 class="text-2xl font-bold mb-6">FAQ</h2>
            <?php 
                $args = [
                    'post_type' => 'faq',
                    'order' => 'ASC'
                ];
            ?>
            <?php
                // The Query.
                $faqs = new WP_Query( $args );
            ?>
            <?php while ( $faqs->have_posts() ) { ?>
                <?php $faqs->the_post(); ?>

                <button class="accordion">
                    <h3><?php the_title(); ?></h3>
                    <span class="plus">
                        <div></div>
                        <div></div>
                    </span>
                </button>
                <div class="panel">
                    <?php the_content();?>
                </div>
            <?php }?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="right-col flex w-full lg:w-1/2">
            
        </div>
    </div>
</section>
