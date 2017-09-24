<?php

function farm_paiwi_package_create() {
    $id = $_POST["id"];
    $name = $_POST["name"];
    //insert
    if (isset($_POST['insert'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . "paiwi_package";
        $data = array(
          'title'   => $_POST['title'],
          'project_return' => $_POST['project_return'],
          'duration'       => $_POST['duration'],
          'heads' => $_POST['heads'],
          'insurance'    => $_POST['insurance'],
          'kid' => $_POST['kid'],
          'cost'=> $_POST['cost'],
          );
        $wpdb->insert(
                $table_name, //table
                $data, //data
                array('%s', '%s') //data format			
        );
        $message.="School inserted";
    }
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/paiwi-packages/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Add New School</h2>
        <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                <div>
                  <label for="title"><h4>Title : </h4></label>
                </div>
                <div>
                  <input type="text" name="title" id="title" placeholder="Title here..." value="<?php echo @$row->title;?>">
                </div>

                <div>
                  <label for="project_return"><h4>Projected Return : </h4></label>
                </div>
                <div>
                  <input type="text" name="project_return" id="project_return" placeholder="Projected Return here..." value="<?php echo @$row->project_return;?>">
                </div>
                <div>
                  <label for="duration"><h4>Pa-iwi Duration : </h4></label>
                </div>
                <div>
                  <input type="text" name="duration" id="duration" placeholder="Pa-iwi Duration here..." value="<?php echo @$row->duration;?>">
                </div>
                <div>
                  <label for="heads"><h4>Number of heads : </h4></label>
                </div>
                <div>
                  <input type="text" name="heads" id="heads" placeholder="Number of Heads here..." value="<?php echo @$row->heads;?>">
                </div>
                <div>
                  <label for="insurance"><h4>Insurance : </h4></label>
                </div>
                <div>
                  <input type="text" name="insurance" id="insurance" placeholder="Insurance here..." value="<?php echo @$row->insurance;?>">
                </div>

                <div>
                  <label for="kid"><h4>Price per Kid : </h4></label>
                </div>
                <div>
                  <input type="text" name="kid" id="kid" placeholder="Price per kid here..." value="<?php echo @$row->kid;?>">
                </div>

                <div>
                  <label for="cost"><h4>Cost : </h4></label>
                </div>
                <div>
                  <input type="text" name="cost" id="cost" placeholder="Package Cost here..." value="<?php echo @$row->cost;?>">
                </div>
            <input type='submit' name="insert" value='Save' class='button'>
        </form>
    </div>
    <?php
}