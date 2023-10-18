<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-gray-100 dark:bg-regal-blue text-gray-900 dark:text-white antialiased' ); ?>>

    <?php do_action( 'tailpress_site_before' ); ?>

    <div id="page" class="min-h-screen flex flex-col">

        <?php do_action( 'tailpress_header' ); ?>

        <header id="header" class="sticky top-0 backdrop-filter backdrop-blur-md bg-opacity-30">

            <div class="mx-auto container ">
                <div class="lg:flex lg:justify-between lg:items-center py-6">
                    <div class="flex justify-between items-center">
                        <div class="flex justify-between">
                            <div>
                                <?php if ( has_custom_logo() ) { ?>
                                <?php the_custom_logo(); ?>
                                <?php } else { ?>
                                <a href="<?php echo get_bloginfo( 'url' ); ?>"
                                    class="font-lovely-home font-extrabold text-2xl">
                                    <span
                                        class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500  to-indigo-500">
                                        <?php echo get_bloginfo( 'name' ); ?>
                                    </span>

                                </a>

                                <?php } ?>
                            </div>

                        </div>

                        <div class="lg:hidden">
                            <a href="#" aria-label="Toggle navigation">
                                <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" id="primary-menu-toggle"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                        <g id="icon-shape">
                                            <path
                                                d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                                id="Combined-Shape">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <svg class="hidden inline-block w-5 h-5 dark:fill-white" version="1.1"
                                    id="primary-menu-close" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460.775 460.775"
                                    xml:space="preserve">
                                    <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55
                                    c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55
                                    c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505
                                    c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55
                                    l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719
                                    c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <?php
                    wp_nav_menu(
                        array(
                            'container_id'    => 'primary-menu',
                            'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                            'menu_class'      => 'lg:flex lg:-mx-4',
                            'theme_location'  => 'primary',
                            'li_class'        => 'lg:mx-4',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                    <nav id="primary-menu"
                        class="hidden absolute lg:relative max-w-min lg:max-w-fit w-full top-full lg:top-auto right-4 lg:right-auto border dark:border-gray-700 lg:border-none shadow-[3px_1px_10px_2px_rgba(59,7,100,0.5)] lg:shadow-none bg-gray-100 dark:bg-regal-blue mt-1 p-4 lg:mt-0 lg:p-0 lg:bg-transparent dark:lg:bg-transparent lg:flex">
                        <ul class="lg:flex lg:-mx-4 font-medium space-y-2.5 lg:space-y-0 pl-20">
                            <li class="lg:mx-4 hover:text-indigo-600"><a href="">Home</a></li>
                            <li class="lg:mx-4 hover:text-indigo-600"><a href="">About</a></li>
                            <li class="lg:mx-4 hover:text-indigo-600"><a href="">Services</a></li>
                            <li class="lg:mx-4 hover:text-indigo-600"><a href="">Projects</a></li>
                            <li class="lg:mx-4 hover:text-indigo-600"><a href="">Contact</a></li>
                        </ul>
                        <button
                            class="lg:ml-4 px-4 py-1 mt-2 lg:-mt-px ml-[50px] text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 lg:self-center">Download
                            CV
                        </button>

                    </nav>
                </div>
            </div>
        </header>

        <div id="content" class="site-content flex-grow">

            <?php do_action( 'tailpress_content_start' ); ?>

            <main>