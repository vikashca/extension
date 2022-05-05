import React, { Component } from 'react';
import Header from '../Header/Header';
import { Button, AddIcon, Table,Pane, Heading,toaster,DotIcon } from 'evergreen-ui';
import auth from '../../webservices/AuthService';
import { NavLink } from 'react-router-dom';
import CONFIG from '../../Config/config';
import axios from 'axios';

class MealsList extends Component {
    constructor(props){
        super(props);
        this.state = { 
            userId: '',
            mealsData: []
        }
    }
    
    componentDidMount() {
            let user = auth.getCurrentUser();
            this.setState({userId: user._id});
            let mdata={
                userId:  user._id,
                status: 1
            }
            axios.get(CONFIG.API_URL + `meals/fields`, mdata).then((resp) => {
                let mealsdata = resp.data.meals;
                console.log(mealsdata);
                // this.setState({ mealsData : mealsdata });
            }).catch((ex) => {
                if (ex.response && ex.response.status === 400) {
                    toaster.notify(ex.response.data);
                }
            });      
    }

    render() {
        console.log(this.state.mealsData)
        return (
            <React.Fragment>
                <Header/>
                <Button height={35} margin={20} appearance="primary" intent="success" iconBefore={AddIcon}>
                    <NavLink to='/meals/new'>Add New Meal</NavLink>
                </Button>
                <Heading fontSize={30} margin={25}>List of meals</Heading>
                <Table style={{width: "700px",margin: "0 auto"}}>
                    <Table.Head>
                        <Table.TextHeaderCell>
                            Name
                        </Table.TextHeaderCell>
                        <Table.TextHeaderCell>
                            Description
                        </Table.TextHeaderCell>
                        <Table.TextHeaderCell>
                            Date
                        </Table.TextHeaderCell>
                        <Table.TextHeaderCell>
                            Actions
                        </Table.TextHeaderCell>
                    </Table.Head>
                    <Table.Body height={240}>
                        {this.state.mealsData && this.state.mealsData.map((meal, i) => (
                        <Table.Row key={i} isSelectable>
                            <Table.TextCell>{meal.name}</Table.TextCell>
                            <Table.TextCell>{meal.description}</Table.TextCell>
                            <Table.TextCell isNumber>{meal.addedon}</Table.TextCell>
                            <Table.TextCell>{DotIcon}</Table.TextCell>
                        </Table.Row>
                        ))}
                    </Table.Body>
                </Table>
            </React.Fragment>   
        );
    }
}

export default MealsList;