const express = require('express');
const users = require('../routes/users');
const meals = require('../routes/meals');
const error = require('../middleware/error');
const config = require('config');


module.exports = function (app) {
  app.use(express.json());
  app.use('/' + config.get('api_version') + '/users', users);
  app.use('/' + config.get('api_version') + '/meals', meals);
  app.use(error);
}

