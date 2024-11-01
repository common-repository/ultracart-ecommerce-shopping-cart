<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

if(!is_null($item->getVariations())): ?>
    <?php foreach($item->getVariations() as $key => $variation): ?>
        <label class="js-variation-select uc-item-variant">
            <span class="uc-item-variant-label">
                <?php echo $variation["name"]; if($option['required']): echo " *"; endif; ?>
            </span>
            <input type='hidden'
                   name='<?php echo "VariationName{$key}"; ?>'
                   value='<?php echo $variation["name"]; ?>'
            />
            <select name='<?php echo "VariationValue{$key}"; ?>'
                    id='<?php echo "uc-variation-field-{$key}-{$item->merchant_item_id}"; ?>'
                    class='js-variation'
                    required
            >
            <?php foreach($variation["options"] as $option): ?>
                <?php $selected = $value["default_value"] ? "selected" : ""; ?>
                <option value='<?php echo $option["value"]; ?>' <?php echo $selected; ?>>
                    <?php echo $option["value"]; ?>
                </option>
            <?php endforeach; ?>
            </select>
        </label>
    <?php endforeach; ?>
<?php endif; ?>