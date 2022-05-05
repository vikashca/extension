const winston = require('winston');
const mongoose = require('mongoose');
const config = require('config');

module.exports = function() {
    // console.log(config.get('dbConnectionURL').getUser( "susheel", {
    //     showCredentials: true} ));
  mongoose.connect(config.get('dbConnectionURL'),{ useNewUrlParser: true, useUnifiedTopology: true, useFindAndModify: false })
    .then(() => winston.info('Connected to MongoDB...')).catch(e => winston.info(e));
}