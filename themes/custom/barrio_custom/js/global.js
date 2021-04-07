/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.barrio_custom = {
    attach: function (context, settings) {
      console.log ("Hello World");
    }
  };

})(jQuery, Drupal);
