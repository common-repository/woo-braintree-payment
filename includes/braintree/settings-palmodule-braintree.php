<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Settings for PayPal Rest Gateway.
 */
return $this->form_fields = array(
    'enabled' => array(
        'title' => __('Enable/Disable', 'woo-braintree'),
        'label' => __('Enable Braintree Payment Gateway', 'woo-braintree'),
        'type' => 'checkbox',
        'description' => '',
        'default' => 'no'
    ),
    'title' => array(
        'title' => __('Title', 'woo-braintree'),
        'type' => 'text',
        'description' => __('This controls the title which the user sees during checkout.', 'woo-braintree'),
        'default' => __('Braintree (Credit Card/PayPal)', 'woo-braintree'),
        'desc_tip' => true
    ),
    'description' => array(
        'title' => __('Description', 'woo-braintree'),
        'type' => 'textarea',
        'description' => __('This controls the description which the user sees during checkout.', 'woo-braintree'),
        'default' => 'Pay securely with your Credit Card/PayPal.',
        'desc_tip' => true
    ),
    'invoice_prefix' => array(
        'title' => __('Invoice Prefix', 'woo-braintree'),
        'type' => 'text',
        'description' => __('Please enter a prefix for your invoice numbers. If you use your PayPal account for multiple stores ensure this prefix is unique as PayPal will not allow orders with the same invoice number.', 'woo-braintree'),
        'default' => 'WC-BR',
        'desc_tip' => true,
    ),
    'sandbox' => array(
        'title' => __('Sandbox', 'woo-braintree'),
        'label' => __('Enable Sandbox Mode', 'woo-braintree'),
        'type' => 'checkbox',
        'description' => __('Place the payment gateway in sandbox mode using sandbox API keys (real payments will not be taken).', 'woo-braintree'),
        'default' => 'yes'
    ),
    'sandbox_public_key' => array(
        'title' => __('Sandbox Public Key', 'woo-braintree'),
        'type' => 'password',
        'description' => __('Get your API keys from your Braintree account.', 'woo-braintree'),
        'default' => '',
        'desc_tip' => true
    ),
    'sandbox_private_key' => array(
        'title' => __('Sandbox Private Key', 'woo-braintree'),
        'type' => 'password',
        'description' => __('Get your API keys from your Braintree account.', 'woo-braintree'),
        'default' => '',
        'desc_tip' => true
    ),
    'sandbox_merchant_id' => array(
        'title' => __('Sandbox Merchant ID', 'woo-braintree'),
        'type' => 'password',
        'description' => __('Get your API keys from your Braintree account.', 'woo-braintree'),
        'default' => '',
        'desc_tip' => true
    ),
    'live_public_key' => array(
        'title' => __('Live Public Key', 'woo-braintree'),
        'type' => 'password',
        'description' => __('Get your API keys from your Braintree account.', 'woo-braintree'),
        'default' => '',
        'desc_tip' => true
    ),
    'live_private_key' => array(
        'title' => __('Live Private Key', 'woo-braintree'),
        'type' => 'password',
        'description' => __('Get your API keys from your Braintree account.', 'woo-braintree'),
        'default' => '',
        'desc_tip' => true
    ),
    'live_merchant_id' => array(
        'title' => __('Live Merchant ID', 'woo-braintree'),
        'type' => 'password',
        'description' => __('Get your API keys from your Braintree account.', 'woo-braintree'),
        'default' => '',
        'desc_tip' => true
    ),
    'card_icon' => array(
        'title' => __('Card Icon', 'woo-braintree'),
        'type' => 'text',
        'default' => WOO_BRAINTREE_ASSET_URL . '/assets/images/cards.png',
        'class' => 'button_upload'
    ),
    'debug' => array(
        'title' => __('Debug Log', 'woo-braintree'),
        'type' => 'checkbox',
        'label' => __('Enable logging', 'woo-braintree'),
        'default' => 'yes',
        'description' => sprintf(__('Log PayPal/Braintree events, inside <code>%s</code>', 'woo-braintree'), wc_get_log_file_path('braintree'))
    )
);
