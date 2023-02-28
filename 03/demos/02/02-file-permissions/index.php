<?php
    // $filename = '../../../books/Charles Dickens/A Christmas Carol.txt';
    $filename = '/Users/karolinadubaj/Great Expectations.txt';

    function getPermissionInfo($filename) {
        return [
            'file owner'=> fileowner($filename),
            'owning group' => filegroup($filename),
            'permissions' => sprintf('%o',fileperms($filename))
        ];
    }

    // var_dump(getPermissionInfo($filename));

    // chmod($filename, 0751);

    var_dump(getPermissionInfo($filename));

?>
