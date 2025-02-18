import "bootstrap";

import Alpine from 'alpinejs';
import mediaLoader from './components/mediaLoader';
import descriptionLoader from './components/descriptionLoader';

Alpine.data('mediaLoader', mediaLoader);
Alpine.data('descriptionLoader', descriptionLoader);
import imagesLoaded from 'imagesloaded';
window.imagesLoaded = imagesLoaded;
window.Alpine = Alpine;
Alpine.start();