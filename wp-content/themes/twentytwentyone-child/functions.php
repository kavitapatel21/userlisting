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



function sampleForm()
{
    ?>
    <h2>Registration Form</h2>
<span class="error">* required field </span>
<br><br>
<form method="post" action="">
    Name:
    <input type="text" name="name">
    
    <br><br>
    E-mail:
    <input type="text" name="email">
    
    <br><br>
    Mobile No:
    <input type="text" name="mobileno">
    
    <br><br>
    Website:
    <input type="text" name="website">
   
    <br><br>
    Gender:
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other
   
    <br><br>
    Subjects:
		<input type="checkbox" name="pick_up" value="Yes" />Yes
		<input type="checkbox" name="pick_up" value="No" />No
		
		<br><br>
		<input type="submit" name="submit" value="Submit">
    <br><br>
</form>

<?php
}
add_shortcode( 'sc_sample_form', 'sampleForm' );

