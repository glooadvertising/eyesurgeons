<?php

    /* 
    Template Name: Game Changer
    */
    get_header();
?>
    <main id="main-wrapper" class="relative flex flex-col w-full h-full min-h-96">
        <div id="wrapper-one" class="flex absolute justify-center w-full h-full z-1">
            <div id="form-container-wrapper" class="flex items-start relative w-page h-full mx-auto self-center px-8">
                <div class="flex flex-col z-10 relative w-full lg:w-1/2 lg:translate-x-full pt-50 lg:pt-44 mb-16 gap-12 h-full">
                    <h1 class="text-blue-dark bg-white p-4 font-bold text-4xl -translate-y-24 lg:translate-y-0 md:text-4xl xl:text-6xl uppercase text-center shadow-lg">Game Changer!</h1>
                    <div id="form-container" class="bg-blue-light hidden lg:flex flex-col sticky top-4 h-auto p-16 gap-12 w-full shadow-lg z-10">
                        <h2 class="text-white text-2xl font-bold">BOOK YOUR FREE ASSESSMENT</h2>
                        <!-- <form action="" class=" flex flex-col gap-6">
                            <input type="text" class="p-4 h-14" placeholder="Full name">
                            <input type="email" class="p-4 h-14" placeholder="Email address">
                            <input type="phone" class="p-4 h-14" placeholder="Phone number">
                            <textarea name="" id="" cols="30" rows="10" class="p-4" placeholder="Message"></textarea>
                            <input type="button" value="Submit" class="btn inline-flex ml-auto cursor-pointer hover:ring-2 hover:ring-white hover:ring-inset">
                        </form> -->
                        <?php echo do_shortcode( '[wpforms id="1008" title="false"]' ); ?>
                        <p class="mb-4 text-white text-sm italic">
                            Submit your details and one of our team members will contact you to line up an appointment for your free assessment to assess eligibility, treatment plan, and quote.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrapper-two" class="bg-gray-light flex relative flex-col justify-center w-full h-full z-1">
            <div id="wrapper-two-container" class="relative h-full">
                <section id="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')" class="flex relative w-full h-50 bg-cover bg-[20%_center] md-bg-left lg:bg-center">
                </section>

                <section class="bg-blue-dark flex text-white min-h-1/2">
                    <div class="grid lg:flex container w-full lg:w-page mx-auto px-8 py-16 gap-36">
                        <div class="left-col flex flex-col w-full lg:w-1/2">
                            <h2 class="text-2xl font-bold mb-6 !text-inherit"><?php the_title(); ?></h2>
                            <?php the_content();?>
                        </div>
                        <div class="right-col flex w-full lg:w-1/2">
                            
                        </div>
                    </div>
                </section>

                <?php get_template_part( 'partials/faq' );?>

            </div>
        </div>

    </main>
    <?php get_template_part( 'partials/mobile-form' ); ?>
<?php get_footer(); ?>