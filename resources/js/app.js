import './bootstrap';

// added datepicker
import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';

$('.datepicker').datepicker();
