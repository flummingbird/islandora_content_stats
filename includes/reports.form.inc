<?php
require_once dirname(__FILE__) . '/queries.inc';
/**
 * Builds form out of query results.
 * Change to query database.
 */
function islandora_content_stats_reports_form($form, &$form_state) {
//    $counts = all_cmodel_counts();
//    foreach ($counts as $count){
//        $form[$count['cmodel']['value']] = array(
//         '#type' => 'fieldset',
//         '#value' => $count['k0']['value'],
//         '#title' => $count['cmodel']['value'],
//         '#description' => t('Current active items'),
//        );
//    }
//    $col_counts = collection_cmodel_query('latech-cmprt:collection');
//    foreach ($col_counts[1] as $col_count){
//        $form[$col_counts[0].$col_count['cmodel']['value']] = array(
//         '#type' => 'fieldset',
//         '#value' => $col_count['k0']['value'],
//         '#title' => $col_counts[0].': '.$col_count['cmodel']['value'],
//         '#description' => t('collection active items'),
//        );
//    }
  $institution_collection_audit = all_institution_cmodel_query();
  
  
//  $counts = all_cmodel_counts();
//  dpm($counts);
//  foreach($counts as $cmodel_count){
//    dpm($cmodel_count['cmodel']['value']);
//    dpm($cmodel_count['k0']['value']);
//    db_insert('islandora_content_stats')
//        ->fields(array(
//            'query' => $cmodel_count['cmodel']['value'],
//            'count' => $cmodel_count['k0']['value'],
//            'timestamp' => time(),
//        ))
//        ->execute();
//  }
//  
  
  
  foreach($institution_collection_audit as $inst => $count){
    if(isset($count)){
      foreach($count as $key => $val){
        $form[$inst][$key] = array(
        '#type' => 'fieldset',
        '#value'=>$val,
        '#title'=>preg_replace('/-/',' ',$inst) .' Count of: ' .  $key,
        //'#description'=> $val,
        );
      }
    }  
  }
  return $form;
}