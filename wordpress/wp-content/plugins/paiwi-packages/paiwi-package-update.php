<?php

function farm_paiwi_package_update() {
    global $wpdb;
    $table_name = $wpdb->prefix . "paiwi_package";
    $id = $_GET["id"];
    $data = array(
          'title'   => $_POST['title'],
          'project_return' => $_POST['project_return'],
          'duration'       => $_POST['duration'],
          'heads' => $_POST['heads'],
          'insurance'    => $_POST['insurance'],
          'kid' => $_POST['kid'],
          'cost'=> $_POST['cost'],
    );
//update
    if (isset($_POST['update'])) {
        $wpdb->update(
                $table_name, //table
                $data, //data
                array('id' => $id), //where
                array('%s'), //data format
                array('%s') //where format
        );
    }
//delete
    else if (isset($_POST['delete'])) {
        $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id = %s", $id));
    } else {//selecting value to update	
        $schools = $wpdb->get_results($wpdb->prepare("SELECT * from $table_name where id=%s", $id));
        foreach ($schools as $s) {
            $title = $s->title;
            $return = $s->project_return;
            $duration = $s->duration;
            $heads = $s->heads;
            $insurance = $s->insurance;
            $kid = $s->kid;
            $cost = $s->cost;
        }
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/paiwi-packages/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Packages</h2>

        <?php if ($_POST['delete']) { ?>
            <div class="updated"><p>Package deleted</p></div>
            <a href="<?php echo admin_url('admin.php?page=farm_paiwi_package_list') ?>">&laquo; Back to Packages list</a>

        <?php } else if ($_POST['update']) { ?>
            <div class="updated"><p>Package updated</p></div>
            <a href="<?php echo admin_url('admin.php?page=farm_paiwi_package_list') ?>">&laquo; Back to Packages list</a>

        <?php } else { ?>
            <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                <table class='wp-list-table widefat fixed'>
                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="title" value="<?php echo $title; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Projected Return</th>
                        <td><input type="text" name="project_return" value="<?php echo $return; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Duration</th>
                        <td><input type="text" name="duration" value="<?php echo $duration; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Number of Heads</th>
                        <td><input type="text" name="heads" value="<?php echo $heads; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Insurance</th>
                        <td><input type="text" name="insurance" value="<?php echo $insurance; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Price per kid</th>
                        <td><input type="text" name="kid" value="<?php echo $kid; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Package Cost</th>
                        <td><input type="text" name="cost" value="<?php echo $cost; ?>"/>
                        </td>
                    </tr>
                </table>
                <input type='submit' name="update" value='Save' class='button'> &nbsp;&nbsp;
                <input type='submit' name="delete" value='Delete' class='button' onclick="return confirm('&iquest;Est&aacute;s Are you sure you want to delete this Package?')">
            </form>
        <?php } ?>

    </div>
    <?php
}