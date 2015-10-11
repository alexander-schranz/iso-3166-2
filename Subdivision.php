<?php

namespace L91\ISO_3166_2;

class Subdivision
{
    /**
     * @return string
     */
    protected static function getSubdivisionFolderPath()
    {
        return __DIR__ . '/subdivisions';
    }
    
    /**
     * @param string $countryCode
     *
     * @return string
     */
    protected static function getSubdivisionFilePath($countryCode)
    {
        return self::getSubdivisionFolderPath() . '/' . $countryCode . '.json';
    }
    
    /**
     * @param string $countryCode
     * @param string $locale
     *
     * @return string
     */
    protected static function getSubdivisionLocaleFilePath($countryCode, $locale)
    {
        return self::getSubdivisionFolderPath() . '/' . $countryCode . '/' . $locale . '.json';
    }
    
    /**
     * @param string $path
     *
     * @return array
     */ 
    protected static function loadJsonFile($path) 
    {
        $data = array();
        
        if (!$assoc) {
            $data = new \stdClass();
        }
        
        if (file_exists($path)) {
            $json = file_get_contents($path);
            $data = json_decode($json, $assoc);
        }
        
        return $data;
    }
    
    /**
     * @param string $countryCode
     * @param string $locale
     *
     * @return array
     */
    protected static function loadSubdivisionFile($countryCode, $locale = null)
    {
        $data = self::loadJsonFile(self::getSubdivisionFilePath($countryCode));
        
        if ($locale) {
            $data = array_merge(
                $data,
                self::loadJsonFile(self::getSubdivisionLocaleFilePath($countryCode, $locale))
            );
        }
        
        return $data;
    }

    /**
     * @param string $countryCode
     * @param string $locale
     *
     * @return array
     */
    public static function getSubdivision($countryCode, $locale = null)
    {
        return self::loadSubdivisionFile($countryCode, $locale);
    }
}