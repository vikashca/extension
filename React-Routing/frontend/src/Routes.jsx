import React from 'react';
import { Switch, Route } from 'react-router-dom';
import Login from './Pages/Login/Login';
import Logout from './Pages/Login/Logout';
import Register from './Pages/Login/Register';
import MealsList from './Pages/Meals/MealsList';
import NewMeal from './Pages/Meals/NewMeal';

function Routes() {

    return (
        <React.Fragment>
            <Switch>
                <Route from="/login" component={Login} />
                <Route from="/register" component={Register} />
                <Route from="/logout" component={Logout} />
                <Route from="/meals/new" component={NewMeal} />
                <Route from="/meals" component={MealsList} />
                <Route from="/" component={Login} />

            </Switch>

        </React.Fragment>
    );
}
export default Routes;
