<?php

namespace BrainGames\src;

  use function cli\line;
  use function cli\prompt;
/**
 * Make a greating
 * 
 * @return greeentin
 */
function hello()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}