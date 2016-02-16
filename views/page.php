<?php
return "
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>{$html->getTitle()}</title>
    </head>
    <body>
    {$html->getContent()}
    </body>
</html>
";