<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                                <input type="hidden" value="<?php echo $id; ?>" name="approve">
                                <input type="submit" value="approve" name="btn-approve" class="btn">
                                <input type="hidden" value="<?php echo $id; ?>" name="delete">
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
    <div class="tablenav bottom">
        <div class="alignleft actions bulkactions">
        </div>
    </div>
<?php
} ?>

<?php
function approve()
{
    global $wpdb;
    $id = $_POST['approve'];
    $execut = $wpdb->query($wpdb->prepare("UPDATE wp_register SET flag = '1' WHERE ID = $id"));
    $wpdb->query($execut);
    $username = $_POST['uname'];
	$password = '';
	$email_address = $_POST['email'];

	if ( ! username_exists( $username ) ) {
		$user_id = wp_create_user( $username, $password, $email_address );
		$user = new WP_User( $user_id );
		$user->set_role( 'subscriber' );
	}
}
if (array_key_exists('btn-approve', $_POST)) {
    approve();
}

function delete()
{
    global $wpdb;
    $id = $_POST['delete'];
    $execut = $wpdb->query($wpdb->prepare("UPDATE wp_register SET flag = '2' WHERE ID = $id"));
    $wpdb->query($execut);
}
if (array_key_exists('btn-delete', $_POST)) {
    delete();
}
