<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

if(!is_null($item->getPricing())): ?>
    <?php
    try {
        $timezone = new DateTimeZone("America/New_York");
        $saleStartDate = new DateTime($item->getPricing()->getSaleStart());
        $saleStartDate->setTimezone($timezone);
        $saleEndDate = new DateTime($item->getPricing()->getSaleEnd());
        $saleEndDate->setTimezone($timezone);
        $currentDate = new DateTime("now", $timezone);
        $isInSaleRange = $currentDate->getTimestamp() > $saleStartDate->getTimestamp()
            && $currentDate->getTimestamp() < $saleEndDate->getTimestamp();
        $saleClass = ($item->getPricing()->getSaleCost() === NULL || !$isInSaleRange) ? "" : "uc-sale";
    } catch (Exception $e) {
        $isInSaleRange = false;
        $saleClass = "";
    }
    ?>
    <div class="uc-item-info-price <?php echo $saleClass; ?>">
        <span
            class="uc-price"
            data-currency-conversion="<?php echo $currencyConversion; ?>"
            data-value="<?php echo $item->getPricing()->getCost() ?>"
        >
            $<?php echo number_format($item->getPricing()->getCost(), 2); ?>
        </span>
        <?php if($item->getPricing()->getSaleCost() && $isInSaleRange): ?>
            <span
                class="uc-price-sale"
                data-currency-conversion="<?php echo $currencyConversion; ?>"
                data-value="<?php echo $item->getPricing()->getSaleCost() ?>"
            >
                $<?php echo number_format($item->getPricing()->getSaleCost(), 2); ?>
            </span>
        <?php endif; ?>
    </div>
<?php endif; ?>