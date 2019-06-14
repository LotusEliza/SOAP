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

//<table class="table">
//  <thead>
//    <tr>
//      <th scope="col">#</th>
//      <th scope="col">First</th>
//      <th scope="col">Last</th>
//      <th scope="col">Handle</th>
//    </tr>
//  </thead>
//  <tbody>
//    <tr>
//      <th scope="row">1</th>
//      <td>Mark</td>
//      <td>Otto</td>
//      <td>@mdo</td>
//    </tr>
//    <tr>
//      <th scope="row">2</th>
//      <td>Jacob</td>
//      <td>Thornton</td>
//      <td>@fat</td>
//    </tr>
//    <tr>
//      <th scope="row">3</th>
//      <td>Larry</td>
//      <td>the Bird</td>
//      <td>@twitter</td>
//    </tr>
//  </tbody>
//</table>