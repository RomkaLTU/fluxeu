<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    /**
     * Get all offers
     * @return bool|\WP_Query
     */
    public function offers()
    {
        $the_query = new \WP_Query([
            'post_type' => 'jobs',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ]);

        if ( $the_query->have_posts() ) {
            return $the_query;
        }

        return false;
    }
}
