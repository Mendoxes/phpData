<?php
include "god.php";


$project = new Project;
$project->('development');
echo $project->calculateRate();