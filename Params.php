<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function restore($pElement)
{
  if (isset($_POST[$pElement])== true) {
      echo 'value=', htmlentities($_POST[$pElement], ENT_QUOTES, 'utf-8');
  }  
    
  
}