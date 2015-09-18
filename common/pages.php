<?php
  // Define page.
  define('PAGE_ABOUT', 1);
  define('PAGE_CONTACT', 2);
  define('PAGE_EVENTS', 3);
  define('PAGE_HOME', 4);
  define('PAGE_JOIN', 5);
  define('PAGE_PAST_PROJECTS', 6);
  define('PAGE_PROJECTS', 7);

  // Define page titles.
  $titles = array(
    PAGE_ABOUT => 'About',
    PAGE_CONTACT => 'Contact',
    PAGE_EVENTS => 'Events',
    PAGE_HOME => 'Home',
    PAGE_JOIN => 'Join',
    PAGE_PAST_PROJECTS => 'Past Projects',
    PAGE_PROJECTS => 'Projects',
  );

  function get_page_title($page) {
    global $titles;

    if (!array_key_exists($page, $titles)) {
      throw new InvalidArgumentException('Could not find title for given page.');
    }

    return 'IWU ACM | ' . $titles[$page];
  }

?>