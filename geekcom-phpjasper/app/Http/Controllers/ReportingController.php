<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JasperPHP\JasperPHP;
use App\User;

class ReportingController extends Controller
{
    private function get_env()
    {
        $env = [
            'driver' => 'mysql',
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE'),
        ];

        return $env;
    }

    private function get_headers($output, $output_filename, $format)
    {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$output_filename.'.'.$format);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Length: ' . filesize($output.'.'.$format));
        flush();
        readfile($output.'.'.$format);
        unlink($output.'.'.$format);
    }

    public function genPermissionsReport()
    {
        $jasper = new JasperPHP;

        $input_jrxml = public_path() . '/report/permission.jrxml';
        $jasper->compile($input_jrxml)->execute();

        // process parameters
        $input  = public_path() . '/report/permission.jasper';
        $output = public_path() . '/report/permission';
        $format = 'pdf';
        $param  = [];
        $env = Self::get_env();
        $locale = 'en';

        $jasper->process( $input, $output, $format, $param, $env, $locale)->execute();
        $output_filename = 'Permission_Report';

        // generate the download
        Self::get_headers($output, $output_filename, $format);
    }

    public function genUsersReport()
    {
        $jasper = new JasperPHP;

        $input_jrxml = public_path() . '/report/users.jrxml';
        $jasper->compile($input_jrxml)->execute();

        // process parameters
        $input  = public_path() . '/report/users.jasper';
        $output = public_path() . '/report/users';
        $format = 'pdf';
        $param  = [];
        $env = Self::get_env();
        $locale = 'en';

        $jasper->process( $input, $output, $format, $param, $env, $locale)->execute();
        $output_filename = 'Users_Report';

        // generate the download
        Self::get_headers($output, $output_filename, $format);
    }

    public function genRolesReport()
    {
        $jasper = new JasperPHP;

        $input_jrxml = public_path() . '/report/roles.jrxml';
        $jasper->compile($input_jrxml)->execute();

        // process parameters
        $input  = public_path() . '/report/roles.jasper';
        $output = public_path() . '/report/roles';
        $format = 'pdf';
        $param  = [];
        $env = Self::get_env();
        $locale = 'en';

        $jasper->process( $input, $output, $format, $param, $env, $locale)->execute();
        $output_filename = 'Roles_Report';

        // generate the download
        Self::get_headers($output, $output_filename, $format);
    }
}
