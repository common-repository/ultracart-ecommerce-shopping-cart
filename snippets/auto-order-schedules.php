<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

if(
    $item->getAutoOrder() !== null
    && $item->getAutoOrder()->getAutoOrderable() === true
    && $item->getAutoOrder()->getAutoOrderSchedules() !== null
    && count($item->getAutoOrder()->getAutoOrderSchedules()) > 0
): ?>
    <label class='js-item-auto-order-schedule uc-item-auto-order-schedule'>
        <span class='uc-item-auto-order-schedule-label'>Subscription</span>
        <select name='AutoOrderSchedule'
                class='uc-item-auto-order-schedule-value js-item-auto-order-schedule-value'
        >
            <option value=''>None</option>
            <?php foreach($item->getAutoOrder()->getAutoOrderSchedules() as $value): ?>
                <option value='<?php echo $value ?>'>
                    <?php echo $value; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
<?php endif; ?>
