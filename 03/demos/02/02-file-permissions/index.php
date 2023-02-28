<?php
    $filename = '../../../books/Charles Dickens/A Christmas Carol.txt';
    // $filename = '/Users/kdubaj/Great Expectations.txt';

    function getPermissionInfo($filename) {
        return [
            'file owner'=> fileowner($filename),
            'owning group' => filegroup($filename),
            'permissions' => sprintf('%o',fileperms($filename))
        ];
    }

    var_dump(getPermissionInfo($filename));

    chmod($filename, 0640);

    var_dump(getPermissionInfo($filename));

?>
