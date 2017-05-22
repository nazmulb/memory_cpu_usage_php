<?php
/**
 * 
 * Getting Memory and CPU usage in PHP
 *  
 *
 * @package     NazmulB\MemoryCpuPhpLib
 * @category    Library
 * @author      Nazmul Basher <nazmul.basher@gmail.com>
 * @link        https://github.com/nazmulb
 * @date		22/05/2017 (dd/mm/yyyy)
 */

namespace NazmulB\MemoryCpuPhpLib;

class MemoryCpuUsage{

    /**
	 * Get Server Memory Usage
	 * @return string
	 */
    public static function getServerMemoryUsage(){

        if(stristr(PHP_OS, "Linux"))
            return self::getServerMemoryUsageForLinux();

        return (memory_get_usage()/1048576) . " MB";
    }

    private static function getServerMemoryUsageForLinux() { 
        $free = shell_exec('free');
        $free = (string)trim($free);
        $freeArr = explode("\n", $free);
        $mem = explode(" ", $freeArr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        
        return ($mem[2]/$mem[1]*100);
    }

    /**
	 * Get Server Cpu Usage
	 * @return string
	 */
    public static function getServerCpuUsage(){
        $load = sys_getloadavg();
	    return $load[0];
    }
}