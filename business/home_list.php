<?php

class HomeList
{
  // Retrieves all departments
  public static function GetADSList()
  {
    // Build SQL query
    $sql = 'CALL home_get_ads_list()';

    // Execute the query and return the results
    return DatabaseHandler::GetAll($sql);
  }
}
?>