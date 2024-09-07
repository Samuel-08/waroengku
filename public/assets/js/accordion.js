  // Accordion
  $(document).ready(function() {
    $('.accordion button').on('click', function() {
        // Tutup accordion yang lain
        $('.accordion-content').not($(this).next()).slideUp().addClass('hidden');

        // Toggle accordion yang diklik
        $(this).next().slideToggle().toggleClass('hidden');
    });
});