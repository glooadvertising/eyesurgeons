<footer class="bg-gray-lighter flex text-gray-dark min-h-1/2 border-b-8 border-blue-dark tracking-wide">
        <div class="grid w-full lg:flex mx-auto px-8 py-14 gap-8">
            <div class="flex flex-col w-full lg:w-1/3 xl:w-1/2">
                <p class="mb-1"><strong>T: (03) 6210 6000</strong></p>
                <p class="mb-1"><strong>HOBART</strong> - 182 Argyle Street</p>
                <p class="mb-1"><strong>KINGSTON</strong> - Shop 93, Channel Court</p>
                <p class="mb-1"><strong>ROSNY PARK</strong> - Level 1, 11 Bayfield Street</p>
                <p class="mb-1"><strong>GLENORCHY</strong> - 3 / 370, Main Road</p>

            </div>
            <div class="grid gap-8 sm:flex lg:w-2/3 xl:w-1/2">
                <div class="flex flex-col w-full sm:w-1/2 xl:w-1/2">
                    <?php wp_nav_menu([
                        'menu' => 'Footer Menu1',
                        'theme_location' => 'Footer menu'
                    ]); ?>
                </div>
                <div class="flex flex-col w-full sm:w-1/2 xl:w-1/2">
                    <?php wp_nav_menu([
                        'menu' => 'Footer Menu2',
                        'theme_location' => 'Footer menu'
                    ]); ?>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
