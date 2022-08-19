<?php
return new PDO('sqlite:identifier.sqlite', null, null, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);