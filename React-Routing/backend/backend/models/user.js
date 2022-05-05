const config = require('config');
const jwt = require('jsonwebtoken');
const Joi = require('joi');
const mongoose = require('mongoose');

const userSchema = new mongoose.Schema({
  fname : {
    type: String,
    required: false,
    trim: true, 
    minlength: 1,
    maxlength: 255
  },
  lname : {
    type: String,
    required: false,
    trim: true, 
    minlength: 0,
    maxlength: 255
  },
  email : {
    type: String,
    required: true,
    trim: true, 
    minlength: 5,
    maxlength: 255
  },
  password : {
    type : String, 
    required: true,
    trim: true, 
    minlength: 1,
    maxlength: 255
  },
  createdon : {
    type : Date, 
    default: Date.now
  },
  status : {
    type : Number, 
    default: 1
  },
  isadmin: Boolean
});


userSchema.methods.generateAuthToken = function() { 
  const token = jwt.sign({ _id: this._id, fname:this.fname, lname : this.lname, email:this.email, avatar:this.avatar, status: this.status, isadmin: this.isAdmin }, config.get('jwtPrivateKey'));
  return token;
}

const User = mongoose.model('User', userSchema);


function validateUser(user) {
  const schema = {
    fname: Joi.string().min(1).max(255),
    lname: Joi.string().min(1).max(255),
    email: Joi.string().email({ tlds: { allow: false } }),
    password: Joi.string().min(1).max(255).required(),
    isadmin : Joi.boolean().default(false)
  };
  
  return Joi.validate(user, schema);
}

exports.User = User; 
exports.validate = validateUser;