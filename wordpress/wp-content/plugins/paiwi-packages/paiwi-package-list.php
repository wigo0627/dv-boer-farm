<?php

function farm_paiwi_package_list() {
    ?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/paiwi-packages/style-admin.css" rel="stylesheet" />
    <div class="wrap">
        <h2>Schools</h2>
        <div class="tablenav top">
            <div class="alignleft actions">
                <a href="<?php echo admin_url('admin.php?page=farm_paiwi_package_create'); ?>">Add New</a>
            </div>
            <br class="clear">
        </div>
        <?php
        global $wpdb;
        $table_name = $wpdb->prefix . "paiwi_package";

        $rows = $wpdb->get_results("SELECT * from $table_name");
        ?>
        <table class='wp-list-table widefat fixed striped posts'>
            <tr>
                <th class="manage-column ss-list-width">ID</th>
                <th class="manage-column ss-list-width">Title</th>
                <th class="manage-column ss-list-width">Projected Return</th>
                <th class="manage-column ss-list-width">Duration</th>
                <th class="manage-column ss-list-width">Number of Heads</th>
                <th class="manage-column ss-list-width">Insurance</th>
                <th class="manage-column ss-list-width">Price per Kid</th>
                <th class="manage-column ss-list-width">Package Cost</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td class="manage-column ss-list-width"><?php echo $row->id; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->title; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->project_return; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->duration; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->heads; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->insurance; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->kid; ?></td>
                    <td class="manage-column ss-list-width"><?php echo $row->cost; ?></td>
                    <td><a href="<?php echo admin_url('admin.php?page=farm_paiwi_package_update&id=' . $row->id); ?>">Update</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php
}