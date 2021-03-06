<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2017 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 04/18/2017 09:47
 */

if (! defined('NV_IS_FILE_ADMIN')) {
    die('Stop!!!');
}

$sql = 'SELECT * FROM ' . $db_config['dbsystem']. '.'.NV_PREFIXLANG . '_' . $mod_data . '_categories ORDER BY weight DESC';
$result = $db->query($sql);
while ($row = $result->fetch()) {
    $array_item[$row['id']] = array(
        'parentid' => $row['parrent_id'],
        'groups_view' => $row['groups_view'],
        'key' => $row['id'],
        'title' => $row['name'],
        'alias' => $row['alias'],
    );
}
