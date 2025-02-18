import "bootstrap";

import Alpine from 'alpinejs';
import mediaLoader from './components/mediaLoader';
import descriptionLoader from './components/descriptionLoader';

Alpine.data('mediaLoader', mediaLoader);
Alpine.data('descriptionLoader', descriptionLoader);

window.Alpine = Alpine;
Alpine.start();