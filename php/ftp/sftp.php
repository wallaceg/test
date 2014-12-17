<?php

/**
 * ========
 * SFTP PoC
 * ========
 */
$connection_resource = ssh2_connect("tst-teledistrib-ftp.cegedim.fr", 22);

if (!$connection_resource) {
  die('Unable to connect to the host');
}

$auth = ssh2_auth_password($connection_resource, "gis_pfizer_autofacturation", "_x6Lx7C6");

if (!$auth) {
  die('Unable to authenticate in the SFTP server');
}

$sftp = ssh2_sftp($connection_resource);
$sftp_stream = fopen('ssh2.sftp://' . $sftp . '/Home/gis_pfizer_autofacturation/CLIENT_TO_CEGEDIM/test.zip', 'w');

$data_to_send = file_get_contents('test.zip');

$send_file = fwrite($sftp_stream, $data_to_send);

if ($send_file === FALSE) {
  die('Unable to send the file');
}

fclose($sftp_stream);

echo "FILE SENT!!!";
