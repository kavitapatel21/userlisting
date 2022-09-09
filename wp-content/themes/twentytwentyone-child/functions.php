<?php
/* Child theme generated with WPS Child Theme Generator */

if (!function_exists('b7ectg_theme_enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'b7ectg_theme_enqueue_styles');

    function b7ectg_theme_enqueue_styles()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
    }
}

//custom admin menu for user listing
add_action('admin_menu', 'custom_menu');
function custom_menu()
{
    add_menu_page(
        'Page Title',
        'Users Listing',
        'edit_posts',
        'menu_slug',
        'showdata',
        'dashicons-media-spreadsheet'
    );
}
//show all saved record
function showdata()
{ ?>
    <?php
    global $wpdb;
    $tablename = $wpdb->prefix . "register";
    //$entriesList = $wpdb->get_results("SELECT * FROM ".$tablename." WHERE flag = 0 order by id asc");
    $entriesList = $wpdb->get_results("SELECT * FROM " . $tablename . " WHERE flag = '0' order by id asc");
    $total_rows = $wpdb->num_rows;
    if (!isset($_GET['paged'])) {
        $page_number = 1;
    } else {
        $page_number = $_GET['paged'];
    }
    $limit = 3;  // variable to store the number of rows per page  
    $offset = ($page_number - 1) * $limit;  // get the initial page number
    $total_pages = ceil($total_rows / $limit);   // get the required number of pages
    $entriesList = $wpdb->get_results("SELECT * FROM " . $tablename . " WHERE flag = '0' LIMIT $limit OFFSET $offset");
    ?>
    <h1 style="text-align: center;">User Listing</h1>
    <table class="wp-list-table widefat fixed striped table-view-list users">
        <div class="tablenav bottom">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            foreach ($entriesList as $entry) {
                $id = $entry->id;
                $fname = $entry->firstname;
                $lname = $entry->lastname;
                $uname = $entry->username;
                $email = $entry->email;
                $phone = $entry->phoneno; ?>
                <tbody id="the-list">
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $uname; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" value="<?php echo $id; ?>" name="id">
                                <input type="submit" value="approve" name="btn-approve" class="btn">
                                <input type="submit" value="delete" name="btn-delete" class="btn">
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Username</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </tfoot>
        </div>
    </table>
    <?php
    $tag = '<div class="pagination">';
    $tag .= paginate_links(array(
        'base'              => add_query_arg('paged', '%#%'),
        'format'            => '',
        'current'           => $page_number,
        'total'             =>  $total_pages,
        'prev_next'         => True,
        'prev_text'         => __('«'),
        'next_text'         => __('»'),
    ));
    $tag .= '</div>';
    echo $tag;
}

//css for pagination
add_action('admin_head', 'my_custom_fonts'); // admin_head is a hook my_custom_fonts is a function we are adding it to the hook
function my_custom_fonts()
{
    echo '<style>
    .pagination {
      margin-top: 10px;
      justify-content: center;
  }
  
  .page-numbers {
      display: inline-block;
      padding: 5px 10px;
      margin: 0 2px 0 0;
      border: 1px solid #a09696;
      line-height: 1;
      text-decoration: none;
      border-radius: 2px;
      font-weight: 600;
      background-color: lightsteelblue;
  }
  
  span.page-numbers.current,
  a.page-numbers:hover {
      background: #f9f9f9;
      color: #0000008f;
  }
    </style>';
}

//user approve
function approve()
{
    global $wpdb;
    $id = $_POST['id'];
    $execut = $wpdb->query($wpdb->prepare("UPDATE wp_register SET flag = '1' WHERE ID = $id"));
    $wpdb->query($execut);
    $entriesList = $wpdb->get_results("SELECT * FROM wp_register WHERE id = $id");
    foreach ($entriesList as $entry) {
        $id = $entry->id;
        $fname = $entry->firstname;
        $lname = $entry->lastname;
        $uname = $entry->username;
        $email = $entry->email;
    }
    $userData = array(
        'user_login' =>  $uname,
        'first_name' => $fname,
        'last_name' => $lname,
        'user_pass' => '',
        'user_email' => $email,
        'user_url' => '',
        'role' => 'subscriber'
    );
    if (!username_exists(sanitize_user($uname)) && is_email(sanitize_email($email)) && !email_exists(sanitize_email($email))) {
        wp_insert_user($userData);
    };
    //$last_inserted_id = $wpdb->insert_id;
    //echo $last_inserted_id;
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $pw = substr(str_shuffle($chars), 0, 12);
    $password = md5($pw);
    $wpdb->update(
        $wpdb->users,
        array(
            'user_pass'           => $password,
            'user_activation_key' => '',
        ),
        array('user_email' => $email)
    );
    $subject = "Your account is approved";
    $subject = "Username & Password";
    $txt = "Username : " . $uname . '<br>';
    $txt .= "Password : " . $pw;
    $to = $email;
    //echo $to;
    $headers = array('Content-Type: text/html; charset=UTF-8', 'From:<kavita@plutustec.com>');
    wp_mail($to, $subject, $txt, $headers);
}
if (array_key_exists('btn-approve', $_POST)) {
    approve();
}

//user delete(not approved user)
function delete()
{
    global $wpdb;
    $id = $_POST['id'];
    $execut = $wpdb->query($wpdb->prepare("UPDATE wp_register SET flag = '2' WHERE ID = $id"));
    $wpdb->query($execut);
}
if (array_key_exists('btn-delete', $_POST)) {
    delete();
}

/**function weichie_load_more()
{

    /**$ajaxposts = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $_POST['paged'],
    ]);
  
    $response = '';
  $max_pages = $ajaxposts->max_num_pages;

  if($ajaxposts->have_posts()) {
    ob_start();
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
       
        $response .= the_title();
       
    endwhile;
    $output = ob_get_contents();
    ob_end_clean();
  } else {
    $response = '';
  }

  $result = [
    'max' => $max_pages,
    'html' => $output,
    'paged' => $_POST['paged']
  ];

  echo json_encode($result);
  exit;*/

   /**$args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'ASC',
        'category_name' => 'first',
        'paged' => $_POST['page'],
    );
    $loop = new WP_Query($args);*/

    //$max_pages = $loop->max_num_pages;
    /**$args = array(
        'post_type' => 'blog',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'paged' => $_POST['page'],
        'tax_query' => array(
            array(
                'taxonomy' => 'categories',
                'field'    => 'slug',
                'terms'    => array( 'firstcat' ),
            ),
        ),
      );
      
      $loop = new WP_Query( $args );*/
    /**while ($loop->have_posts()) : $loop->the_post();
    echo get_the_terms( get_the_ID(), 'blog_tags' ); ?>
    

        <h2><?php echo the_title(); ?></h2>
        <h3>Tags:<?php $posttags = get_the_tags();
                    if ($posttags) {
                        foreach ($posttags as $tag) { ?>
            <a href="<?= get_tag_link($tag->term_id) ?>">
                <?= $tag->name ?>
            </a>
    <?php }
                    } ?>
        </h3>
        <p><?php echo substr(get_the_content(), 0, 40); ?><a href=<?php the_permalink(); ?> title="read more"><h4>Read More...</h4></a></p>
        <h3>Author:<?php echo get_field('author'); ?></h3>
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($loop->ID)); ?>
        <img src="<?php echo $url; ?>" alt="Awesome Image">

    <?php
    endwhile;
    ?>
<?php wp_reset_postdata();
    exit;
}

add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');*/


//load more blog-post
function load_more_posts(){
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'new',
        'paged' => $_POST['page'],
    );
    $loop = new WP_Query($args); 
     while ($loop->have_posts()) : $loop->the_post();
    ?>
        <div class="col-md-4">
            <div class="highlights-grid-post">
                <div class="highlights-post-image-wrapper">
                    <a href="">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($loop->ID)); ?>
                        <div class="highlights-post-image" style="background-image: url('<?php echo $url; ?>');" ></div>
                        <div class="latestblog-categories">
                        <?php $posttags = get_the_tags();
                        if ($posttags) {
                            foreach ($posttags as $tag) { ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="market"><?php echo $tag->name; ?></a>
                        <?php }
                        } ?>
                        </div>
                    </a>
                </div>
                <div class="latestblog-post-details">
                    <h3 class="latestblog-post-title">
                        <a href=""><?php echo the_title();?></a>
                    </h3>
                    <div class="latestblog-post-author">
                        <div class="latestblog-post-author-section">
                            <div class="latestblog-post-author-image">
                                <a href="">
                                    <img src="https://transdirect.plutustec.in/wp-content/uploads/2022/08/Screen-Shot-2022-08-15-at-10.22.26-am-modified.png" alt="" />
                                </a>
                                <p class="latestblog-post-autho-name">
                                    By<a href=""><?php echo get_field('author'); ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="latestblog-post-date">
                        <?php echo get_field('date'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
    ?>
    <?php wp_reset_postdata();
    exit;
}
add_action('wp_ajax_load_more', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more', 'load_more_posts');