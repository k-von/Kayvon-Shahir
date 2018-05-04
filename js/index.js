import _ from 'lodash';
import 'bootstrap';
window.$ = require('jquery');
require('popper.js');
require('./custom.js');
require('../scss/main.scss');

function getComponent() {
  return import ( /* webpackChunkName: 'lodash' */ 'lodash')
    .then(_ => {
      var element = document.createElement('div');

      element.innerHTML = _.join(['Hello', 'webpack'], ' ');

      return element;
    })
    .catch(error => {
      'An error occured while loading component'
    });
}

getComponent()
  .then(component => {
    document.body.appendChild(component);
  });