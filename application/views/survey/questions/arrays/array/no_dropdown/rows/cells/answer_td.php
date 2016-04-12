<?php
/**
 * @var $label
 * @var $ld
 * @var $myfname
 * @var $ld
 * @var $CHECKED
 * @var $checkconditionFunction
 */
?>

<!-- answer_td -->
<td data-title='<?php echo $label;?>' class="answer-cell-3 answer_cell_<?php echo $ld;?> answer-item radio-item text-center radio">
    <input
        class="radio"
        type="radio"
        name="<?php echo $myfname;?>"
        value="<?php echo $ld; ?>"
        id="answer<?php echo $myfname;?>-<?php echo $ld; ?>"
        <?php echo $CHECKED; ?>
        onclick="<?php echo $checkconditionFunction; ?>(this.value, this.name, this.type)"
    />
    <label for="answer<?php echo $myfname;?>-<?php echo $ld; ?>" >
        <span class="hide label-text"><?php echo $label;?></span>
    </label>
</td>
<!-- end of answer_td -->
