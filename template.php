<?php

function open_framework_menu_tree__menu_login_and_find_a_person($variables){
    return "<ul class=\"inline\">\n" . $variables['tree'] ."</ul>\n";
}

function gimmelshtump_menu_tree__menu_tools($variables){
    return "<ul class=\"inline\">\n" . $variables['tree'] ."</ul>\n";
}

function gimmelshtump_menu_tree__menu_site($variables){
    return "<ul class=\"inline\">\n" . $variables['tree'] ."</ul>\n";
}

function gimmelshtump_menu_tree__menu_dentistry_media($variables){
    return "<ul class=\"inline\">\n" . $variables['tree'] ."</ul>\n";
}

function gimmelshtump_menu_tree__menu_patients_menu($variables) {
        return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] ."</ul>\n";
}

function gimmelshtump_menu_tree__menu_styles_test_menu($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] ."</ul>\n";
}

function gimmelshtump_menu_tree__menu_admissions_dds($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_pathways($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_admissions_itdp($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__user_menu($variables){
    return "<ul class=\"inline\">\n" . $variables['tree'] ."</ul>\n";
}

function gimmelshtump_menu_tree__menu_student_life_outreach($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_sindecuse_museum($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_ohs_phd($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_office_of_research($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_mcohr($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_alumni_relations($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_continuing_education($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_student_life___internationa($variables){
    return "<ul class=\"inline tertiary-menu\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_mca($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_bms($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_dental_informatics($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_bms_implant_pts($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_bms_patients($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_bms_pros_grad($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_crse($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_crse_cdp($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_crse_endo($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_crse_grd($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_opd($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_opd_grad_ortho($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_opd_grad_perio($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_pom($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_dental_hygiene($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_hr($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_omshd($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_travel_resources($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_faculty_affairs($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_pfs($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_u_m_topics($variables){
    return "<ul class=\"nav nav-pills\">\n" . $variables['tree'] . "</ul>\n";
}

function gimmelshtump_menu_tree__menu_dh_new($variables){
    return "<ul class=\"inline\">\n" . $variables['tree'] ."</ul>\n";
}

// Add jquery cycle plugin via custom js file "slideshow" 

function gimmelshtump_preprocess_html(&$variables, $hook) {
    drupal_add_library('jquery_plugin', 'cycle');
    drupal_add_js(drupal_get_path('theme', 'gimmelshtump').'/js/slideshow.js');
}



// Get rid of the posting data on search results

/**
* Process variables for search-result.tpl.php.
*
* @see search-result.tpl.php
*/
function gimmelshtump_preprocess_search_result(&$variables) {
  // Remove user name and modification date from search results
  $variables['info'] = '';
}



