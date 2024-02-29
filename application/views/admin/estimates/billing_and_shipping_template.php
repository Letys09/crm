<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="modal fade" id="billing_and_shipping_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <?php $countries = get_all_countries(); ?>
                    <div class="col-md-12">
                        <div id="billing_details">
                            <?php $value = (isset($estimate) ? $estimate->billing_street : ''); ?>
                            <?php echo render_textarea('billing_street', 'billing_street', $value); ?>
                            <?php $value = (isset($estimate) ? $estimate->billing_city : ''); ?>
                            <?php echo render_input('billing_city', 'billing_city', $value); ?>
                            <?php $value = (isset($estimate) ? $estimate->billing_state : ''); ?>
                            <?php echo render_input('billing_state', 'billing_state', $value); ?>
                            <?php $value = (isset($estimate) ? $estimate->billing_zip : ''); ?>
                            <?php echo render_input('billing_zip', 'billing_zip', $value); ?>
                            <?php $selected = (isset($estimate) ? $estimate->billing_country : ''); ?>
                            <?php echo render_select('billing_country', $countries, ['country_id', ['short_name'], 'iso2'], 'billing_country', $selected); ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr />
                        <a href="#" class="pull-right" id="get_shipping_from_customer_profile" data-placement="left" data-toggle="tooltip" title="<?php echo _l('get_shipping_from_customer_profile'); ?>"><i class="fa fa-user"></i></a>
                        <div class="clearfix"></div>
                      <div class="form-group no-mbot">
                            <div class="checkbox checkbox-primary checkbox-inline">
                            <input type="checkbox" id="include_shipping" name="include_shipping" <?php if (isset($estimate) && $estimate->include_shipping == 1) {
    echo 'checked';
} ?>>
                            <label for="include_shipping"><?php echo _l('shipping_address'); ?></label>
                        </div>
                      </div>
                        <div id="shipping_details" class="<?php if ((isset($estimate) && $estimate->include_shipping != 1) || !isset($estimate)) {
    echo 'hide';
} ?>">
                        <div class="form-group">
                                <div class="checkbox checkbox-primary checkbox-inline">
                                <input type="checkbox" id="show_shipping_on_estimate" name="show_shipping_on_estimate" <?php if ((isset($estimate) && $estimate->show_shipping_on_estimate == 1) || !isset($estimate)) {
    echo 'checked';
} ?>>
                                <label for="show_shipping_on_estimate"><?php echo _l('show_shipping_on_estimate'); ?></label>
                            </div>
                        </div>
                            <?php $value = (isset($estimate) ? $estimate->shipping_street : ''); ?>
                            <?php echo render_textarea('shipping_street', 'shipping_street', $value); ?>
                            <?php $value = (isset($estimate) ? $estimate->shipping_city : ''); ?>
                            <?php echo render_input('shipping_city', 'shipping_city', $value); ?>
                            <?php $value = (isset($estimate) ? $estimate->shipping_state : ''); ?>
                            <?php echo render_input('shipping_state', 'shipping_state', $value); ?>
                            <?php $value = (isset($estimate) ? $estimate->shipping_zip : ''); ?>
                            <?php echo render_input('shipping_zip', 'shipping_zip', $value); ?>
                            <?php $selected = (isset($estimate) ? $estimate->shipping_country : ''); ?>
                            <?php echo render_select('shipping_country', $countries, ['country_id', ['short_name'], 'iso2'], 'shipping_country', $selected); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer modal-not-full-width">
                <a href="#" class="btn btn-primary save-shipping-billing"><?php echo _l('apply'); ?></a>
            </div>
        </div>
    </div>
</div>
