<?php

function inputElement($icon, $placeholder, $name, $value){
    $ele = "
        
        <div class=\"input-group mb-2\">
            <span class=\"input-group-text\">$icon</span>
            <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$placeholder' class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
        </div>
    
    ";
    echo $ele;
}

function buttonElement($btnid, $styleclass, $text, $name, $attr){
    $btn = "
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
    ";
    echo $btn;
}