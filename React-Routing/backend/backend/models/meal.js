const config = require('config');
const jwt = require('jsonwebtoken');
const Joi = require('joi');
const mongoose = require('mongoose');

const mealSchema = new mongoose.Schema({
    userId : {
        type: String,
        required: true,
        trim: true, 
        minlength: 1,
        maxlength: 255
      },
  name : {
    type: String,
    required: true,
    trim: true, 
    minlength: 1,
    maxlength: 255
  },
  description : {
    type: String,
    required: false,
    trim: true, 
    minlength: 0,
    maxlength: 255
  },
  calories : {
    type: String,
    required: true,
    trim: true, 
    minlength: 1,
    maxlength: 255
  },
  addedon : {
    type : Date, 
    default: Date.now
  },
  status : {
    type : Number, 
    default: 1
  }
});

const Meal = mongoose.model('Meal', mealSchema);

function validateUser(meal) {
  const schema = {
    userId: Joi.string().min(1).max(255).required(),
    name: Joi.string().min(1).max(255).required(),
    description: Joi.string().min(1).max(255),
    calories: Joi.string().min(1).max(255).required(),
  };
  
  return Joi.validate(meal, schema);
}

exports.Meal = Meal; 
exports.validate = validateUser;