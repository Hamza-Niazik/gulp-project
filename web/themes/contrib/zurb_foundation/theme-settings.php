<?php

/**
 * @file
 * Add custom theme settings to the ZURB Foundation theme.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter().
 */
function zurb_foundation_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['theme_ui'] = [
    '#type' => 'details',
    '#title' => t('UI Elements'),
  ];

  $form['theme_ui']['zurb_foundation_status_in_reveal'] = [
    '#type' => 'checkbox',
    '#title' => t('Display status messages in Reveal'),
    '#description' => t('This will display status messages in a Foundation Reveal modal instead of print them into the page output.'),
    '#default_value' => theme_get_setting('zurb_foundation_status_in_reveal'),
  ];

  $form['region_settings'] = [
    '#type' => 'details',
    '#title' => t('Region Settings'),
  ];

  $form['region_settings']['zurb_foundation_meta_header_grid'] = [
    '#type' => 'checkbox',
    '#title' => t('Contain Meta Header Region to Grid'),
    '#description' => t('Uncheck this setting if you would like blocks in the Meta Header region to be full width.'),
    '#default_value' => theme_get_setting('zurb_foundation_meta_header_grid'),
  ];

  /*
   * Foundation Top Bar.
   */
  $form['topbar'] = [
    '#type' => 'details',
    '#title' => t('Foundation Top Bar'),
    '#description' => t('The Foundation Top Bar gives you a great way to display a complex navigation bar on small or large screens.'),
  ];

  $form['topbar']['zurb_foundation_top_bar_enable'] = [
    '#type' => 'select',
    '#title' => t('Enable'),
    '#description' => t('If enabled, the site name and main menu will appear in a bar along the top of the page.'),
    '#options' => [
      0 => t('Never'),
      1 => t('Always'),
      2 => t('Mobile only'),
    ],
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_enable'),
  ];

  $form['topbar']['container']['zurb_foundation_top_bar_grid'] = [
    '#type' => 'checkbox',
    '#title' => t('Contain to grid'),
    '#description' => t('Check this for your top bar to be set to your grid width.'),
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_grid'),
  ];

  $form['topbar']['container']['zurb_foundation_top_bar_sticky'] = [
    '#type' => 'checkbox',
    '#title' => t('Sticky'),
    '#description' => t("Check this for your top bar to stick to the top of the screen when the user scrolls down. If you're using the Admin Menu module and have it set to 'Keep menu at top of page', you'll need to check this option to maintain compatibility."),
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_sticky'),
  ];

  $form['topbar']['container']['zurb_foundation_top_bar_is_hover'] = [
    '#type' => 'checkbox',
    '#title' => t('Hover to expand menu'),
    '#description' => t('Set this to false to require the user to click to expand the dropdown menu.'),
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_is_hover'),
  ];

  // Menu settings.
  $form['topbar']['container']['menu'] = [
    '#type' => 'details',
    '#title' => t('Dropdown Menu'),
  ];

  $form['topbar']['container']['menu']['zurb_foundation_top_bar_menu_text'] = [
    '#type' => 'textfield',
    '#title' => t('Menu text'),
    '#description' => t('Specify text to go beside the mobile menu icon or leave blank for none.'),
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_menu_text'),
  ];

  $form['topbar']['container']['menu']['zurb_foundation_top_bar_custom_back_text'] = [
    '#type' => 'checkbox',
    '#title' => t('Enable custom back text'),
    '#description' => t('This is the text that appears to navigate back one level in the dropdown menu. Set this to false and it will pull the top level link name as the back text.'),
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_custom_back_text'),
  ];

  $form['topbar']['container']['menu']['zurb_foundation_top_bar_back_text'] = [
    '#type' => 'textfield',
    '#title' => t('Custom back text'),
    '#description' => t('Define what you want your custom back text to be.'),
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_back_text'),
  ];

  // Search settings.
  $form['topbar']['container']['search'] = [
    '#type' => 'details',
    '#title' => t('Search Menu'),
  ];

  $form['topbar']['container']['search']['zurb_foundation_top_bar_search'] = [
    '#type' => 'checkbox',
    '#title' => t('Enable Search Menu'),
    '#description' => t('Displays the Search menu in the Top Bar.'),
    '#default_value' => theme_get_setting('zurb_foundation_top_bar_search'),
  ];

  // Language switcher settings.
  if (\Drupal::moduleHandler()->moduleExists('language')) {
    $form['topbar']['container']['languageswitcher'] = [
      '#type' => 'details',
      '#title' => t('Language switcher'),
    ];

    $form['topbar']['container']['languageswitcher']['zurb_foundation_top_bar_languageswitcher'] = [
      '#type' => 'checkbox',
      '#title' => t('Enable Language switcher'),
      '#description' => t('Displays the Language switcher in the Top Bar.'),
      '#default_value' => theme_get_setting('zurb_foundation_top_bar_languageswitcher'),
    ];
  }

  /*
   * Hard-coded page elements.
   */
  $form['page_elements'] = [
    '#type' => 'details',
    '#title' => t('Page Elements'),
    '#description' => t('Contains settings to toggle hard-coded elements in the page template.'),
  ];

  /*
   * Copyright Block.
   */
  $form['page_elements']['zurb_foundation_block_copyright_show'] = [
    '#type' => 'checkbox',
    '#title' => t('Show copyright block'),
    '#description' => t('Check this to include a copyright block in your theme.'),
    '#default_value' => theme_get_setting('zurb_foundation_block_copyright_show'),
  ];

  $form['page_elements']['copyright_settings'] = [
    '#type' => 'container',
    '#states' => [
      // Hide the copyright container when disabled.
      'invisible' => [
        'input[name="zurb_foundation_block_copyright_show"]' => ['checked' => FALSE],
      ],
    ],
  ];

  $form['page_elements']['copyright_settings']['zurb_foundation_block_copyright_custom_text'] = [
    '#type' => 'checkbox',
    '#title' => t('Use custom copyright text'),
    '#default_value' => theme_get_setting('zurb_foundation_block_copyright_custom_text'),
    '#description' => t('Check this if you want modify the copyright text. If unchecked, defaults to &copy; Year, Site name, All rights reserved.'),
  ];

  $form['page_elements']['copyright_settings']['copyright_content'] = [
    '#type' => 'container',
    '#states' => [
          // Hide the copyright content container when using the default label.
      'invisible' => [
        'input[name="zurb_foundation_block_copyright_custom_text"]' => ['checked' => FALSE],
      ],
    ],
  ];

  $form['page_elements']['copyright_settings']['copyright_content']['zurb_foundation_block_copyright_text'] = [
    '#type' => 'textfield',
    '#title' => t('Copyright text'),
    '#description' => t('Specify your custom copyright text.'),
    '#default_value' => theme_get_setting('zurb_foundation_block_copyright_text'),
  ];

  /*
   * Styles and Scripts
   */
  $form['styles_scripts'] = [
    '#type' => 'details',
    '#title' => t('Styles and Scripts'),
    '#collapsible' => TRUE,
  ];

  $form['styles_scripts']['zurb_foundation_disable_base_css'] = [
    '#type' => 'checkbox',
    '#title' => t('Disable Base Theme CSS'),
    '#description' => t("Disabling the base theme CSS is useful for using SASS in a sub-theme.<br><strong>If you select this option, uncomment the relevant CSS includes in your sub-theme's .info.yml file.</strong>"),
    '#default_value' => theme_get_setting('zurb_foundation_disable_base_css'),
  ];

  $form['styles_scripts']['zurb_foundation_disable_base_js'] = [
    '#type' => 'checkbox',
    '#title' => t('Disable Base Theme JavaScript'),
    '#description' => t("Disabling the base theme JavaScript when using a sub-theme is also recommended for more flexibility over which components get included.<br><strong>If you select this option, uncomment the relevant JS includes in your sub-theme's .info.yml file.</strong>"),
    '#default_value' => theme_get_setting('zurb_foundation_disable_base_js'),
  ];
}
