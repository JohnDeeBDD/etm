<?php

namespace ETM;

class SettingsPage{

    public function render(){

        $output = <<<OUTPUT
<style>
</style>
<h1>
Connections!
</h1>
<p>Add a site</p>
<input type = "text" name = "EMT_SiteToAdd" id = "EMT_SiteToAdd" placeholder = "i.e. https://somesite.com" /><br />
<input type = "button" name = "EMT_SiteToAddSubmitButton" id = "EMT_SiteToAddSubmitButton" value = "Add Site"/>


OUTPUT;
        echo $output;
    }

}

