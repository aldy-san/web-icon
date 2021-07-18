<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['penerimaan']                = 'user/daftar_data';
$route['formasi']                   = 'user/daftar_data';
$route['pengangkatan']              = 'user/daftar_data';
$route['kenPangkat']                = 'user/daftar_data';
$route['kenGaji']                   = 'user/daftar_data';
$route['penyMasaKerja']             = 'user/daftar_data';
$route['penyTunj']                  = 'user/daftar_data';
$route['alihtugas']                 = 'user/daftar_data';
$route['kesehatan']                 = 'user/daftar_data';
$route['bansos']                    = 'user/daftar_data';
$route['cuti']                      = 'user/daftar_data';
$route['pensiun']                   = 'user/daftar_data';
$route['pemSendiri']                = 'user/daftar_data';
$route['meninggal']                 = 'user/daftar_data';
$route['instansi']                  = 'user/daftar_data';
$route['diklat']                    = 'user/daftar_data';

$route['penerimaan/hapus/(:num)']                = 'user/hapus_data';
$route['formasi/hapus/(:num)']                   = 'user/hapus_data';
$route['pengangkatan/hapus/(:num)']              = 'user/hapus_data';
$route['kenPangkat/hapus/(:num)']                = 'user/hapus_data';
$route['kenGaji/hapus/(:num)']                   = 'user/hapus_data';
$route['penyMasaKerja/hapus/(:num)']             = 'user/hapus_data';
$route['penyTunj/hapus/(:num)']                  = 'user/hapus_data';
$route['alihtugas/hapus/(:num)']                 = 'user/hapus_data';
$route['kesehatan/hapus/(:num)']                 = 'user/hapus_data';
$route['bansos/hapus/(:num)']                    = 'user/hapus_data';
$route['cuti/hapus/(:num)']                      = 'user/hapus_data';
$route['pensiun/hapus/(:num)']                   = 'user/hapus_data';
$route['pemSendir/hapus/(:num)']                 = 'user/hapus_data';
$route['meninggal/hapus/(:num)']                 = 'user/hapus_data';
$route['instansi/hapus/(:num)']                  = 'user/hapus_data';
$route['diklat/hapus/(:num)']                    = 'user/hapus_data';

$route['penerimaan/(:num)/hapus_pdf/(:num)']                = 'user/hapus_pdf';
$route['formasi/(:num)/hapus_pdf/(:num)']                   = 'user/hapus_pdf';
$route['pengangkatan/(:num)/hapus_pdf/(:num)']              = 'user/hapus_pdf';
$route['kenPangkat/(:num)/hapus_pdf/(:num)']                = 'user/hapus_pdf';
$route['kenGaji/(:num)/hapus_pdf/(:num)']                   = 'user/hapus_pdf';
$route['penyMasaKerja/(:num)/hapus_pdf/(:num)']             = 'user/hapus_pdf';
$route['penyTunj/(:num)/hapus_pdf/(:num)']                  = 'user/hapus_pdf';
$route['alihtugas/(:num)/hapus_pdf/(:num)']                 = 'user/hapus_pdf';
$route['kesehatan/(:num)/hapus_pdf/(:num)']                 = 'user/hapus_pdf';
$route['bansos/(:num)/hapus_pdf/(:num)']                    = 'user/hapus_pdf';
$route['cuti/(:num)/hapus_pdf/(:num)']                      = 'user/hapus_pdf';
$route['pensiun/(:num)/hapus_pdf/(:num)']                   = 'user/hapus_pdf';
$route['pemSendir/(:num)/hapus_pdf/(:num)']                 = 'user/hapus_pdf';
$route['meninggal/(:num)/hapus_pdf/(:num)']                 = 'user/hapus_pdf';
$route['instansi/(:num)/hapus_pdf/(:num)']                  = 'user/hapus_pdf';
$route['diklat/(:num)/hapus_pdf/(:num)']                    = 'user/hapus_pdf';

$route['penerimaan/(:num)']             = 'user/daftar_pdf';
$route['formasi/(:num)']                = 'user/daftar_pdf';
$route['pengangkatan/(:num)']                = 'user/daftar_pdf';
$route['kenPangkat/(:num)']                = 'user/daftar_pdf';
$route['kenGaji/(:num)']                = 'user/daftar_pdf';
$route['penyMasaKerja/(:num)']                = 'user/daftar_pdf';
$route['penyTunj/(:num)']                = 'user/daftar_pdf';
$route['alihtugas/(:num)']                = 'user/daftar_pdf';
$route['kesehatan/(:num)']                = 'user/daftar_pdf';
$route['bansos/(:num)']                = 'user/daftar_pdf';
$route['cuti/(:num)']                = 'user/daftar_pdf';
$route['pensiun/(:num)']                = 'user/daftar_pdf';
$route['pemSendiri/(:num)']                = 'user/daftar_pdf';
$route['meninggal/(:num)']                = 'user/daftar_pdf';
$route['instansi/(:num)']                = 'user/daftar_pdf';
$route['diklat/(:num)']                = 'user/daftar_pdf';