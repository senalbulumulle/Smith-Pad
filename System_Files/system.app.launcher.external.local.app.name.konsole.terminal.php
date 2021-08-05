<meta http-equiv="refresh" content="0; url='../index.php'" />


<?php


// The first step is to call shell_exec to change the current directory to the 
// default Home Directory, that way the KDE Application, Konsole will not 
// open with the directory that shows the System_Files on the Smith-Pad-OS-Interface 
// Source Code. It makes it easier, instead of the User to manually change the directory
// to the default directory by putting 'cd', which does to the default home directory, 
// unless the default directory has been specified by the administrator or by the user's 
// preferences. Please see the "system.app.launcher.external.app.name.konsole.terminal.sh"

$launch = shell_exec('sh system.app.launcher.external.local.app.name.konsole.terminal.sh');
echo "<pre>$launch</pre>";

?>