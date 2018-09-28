<?php

error_reporting( E_ALL );
ini_set( "display_errors", 1 );

function zipfiles($filename, $rootPath){

// Initialize archive object
$zip = new ZipArchive();
$zip->open($filename, ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();
}

function recurse_copy( $src, $dst, $is_dir ) {
    if ( $is_dir ) {
        // copy directory
        if ( is_dir( $src ) ) {
            if ( $src != '.svn' ) {
                $dir = opendir( $src );
                @mkdir( $dst );
                while ( false !== ( $file = readdir( $dir )) ) {
                    if ( ( $file != '.' ) && ( $file != '..' ) ) {
                        if ( is_dir( $src . '/' . $file ) ) {
                            recurse_copy( $src . '/' . $file, $dst . '/' . $file, true );
                        } else {
                            if ( strpos( $file, '.DS_Store' ) === false ) {
                                copy( $src . '/' . $file, $dst . '/' . $file );
                            }
                        }
                    }
                }
                closedir( $dir );
            }
        } else {
            echo 'dir ' . $src . ' is not found!';
        }
    } else {
        if ( strpos( $src, '.DS_Store' ) === false ) {
            // copy file
            copy( $src, $dst );
        }
    }
}
  
// make file and directory array
function data_element( $src, $dst, $is_dir = false ) {
    $data = array();
    $data['src'] = $src;
    $data['dst'] = $dst;
    $data['isdir'] = $is_dir;
    return $data;
}

// make data

$data = array();

$src = '../admin/controller/extension/total/cardgatefee.php';
$dst = 'cardgate/admin/controller/extension/total/cardgatefee.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../admin/controller/extension/payment/cardgate/cardgate.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgate/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../admin/controller/extension/payment/cardgate.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgateafterpay.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgateafterpay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatebanktransfer.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatebanktransfer.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatebillink.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatebillink.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatebitcoin.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatebitcoin.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatecreditcard.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatecreditcard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatedirectdebit.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatedirectdebit.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgategiropay.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgategiropay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgateidealqr.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgateidealqr.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgateideal.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgateideal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgateklarna.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgateklarna.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatebancontact.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatebancontact.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatepaypal.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatepaypal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatepaysafecard.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatepaysafecard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgateprzelewy24.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgateprzelewy24.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/controller/extension/payment/cardgatesofortbanking.php';
$dst = 'cardgate/admin/controller/extension/payment/cardgatesofortbanking.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../admin/language/en-gb/extension/payment/cardgate.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgateafterpay.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgateafterpay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatebanktransfer.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatebanktransfer.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatebillink.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatebillink.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatebitcoin.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatebitcoin.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatecreditcard.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatecreditcard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatedirectdebit.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatedirectdebit.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgategiropay.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgategiropay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgateidealqr.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgateidealqr.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgateideal.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgateideal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgateklarna.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgateklarna.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatebancontact.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatebancontact.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatepaypal.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatepaypal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatepaysafecard.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatepaysafecard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgateprzelewy24.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgateprzelewy24.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/payment/cardgatesofortbanking.php';
$dst = 'cardgate/admin/language/en-gb/extension/payment/cardgatesofortbanking.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/en-gb/extension/total/cardgatefee.php';
$dst = 'cardgate/admin/language/en-gb/extension/total/cardgatefee.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../admin/language/nl-nl/extension/payment/cardgate.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgateafterpay.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgateafterpay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatebanktransfer.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatebanktransfer.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatebillink.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatebillink.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatebitcoin.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatebitcoin.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatecreditcard.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatecreditcard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatedirectdebit.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatedirectdebit.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgategiropay.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgategiropay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgateidealqr.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgateidealqr.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgateideal.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgateideal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgateklarna.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgateklarna.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatebancontact.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatebancontact.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatepaypal.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatepaypal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatepaysafecard.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatepaysafecard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgateprzelewy24.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgateprzelewy24.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/payment/cardgatesofortbanking.php';
$dst = 'cardgate/admin/language/nl-nl/extension/payment/cardgatesofortbanking.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/language/nl-nl/extension/total/cardgatefee.php';
$dst = 'cardgate/admin/language/nl-nl/extension/total/cardgatefee.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../admin/view/image/payment/cardgateplus.png';
$dst = 'cardgate/admin/view/image/payment/cardgateplus.png';
$is_dir = false;

array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgate.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgate.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgateafterpay.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgateafterpay.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatebanktransfer.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatebanktransfer.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatebillink.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatebillink.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatebitcoin.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatebitcoin.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatecreditcard.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatecreditcard.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatedirectdebit.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatedirectdebit.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgategiropay.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgategiropay.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgateidealqr.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgateidealqr.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgateideal.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgateideal.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgateklarna.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgateklarna.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatebancontact.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatebancontact.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatepaypal.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatepaypal.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatepaysafecard.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatepaysafecard.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../admin/view/template/extension/payment/cardgateprzelewy24.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgateprzelewy24.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/payment/cardgatesofortbanking.twig';
$dst = 'cardgate/admin/view/template/extension/payment/cardgatesofortbanking.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../admin/view/template/extension/total/cardgatefee.twig';
$dst = 'cardgate/admin/view/template/extension/total/cardgatefee.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../catalog/controller/extension/payment/cardgate-clientlib-php/src';
$dst = 'cardgate/catalog/controller/extension/payment/cardgate-clientlib-php/src';
$is_dir = true;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgate-clientlib-php/init.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgate-clientlib-php/init.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );


