<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

if(!is_null($item->getOptions())): ?>
    <?php foreach($item->getOptions() as $key => $option): ?>
        <?php
        $key += 1;
        $label = $option["label"];
        if($option['required']):
            $label .= " <span class='required-asterisk'>*</span>";
        endif;
        ?>
        <?php switch($option["type"]):
            case "dropdown": ?>
                <label class='js-item-option uc-item-option'
                       data-type='<?php echo $option["type"]; ?>'
                       data-option-label='<?php echo $option["label"]; ?>'>
                    <span class="uc-item-option-label"><?php echo $label; ?></span>
                    <input type='hidden'
                           name='<?php echo "OptionName{$key}"; ?>'
                           value='<?php echo esc_html($option["name"]); ?>'
                    />
                    <select name='<?php echo "OptionValue{$key}"; ?>'
                            class='uc-option-value js-option-value'
                            id='<?php echo "option-select{$key}"; ?>'
                            <?php if($option['required']): ?> required <?php endif; ?>
                    >
                    <?php foreach($option["values"] as $value): ?>
                        <?php $selected = $value["default_value"] ? "selected" : ""; ?>
                        <option value='<?php echo $value["value"]; ?>' <?php echo $selected; ?>>
                            <?php echo $value["value"]; ?>
                        </option>
                    <?php endforeach; ?>
                    </select>
                </label>
                <?php break;
            case "single": ?>
                <label class='js-item-option uc-item-option'
                       data-type='<?php echo $option["type"]; ?>'
                       data-option-label='<?php echo $option["label"]; ?>'>
                    <span class="uc-item-option-label"><?php echo $label; ?></span>
                    <input type='hidden'
                           name='<?php echo "OptionName{$key}"; ?>'
                           value='<?php echo esc_html($option["name"]); ?>'
                    />
                    <input type='text'
                           class='uc-option-value'
                           id='<?php echo "option-single{$key}"; ?>'
                           name='<?php echo "OptionValue{$key}"; ?>'
                           <?php if($option['required']): ?> required <?php endif; ?>
                    />
                </label>
                <?php break;
            case "multiline": ?>
                <label class='js-item-option uc-item-option'
                       data-type='<?php echo $option["type"]; ?>'
                       data-option-label='<?php echo $option["label"]; ?>'>
                    <span class="uc-item-option-label"><?php echo $label; ?></span>
                    <input type='hidden'
                           name='<?php echo "OptionName{$key}"; ?>'
                           value='<?php echo esc_html($option["name"]); ?>'
                    />
                    <textarea name='<?php echo "OptionValue{$key}"; ?>'
                              class='uc-option-value'
                              id='<?php echo "option-multiline{$key}"; ?>'
                              <?php if($option['required']): ?> required <?php endif; ?>
                    ></textarea>
                </label>
                <?php break;
            case "radio": ?>
                <div class='js-item-option uc-item-option'
                     data-type='<?php echo $option["type"]; ?>'
                     data-option-label='<?php echo $option["label"]; ?>'>
                    <span class="uc-item-option-label"><?php echo $label; ?></span>
                    <ul class='uc-option-value'>
                    <?php foreach($option["values"] as $valKey => $value): ?>
                        <?php $checked = $value["default_value"] ? "checked" : ""; ?>
                        <li>
                            <label>
                                <input type='hidden'
                                       name='<?php echo "OptionName{$key}"; ?>'
                                       value='<?php echo esc_html($option["name"]); ?>'
                                />
                                <input type='radio'
                                       name='<?php echo "OptionValue{$key}"; ?>'
                                       value='<?php echo esc_html($value["value"]); ?>'
                                       <?php if($option['required']): ?> required <?php endif; ?>
                                       <?php echo $checked; ?>
                                />
                                <span><?php echo $value["value"]; ?></span>
                            </label>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <?php break;
        endswitch; ?>
    <?php endforeach; ?>
<?php endif; ?>