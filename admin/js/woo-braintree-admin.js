(function ($) {
    'use strict';
     $(window).load(function () {
        $('#woocommerce_palmodule_braintree_sandbox').change(function () {
            var sandbox = $('#woocommerce_palmodule_braintree_sandbox_public_key, #woocommerce_palmodule_braintree_sandbox_private_key, #woocommerce_palmodule_braintree_sandbox_merchant_id').closest('tr');
            var production = $('#woocommerce_palmodule_braintree_live_public_key, #woocommerce_palmodule_braintree_live_private_key, #woocommerce_palmodule_braintree_live_merchant_id').closest('tr');
            if ($(this).is(':checked')) {
                sandbox.show();
                production.hide();
            } else {
                sandbox.hide();
                production.show();
            }
        }).change();
    });
})(jQuery);
