<!-- Dark Mode Toggle Div -->
<div id="icon-div"
    class="cursor-pointer fixed left-0 top-1/2 flex flex-col p-4 rounded-r-2xl bg-gradient-to-br from-purple-600 to-blue-500 hover:shadow-[3px_1px_10px_2px_rgba(255,41,61,0.5)]">
    <svg id="moon" class="w-5 h-5 fill-black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
        </path>
    </svg>
    <svg id="sun" class="w-5 h-5 fill-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
            fill-rule="evenodd" clip-rule="evenodd">
        </path>
    </svg>
</div>
<!-- Dark Mode Toggle Div End-->

</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-gray-50 dark:bg-gray-900 py-6" role="contentinfo">
    <?php do_action( 'tailpress_footer' ); ?>

    <div class="container mx-auto text-center text-gray-500">
        &copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
    </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>