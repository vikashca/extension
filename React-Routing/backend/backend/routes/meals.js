const {Meal, validate} = require('../models/meal'); 
const express = require('express');
const router = express.Router();
const _ = require('lodash');

const bodyParser = require('body-parser');
router.use(bodyParser.json());

//Get all meals
router.get('/', async (req, res) => {
  const meals = await Meal.find().sort('name');
  res.send(meals);
});

//Get meals by userid
router.get('/fields', async (req, res) => {
    const meals = await Meal.find(req.body);
    res.send({'status': true, 'meals': meals});
  });

//Get meal by id
router.get('/:id', async (req, res) => {
  const meal = await Meal.findById(req.params.id);
  if (!meal) return res.status(404).send('Meal does not exist');
  res.send(meal);
});

//Insert data to meal
router.post('/', async (req, res) => {
  const { error } = validate(req.body); 
  if (error) return res.status(400).send(error.details[0].message);

  let meal = new Meal(_.pick(req.body, ['userId','name','description','calories','addedon','status']));
  meal = await meal.save();
  
  res.send(meal);
});

router.put('/:id', async (req, res) => {
  if (Object.keys(req.body).length === 0) return res.status(400).send('Wrong parameters provided');
  const meal = await Meal.findByIdAndUpdate(req.params.id, req.body, { new: true });
  if (!meal) return res.status(404).send('Meal does not exist');
  res.status(200).send({'status': true, 'message': "updated!"});
});

//Delete meal by id
router.delete('/:id', async (req, res) => {
  const meal = await Meal.findByIdAndRemove(req.params.id);
  if (!meal) return res.status(404).send('Meal does not exist');
  res.send(meal);
});

module.exports = router; 