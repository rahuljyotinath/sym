<?php
/**
 * Created by PhpStorm.
 * User: minduser
 * Date: 08.08.18
 * Time: 11:14
 */

namespace Crm\InvoiceBundle\Api\Files;


class Parser
{

    /**
     * @return array
     */
    public function getInvoiceTemplates($filepath)
    {

        $templateArray = array();
        try {
            if ($handle = opendir($filepath)) {
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                        $templateArray[$file] = $file;
                    }
                }
                closedir($handle);
            }
        } catch (\Exception $ex) {

        }

        return $templateArray;

    }
}