<footer class="bg-gray-lighter flex text-gray-dark min-h-1/2 tracking-wide">
        <div class="flex flex-col lg:flex-row w-full mx-auto px-8 py-14 gap-8">
            <div class="flex flex-col lg:flex-row gap-8 w-full md:w-full lg:w-1/2">
                <div class="flex flex-col w-full xl:w-1/2">
                    <p class="mb-1"><strong>T: (03) 6210 6000</strong></p>
                    <p class="mb-1"><strong>HOBART</strong> - 182 Argyle Street</p>
                    <p class="mb-1"><strong>KINGSTON</strong> - Shop 93, Channel Court</p>
                    <p class="mb-1"><strong>ROSNY PARK</strong> - Level 1, 11 Bayfield Street</p>
                    <p class="mb-1"><strong>GLENORCHY</strong> - 3 / 370, Main Road</p>
                </div>
                <div class="flex flex-col w-full xl:w-1/2">
                    <?php wp_nav_menu([
                        'menu' => 'Footer Menu1',
                        'theme_location' => 'Footer menu'
                    ]); ?>
                </div>
            </div>            
            <div class="flex flex-col lg:flex-row gap-8 w-full md:w-full lg:w-1/2">
                <div class="flex flex-col w-full xl:w-1/2">
                    <?php wp_nav_menu([
                        'menu' => 'Footer Menu2',
                        'theme_location' => 'Footer menu'
                    ]); ?>
                </div>
                <div class="flex flex-col w-full xl:w-1/2 justify-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/QIP_ACC.png" alt="" class="w-64 max-w-full">
                </div>
            </div>
        </div>
    </footer>
    <div class="bottom bg-blue-dark text-white text-sm p-1 flex content-center justify-center">
        <div>&#169; Hobart Eye Surgeons</div>
    </div>
<?php wp_footer(); ?>
</body>
</html>
