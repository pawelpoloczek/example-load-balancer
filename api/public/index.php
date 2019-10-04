<?php

echo '<pre>';
echo shell_exec('hostname');
echo '</pre>';
echo '<pre>';
echo shell_exec('cat /proc/self/cgroup | head -1 | tr --delete ‘10:memory:/docker/’');
echo '</pre>';

phpinfo();