<?php
function legball_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'legball_theme_setup');

function legball_enqueue_assets() {
    // Enqueue FontAwesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@400;500;600;700;800&display=swap', array(), null);
    // Enqueue Theme CSS
    wp_enqueue_style('legball-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style('legball-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('legball-style'), '1.0.0');
    
    // Enqueue Swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0.0');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.0.0', true);
    
    // Enqueue page-specific CSS based on the template
    if ( is_page() ) {
        $template_slug = get_page_template_slug();
        if ( $template_slug ) {
            $template_name = pathinfo( $template_slug, PATHINFO_FILENAME );
            $css_file_path = '/assets/css/' . $template_name . '.css';
            if ( file_exists( get_template_directory() . $css_file_path ) ) {
                wp_enqueue_style( 'legball-' . sanitize_title( $template_name ), get_template_directory_uri() . $css_file_path, array('legball-style'), '1.0.0' );
            }
        }
    }

    // Enqueue JS
    wp_enqueue_script('legball-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'legball_enqueue_assets');

function legball_create_theme_pages() {
    // List of page titles, slugs, and template files
    $pages = array(
        'about' => array(
            'title'    => 'About Us',
            'template' => 'about.php'
        ),
        'about-federation' => array(
            'title'    => 'About Federation',
            'template' => 'about-federation.php'
        ),
        'vision-mission' => array(
            'title'    => 'Vision & Mission',
            'template' => 'vision-mission.php'
        ),
        'office-bearers' => array(
            'title'    => 'Office Bearers',
            'template' => 'office-bearers.php'
        ),
        'executive-committee' => array(
            'title'    => 'Executive Committee',
            'template' => 'executive-committee.php'
        ),
        'state-units' => array(
            'title'    => 'State Units',
            'template' => 'state-units.php'
        ),
        'affiliation-details' => array(
            'title'    => 'Affiliation Details',
            'template' => 'affiliation-details.php'
        ),
        'constitution-rules' => array(
            'title'    => 'Constitution / Rules',
            'template' => 'constitution-rules.php'
        ),
        'tournaments' => array(
            'title'    => 'Tournaments',
            'template' => 'tournaments.php'
        ),
        'national-championship' => array(
            'title'    => 'National Championship',
            'template' => 'national-championship.php'
        ),
        'state-championship' => array(
            'title'    => 'State Championship',
            'template' => 'state-championship.php'
        ),
        'district-championship' => array(
            'title'    => 'District Championship',
            'template' => 'district-championship.php'
        ),
        'school-games' => array(
            'title'    => 'School Games',
            'template' => 'school-games.php'
        ),
        'university-games' => array(
            'title'    => 'University Games',
            'template' => 'university-games.php'
        ),
        'calendar-events' => array(
            'title'    => 'Calendar of Events',
            'template' => 'calendar-events.php'
        ),
        'tournament-results' => array(
            'title'    => 'Results',
            'template' => 'tournament-results.php'
        ),
        'players-corner' => array(
            'title'    => "Players Corner",
            'template' => 'players corner.php'
        ),
        'player-registration' => array(
            'title'    => 'Player Registration',
            'template' => 'player-registration.php'
        ),
        'player-certificates' => array(
            'title'    => 'Player Certificates',
            'template' => 'player-certificates.php'
        ),
        'selection-trials' => array(
            'title'    => 'Selection Trials',
            'template' => 'selection-trials.php'
        ),
        'player-achievements' => array(
            'title'    => 'Achievements',
            'template' => 'player-achievements.php'
        ),
        'officials' => array(
            'title'    => 'Officials',
            'template' => 'officials.php'
        ),
        'referee-registration' => array(
            'title'    => 'Referee Registration',
            'template' => 'referee-registration.php'
        ),
        'coach-registration' => array(
            'title'    => 'Coach Registration',
            'template' => 'coach-registration.php'
        ),
        'technical-officials' => array(
            'title'    => 'Technical Officials',
            'template' => 'technical-officials.php'
        ),
        'training-programs' => array(
            'title'    => 'Training Programs',
            'template' => 'training-programs.php'
        ),
        'official-certification' => array(
            'title'    => 'Certification',
            'template' => 'official-certification.php'
        ),
        'membership' => array(
            'title'    => 'Membership',
            'template' => 'membership.php'
        ),
        'state-affiliation' => array(
            'title'    => 'State Affiliation',
            'template' => 'state-affiliation.php'
        ),
        'district-affiliation' => array(
            'title'    => 'District Affiliation',
            'template' => 'district-affiliation.php'
        ),
        'membership-fees' => array(
            'title'    => 'Membership Fees',
            'template' => 'membership-fees.php'
        ),
        'apply-online' => array(
            'title'    => 'Apply Online',
            'template' => 'apply-online.php'
        ),
        'downloads' => array(
            'title'    => 'Downloads',
            'template' => 'downloads.php'
        ),
        'registration-forms' => array(
            'title'    => 'Registration Forms',
            'template' => 'registration-forms.php'
        ),
        'rules-book' => array(
            'title'    => 'Rules Book',
            'template' => 'rules-book.php'
        ),
        'certificates-format' => array(
            'title'    => 'Certificates Format',
            'template' => 'certificates-format.php'
        ),
        'circulars-notices' => array(
            'title'    => 'Circulars & Notices',
            'template' => 'circulars-notices.php'
        ),
        'gallery' => array(
            'title'    => 'Gallery',
            'template' => 'gallery.php'
        ),
        'photo-gallery' => array(
            'title'    => 'Photo Gallery',
            'template' => 'photo-gallery.php'
        ),
        'video-gallery' => array(
            'title'    => 'Video Gallery',
            'template' => 'video-gallery.php'
        ),
        'media-coverage' => array(
            'title'    => 'Media Coverage',
            'template' => 'Media-coverage.php'
        ),
        'contact' => array(
            'title'    => 'Contact',
            'template' => 'contact.php'
        ),
        'office-address' => array(
            'title'    => 'Office Address',
            'template' => 'office-address.php'
        ),
        'contact-numbers' => array(
            'title'    => 'Contact Numbers',
            'template' => 'contact-numbers.php'
        ),
        'contact-emails' => array(
            'title'    => 'Contact Emails',
            'template' => 'contact-emails.php'
        ),
        'google-map' => array(
            'title'    => 'Google Map',
            'template' => 'google-map.php'
        ),
        'feedback-form' => array(
            'title'    => 'Feedback Form',
            'template' => 'feedback-form.php'
        ),
    );

    foreach ( $pages as $slug => $page_data ) {
        // Check if the page already exists by slug
        $existing_page = get_page_by_path( $slug );
        if ( ! $existing_page ) {
            $page_id = wp_insert_post( array(
                'post_title'    => $page_data['title'],
                'post_name'     => $slug,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_content'  => '', // Content is handled by the template
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            }
        } else {
            // Ensure the template meta is set correctly even if page exists
            $current_template = get_post_meta( $existing_page->ID, '_wp_page_template', true );
            if ( $current_template !== $page_data['template'] ) {
                update_post_meta( $existing_page->ID, '_wp_page_template', $page_data['template'] );
            }
        }
    }
}
add_action( 'init', 'legball_create_theme_pages' );

// Register Custom Post Type for Banners
function legball_register_banner_cpt() {
    $labels = array(
        'name'                  => _x( 'Banners', 'Post Type General Name', 'legball' ),
        'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'legball' ),
        'menu_name'             => __( 'Banners', 'legball' ),
        'all_items'             => __( 'All Banners', 'legball' ),
        'add_new_item'          => __( 'Add New Banner', 'legball' ),
        'add_new'               => __( 'Add New', 'legball' ),
        'new_item'              => __( 'New Banner', 'legball' ),
        'edit_item'             => __( 'Edit Banner', 'legball' ),
        'update_item'           => __( 'Update Banner', 'legball' ),
        'view_item'             => __( 'View Banner', 'legball' ),
        'search_items'          => __( 'Search Banner', 'legball' ),
    );
    $args = array(
        'label'                 => __( 'Banner', 'legball' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-images-alt2',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
    );
    register_post_type( 'legball_banner', $args );
}
add_action( 'init', 'legball_register_banner_cpt', 0 );

// Add Meta Box for Banner Details
function legball_banner_meta_boxes() {
    add_meta_box(
        'legball_banner_details',
        __( 'Banner Details', 'legball' ),
        'legball_banner_details_callback',
        'legball_banner',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'legball_banner_meta_boxes' );

function legball_banner_details_callback( $post ) {
    wp_nonce_field( 'legball_save_banner_details', 'legball_banner_meta_nonce' );

    $subtitle = get_post_meta( $post->ID, '_banner_subtitle', true );
    $btn_primary_text = get_post_meta( $post->ID, '_banner_btn_primary_text', true );
    $btn_primary_link = get_post_meta( $post->ID, '_banner_btn_primary_link', true );
    $btn_secondary_text = get_post_meta( $post->ID, '_banner_btn_secondary_text', true );
    $btn_secondary_link = get_post_meta( $post->ID, '_banner_btn_secondary_link', true );

    echo '<table class="form-table">';
    echo '<tr><th><label for="banner_subtitle">' . __( 'Subtitle', 'legball' ) . '</label></th>';
    echo '<td><input type="text" id="banner_subtitle" name="banner_subtitle" value="' . esc_attr( $subtitle ) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th><label for="banner_btn_primary_text">' . __( 'Primary Button Text', 'legball' ) . '</label></th>';
    echo '<td><input type="text" id="banner_btn_primary_text" name="banner_btn_primary_text" value="' . esc_attr( $btn_primary_text ) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th><label for="banner_btn_primary_link">' . __( 'Primary Button Link', 'legball' ) . '</label></th>';
    echo '<td><input type="url" id="banner_btn_primary_link" name="banner_btn_primary_link" value="' . esc_attr( $btn_primary_link ) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th><label for="banner_btn_secondary_text">' . __( 'Secondary Button Text', 'legball' ) . '</label></th>';
    echo '<td><input type="text" id="banner_btn_secondary_text" name="banner_btn_secondary_text" value="' . esc_attr( $btn_secondary_text ) . '" class="regular-text" /></td></tr>';
    
    echo '<tr><th><label for="banner_btn_secondary_link">' . __( 'Secondary Button Link', 'legball' ) . '</label></th>';
    echo '<td><input type="url" id="banner_btn_secondary_link" name="banner_btn_secondary_link" value="' . esc_attr( $btn_secondary_link ) . '" class="regular-text" /></td></tr>';
    echo '</table>';
}

function legball_save_banner_details( $post_id ) {
    if ( ! isset( $_POST['legball_banner_meta_nonce'] ) || ! wp_verify_nonce( $_POST['legball_banner_meta_nonce'], 'legball_save_banner_details' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['banner_subtitle'] ) ) {
        update_post_meta( $post_id, '_banner_subtitle', sanitize_text_field( $_POST['banner_subtitle'] ) );
    }
    if ( isset( $_POST['banner_btn_primary_text'] ) ) {
        update_post_meta( $post_id, '_banner_btn_primary_text', sanitize_text_field( $_POST['banner_btn_primary_text'] ) );
    }
    if ( isset( $_POST['banner_btn_primary_link'] ) ) {
        update_post_meta( $post_id, '_banner_btn_primary_link', esc_url_raw( $_POST['banner_btn_primary_link'] ) );
    }
    if ( isset( $_POST['banner_btn_secondary_text'] ) ) {
        update_post_meta( $post_id, '_banner_btn_secondary_text', sanitize_text_field( $_POST['banner_btn_secondary_text'] ) );
    }
    if ( isset( $_POST['banner_btn_secondary_link'] ) ) {
        update_post_meta( $post_id, '_banner_btn_secondary_link', esc_url_raw( $_POST['banner_btn_secondary_link'] ) );
    }
}
add_action( 'save_post_legball_banner', 'legball_save_banner_details' );
