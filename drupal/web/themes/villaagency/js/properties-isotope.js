(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.villaPropertiesIsotope = {
    attach: function (context, settings) {
      // Sirf properties page pe chalao
      if ($('.properties-box', context).length) {
        var $grid = $('.properties-box', context).isotope({
          itemSelector: '.properties-items',
          layoutMode: 'fitRows',
          percentPosition: true
        });

        // Filter buttons pe click
        $('.properties-filter a', context).on('click', function (e) {
          e.preventDefault();

          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });

          // Active class manage karo
          $('.properties-filter a').removeClass('is_active');
          $(this).addClass('is_active');
        });
      }
    }
  };

})(jQuery, Drupal);