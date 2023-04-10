import './bootstrap';

import Alpine from 'alpinejs';

import.meta.glob([
  '../image/**',
]);

window.Alpine = Alpine;

Alpine.start();