$src = '../catalog/controller/extension/payment/cardgate.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgateafterpay.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgateafterpay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatebanktransfer.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatebanktransfer.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatebillink.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatebillink.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatebitcoin.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatebitcoin.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatecreditcard.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatecreditcard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatedirectdebit.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatedirectdebit.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgategeneric.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgategeneric.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgategiropay.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgategiropay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgateidealqr.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgateidealqr.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgateideal.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgateideal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgateklarna.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgateklarna.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatebancontact.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatebancontact.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatepaypal.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatepaypal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatepaysafecard.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatepaysafecard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgateprzelewy24.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgateprzelewy24.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/controller/extension/payment/cardgatesofortbanking.php';
$dst = 'cardgate/catalog/controller/extension/payment/cardgatesofortbanking.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../catalog/language/en-gb/extension/payment/cardgate.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgateafterpay.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgateafterpay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatebanktransfer.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatebanktransfer.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatebillink.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatebillink.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatebitcoin.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatebitcoin.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatecreditcard.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatecreditcard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatedirectdebit.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatedirectdebit.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgategiropay.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgategiropay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgateidealqr.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgateidealqr.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgateideal.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgateideal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgateklarna.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgateklarna.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatebancontact.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatebancontact.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatepaypal.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatepaypal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatepaysafecard.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatepaysafecard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgateprzelewy24.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgateprzelewy24.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/en-gb/extension/payment/cardgatesofortbanking.php';
$dst = 'cardgate/catalog/language/en-gb/extension/payment/cardgatesofortbanking.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../catalog/language/nl-nl/extension/payment/cardgate.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgateafterpay.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgateafterpay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatebanktransfer.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatebanktransfer.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatebillink.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatebillink.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatebitcoin.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatebitcoin.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatecreditcard.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatecreditcard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatedirectdebit.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatedirectdebit.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgategiropay.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgategiropay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgateidealqr.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgateidealqr.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgateideal.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgateideal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgateklarna.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgateklarna.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatebancontact.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatebancontact.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatepaypal.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatepaypal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatepaysafecard.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatepaysafecard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgateprzelewy24.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgateprzelewy24.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/language/nl-nl/extension/payment/cardgatesofortbanking.php';
$dst = 'cardgate/catalog/language/nl-nl/extension/payment/cardgatesofortbanking.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../catalog/model/extension/payment/cardgate.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgate.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgateafterpay.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgateafterpay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatebanktransfer.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatebanktransfer.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatebillink.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatebillink.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatebitcoin.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatebitcoin.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatecreditcard.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatecreditcard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatedirectdebit.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatedirectdebit.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgategiropay.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgategiropay.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgateidealqr.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgateidealqr.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgateideal.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgateideal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgateklarna.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgateklarna.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatebancontact.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatebancontact.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatepaypal.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatepaypal.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatepaysafecard.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatepaysafecard.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgateprzelewy24.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgateprzelewy24.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/payment/cardgatesofortbanking.php';
$dst = 'cardgate/catalog/model/extension/payment/cardgatesofortbanking.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/model/extension/total/cardgatefee.php';
$dst = 'cardgate/catalog/model/extension/total/cardgatefee.php';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../catalog/view/theme/default/template/extension/payment/cardgateafterpay.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgateafterpay.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatebanktransfer.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatebanktransfer.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatebillink.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatebillink.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatebitcoin.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatebitcoin.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatecreditcard.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatecreditcard.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatecreditcard.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatecreditcard.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatedirectdebit.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatedirectdebit.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgategiropay.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgategiropay.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgateidealqr.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgateidealqr.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgateideal.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgateideal.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgateklarna.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgateklarna.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatebancontact.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatebancontact.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatepaypal.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatepaypal.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatepaysafecard.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatepaysafecard.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgateprzelewy24.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgateprzelewy24.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );
$src = '../catalog/view/theme/default/template/extension/payment/cardgatesofortbanking.twig';
$dst = 'cardgate/catalog/view/theme/default/template/extension/payment/cardgatesofortbanking.twig';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../catalog/view/theme/default/image/loading.gif';
$dst = 'cardgate/catalog/view/theme/default/image/loading.gif';
$is_dir = false;
array_push( $data, data_element( $src, $dst, $is_dir ) );

$src = '../image/payment/cgp';
$dst = 'cardgate/image/payment/cgp';
$is_dir = true;
array_push( $data, data_element( $src, $dst, $is_dir ) );

// copy files

foreach ( $data as $k => $v ) {
        recurse_copy( $v['src'], $v['dst'], $v['isdir'] );
}

// make the zip
echo 'files copied<br>';

// Get real path for our folder
$rootPath = '/var/www/opencart3/htdocs/_plugin/cardgate';
$filename = 'cardgate.zip';

zipfiles($filename, $rootPath);
echo 'zipfile made<br>';
echo 'done!';
?>
