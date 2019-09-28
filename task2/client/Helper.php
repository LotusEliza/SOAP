<?php

class Helper{
    static function createTable($files) {
        if (count($files) > 0):
            $result = "<table align=\"center\" class=\"table text-muted\" ><thead><tr>";
            $result .= "<th scope=\"col\">";
            $result .= implode('</th><th scope=\"col\">', array_keys(current($files)));
            $result .= "</th>";
            $result .= "</tr></thead><tbody>";
            foreach ($files as $row): array_map('htmlentities', $row);
                $result .= "<tr><td>";
                $result .= implode('</td><td>', $row);
                $result .= "</td></tr>";
            endforeach;
            $result .= "</tbody></table>";
        endif;
        return $result;
    }
}