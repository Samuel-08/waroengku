    // Form Validation
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            var isValid = true;

            $('input, textarea').each(function() {
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('border-red-500');
                } else {
                    $(this).removeClass('border-red-500');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Semua field harus diisi!');
            }
        });
    });