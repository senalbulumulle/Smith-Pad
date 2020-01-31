<link rel="stylesheet" href="../src/layouts.css" type="text/css">
<link rel="stylesheet" href="../src/position-text.css" type="text/css">
<link rel="stylesheet" href="../src/UI.css" type="text/css">
<link rel="stylesheet" href="../src/FOIL-Bar.css" type="text/css">

<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>
<div class="space"></div>

<div class="box"> 
    <div class="center">
    <fontsize60><fontcolorWHITE> Software Update Tool.  </fontcolorWHITE> </fontsize60> <a href="../Power/reboot.php" class="button is-red button-no-animate-mode button small">Restart System  and Go back to Smith Pad</a> 

    </div>
</div>



<?php
// Communicates the Terminal 
$output=shell_exec('sh update.sh'); 

// Displays After the Software Update Tool has been Completed 

echo "<pre>  <fontcolorWHITE>  ";
print_r($output);
echo "</pre> </fontcolorWHITE> ";


?>
 