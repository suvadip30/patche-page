<?php
$text = "you are not a good bot you are shit" . PHP_EOL;
$opt = sprintf("%s\n%s\n%s\n", $text); 
echo("$opt");
?>
<form action="#" method="post" id="demoForm" class="demoForm">
    <fieldset>
        <legend>Demo: Get Selected Options</legend>

        <p>
            <select name="demoSel[]" id="demoSel" size="4" multiple>
                <option value="scroll">Scrolling Divs JavaScript</option>
                <option value="tooltip">JavaScript Tooltips</option>
                <option value="con_scroll">Continuous Scroller</option>
                <option value="banner">Rotating Banner JavaScript</option>
                <option value="random_img">Random Image PHP</option>
                <option value="form_builder">PHP Form Generator</option>
                <option value="table_class">PHP Table Class</option>
                <option><?php fwrite("$text", "\n"); ?></option>
            </select>
            <input type="submit" value="Submit" />
            <textarea name="display" id="display" placeholder="view select list value(s) onchange" cols="20" rows="4" readonly><?php $newbee= nl2br("$newout", "\n"); echo str_replace("<br />", " ", $newbee);?></textarea>
        </p>

    </fieldset>
</form>

