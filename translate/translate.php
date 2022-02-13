<?php
add_action('init', function() {
  pll_register_string('header-logo', 'img/ua1.svg');
  pll_register_string('header-menu-1', 'Калькулятор');
  pll_register_string('header-menu-2', 'Вигода');
  pll_register_string('header-menu-3', 'Можливості');
  pll_register_string('header-menu-3', 'Контакти');

  // calculator
  pll_register_string('calculator-title', 'Дізнайтесь орієнтовну<span class="text-span">середню ціну авто в Україні</span>');
});
