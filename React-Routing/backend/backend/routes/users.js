const bcrypt = require('bcrypt');
const _ = require('lodash');
const { User, validate } = require('../models/user');
const express = require('express');
const router = express.Router();

router.get('/', async (req, res) => {
  res.send("Working...123");
  res.status(200);
});

router.get('/:id', async (req, res) => {
  const user = await User.findById(req.params.id);
  if (!user) return res.status(404).send('User does not exist');
  user.password = '';
  res.send(user);
});

router.post('/register', async (req, res, next) => {
  const ip = '0.0.0.0';
  const { error } = validate(req.body);
  if (error) return res.status(400).send(error.details[0].message);

  let user = await User.findOne({ email: req.body.email });
  if (user) return res.status(400).send('User already exists');
  
  user = new User(_.pick(req.body, ['fname', 'lname', 'email', 'password']));
  const salt = await bcrypt.genSalt(10);
  user.password = await bcrypt.hash(user.password, salt);
  user.lastip = ip;
  await user.save();
  
  //res.send(token);
  res.status(200).send({"status": "Registered successfully"});
});

router.post('/login', async (req, res, next) => {
  const ip = '0.0.0.0';
  const { error } = validate(req.body);
  if (error) return res.status(400).send(error.details[0].message);

  let user = await User.findOne({ email: req.body.email });
  if (!user) return res.status(400).send("User doesn't exists");
  const match = await bcrypt.compare(req.body.password, user.password);
  if(match){
    const token = user.generateAuthToken();
    // res.header('x-auth-token', token).send(_.pick(user, ['fname', 'lname', 'email', 'password']));
    res.status(200).send(token);
  }else{
    res.status(400).send('Invalid credentials');
  }
  
});

router.put('/:id', async (req, res, next) => {
  if (Object.keys(req.body).length === 0) return res.status(400).send('Wrong parameters provided');

  const user = await User.findByIdAndUpdate(req.params.id, req.body, { new: true });
  if (!user) return res.status(404).send('User does not exist');
  res.status(200).send({ 'status': true, 'message': "Updated Successfully" });
});

module.exports = router;
