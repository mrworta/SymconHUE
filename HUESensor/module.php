<?php

require_once(__DIR__ . "/../HUEDevice.php");

class HUESensor extends HUEDevice {

  public function Create() {
    parent::Create();
    $this->RegisterPropertyInteger("UniqueId", 0);
    $this->RegisterPropertyInteger("SensorFeatures", 0); 

    //if (!IPS_VariableProfileExists('ColorModeSelect.Hue')) IPS_CreateVariableProfile('ColorModeSelect.Hue', 1);
    //IPS_SetVariableProfileAssociation('ColorModeSelect.Hue', 0, 'Farbe', '', 0x000000);
    //IPS_SetVariableProfileAssociation('ColorModeSelect.Hue', 1, 'Farbtemperatur', '', 0x000000);
  }

  protected function BasePath() {
    $id = $this->ReadPropertyInteger("SensorId");
    if($id == -1) $id = 0; // special for group zero
    return "/sensors/$id";
  }

}
