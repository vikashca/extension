//winston is for loggin
const http = require('http');

const winston = require('winston');
const express = require('express');
const fs = require('fs');
const app = express();
const config = require('config');
const helmet = require("helmet");

// for development
var cors = require('cors')

//enables cors
app.use(cors({
  'allowedHeaders': ['sessionId', 'Content-Type'],
  'exposedHeaders': ['sessionId'],
  'origin': '*',
  'methods': 'GET,HEAD,PUT,PATCH,POST',
  'preflightContinue': false
}));

app.use(helmet());

//routs.js is a router
require('./startup/routes')(app);

//db.js manages database
require('./startup/db')();

//config file has all env configurable consts
require('./startup/config')();

//validation.js is a main validation file
require('./startup/validation')();



  const port = config.get('httpPort');
  http.createServer(app).listen(port, () => winston.info(`Listening on port ${port}...`));


  // mongodb+srv://mailzapp:M@1lZ@pP@cluster0.fax1f.mongodb.net/myFirstDatabase?retryWrites=true&w=majority


