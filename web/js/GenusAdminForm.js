(function ($) {
  $(document).ready(function () {
    var $wrapper = $('.js-genus-scientist-wrapper');
    $wrapper.on('click', '.js-remove-scientist', function (e) {
      e.preventDefault();
      $(this).closest('.js-genus-scientist-item').remove();
    });

    $wrapper.on('click', '.js-genus-scientist-add', function (e) {
      e.preventDefault();
      // Get the data-prototype explained earlier
      var prototype = $wrapper.data('prototype');
      // get the new index
      var index = $wrapper.data('index');
      // Replace '__name__' in the prototype's HTML to
      // instead be a number based on how many items we have
      var newForm = prototype.replace(/__name__/g, index);
      // increase the index with one for the next item
      $wrapper.data('index', index + 1);
      // Display the form in the page before the "new" link
      $(this).before(newForm);
    });
  });
})(jQuery);