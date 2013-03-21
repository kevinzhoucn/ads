<?php
// Manages the departments list
class HomeAdsList
{

  /* Public variables available in departments_list.tpl Smarty template */
  public $mSelectedADS = 0;
  public $mADS;

  // Constructor reads query string parameter
  public function __construct()
  {
    /* If DepartmentId exists in the query string, we're visiting a
       department */
    if (isset ($_GET['AdsId']))
      $this->mSelectedADS = (int)$_GET['AdsId'];
  }

  /* Calls business tier method to read departments list and create
     their links */
  public function init()
  {
    // Get the list of departments from the business tier
    $this->mADS = HomeList::GetADSList();

    // Create the department links
    /*
    for ($i = 0; $i < count($this->mADS); $i++)
      $this->mADS[$i]['link_to_ads'] =
        'index.php?AdsId=' . $this->mADS[$i]['ads_id'];
        */
  }
}
?>