<div id="elpico" class="flex lg:hidden fixed bottom-0 w-full h-auto z-40">
<div id="mobile-form-container" class="bg-blue-light flex flex-col p-8 lg:p-16 gap-12 w-full shadow-xl">
    <h2 class="text-white cursor-pointer text-xl lg:text-2xl font-bold flex justify-between">BOOK YOUR FREE ASSESSMENT<span id="minus" class="hidden text-sm !font-light uppercase">Close</span></h2>
    <!-- <form id="mobile-form" action="" class="hidden flex-col gap-6 transition-all">
        <input type="text" class="p-4 h-14" placeholder="Full name">
        <input type="email" class="p-4 h-14" placeholder="Email address">
        <input type="phone" class="p-4 h-14" placeholder="Phone number">
        <textarea name="" id="" cols="30" rows="10" class="p-4" placeholder="Message"></textarea>
        <input type="button" value="Submit" class="btn inline-flex ml-auto cursor-pointer hover:ring-2 hover:ring-white hover:ring-inset">
    </form> -->
    <?php echo do_shortcode( '[wpforms id="1008" title="false"]' ); ?>
    <p id="mobile-form-paragraph" class="mb-4 text-white italic text-sm hidden transition-all">
        Submit your details and one of our team members will contact you to line up an appointment for your free assessment to assess eligibility, treatment plan, and quote.
    </p>
</div>
</div>