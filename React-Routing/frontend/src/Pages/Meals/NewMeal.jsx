import React, { Component } from 'react';
import CONFIG from '../../Config/config';
import axios from 'axios';
import { toaster } from 'evergreen-ui';
import auth from '../../webservices/AuthService';

class NewMeal extends Component {
    constructor(props){
        super(props);
        this.state = { 
        userId: '',
        mealname: '',
        mealdesc: '',
        noofcalories: 0,
     }
    }

    componentDidMount() {
        try {    
            const user = auth.getCurrentUser();
            this.setState({userId: user._id});
        }catch(ex){}
    }

    handleChange = (event) => {
        this.setState({ [event.target.name]: event.target.value });
    }

    handleSubmitMeal = () => {
        const mealData = {
            userId: this.state.userId,
            name: this.state.mealname,
            description: this.state.mealdesc,
            calories: this.state.noofcalories
        }
        
        axios.post(CONFIG.API_URL + `meals`, mealData).then((res) => {
            if (res.status === 200) {
                toaster.success("Meal added successfully!");
                this.props.history.push('/meals');
            }
        }).catch((ex) => {
            if (ex.response && ex.response.status === 400) {
                toaster.notify(ex.response.data);
            }
        });
    }
    

    render() {
        return (
            <React.Fragment>
                <div className="container" style={{width:"500px",marginTop: "60px"}}>
                    <div class="form-group">
                        <label for="name">Meal Name</label>
                        <input type="email" class="form-control" id="name" aria-describedby="emailHelp"  placeholder="Meal Name" onChange={(e) => this.handleChange(e)} name="mealname" value={this.state.mealname} />
                    </div>
                    <div class="form-group">
                        <label for="desc">Meal Description</label>
                        <input type="email" class="form-control" id="desc" aria-describedby="emailHelp"  placeholder="Meal Description" onChange={(e) => this.handleChange(e)} name="mealdesc"  value={this.state.mealdesc} />
                    </div>
                    <div class="form-group">
                        <label for="calories">No. of calories</label>
                        <input type="email" class="form-control" id="calories" aria-describedby="emailHelp"  placeholder="Enter calories" onChange={(e) => this.handleChange(e)} name="noofcalories"  value={this.state.noofcalories} />
                    </div>
                    <button type="submit" class="btn btn-primary" onClick={() => this.handleSubmitMeal()}>Submit Meal</button>
                    <br/><br/>
                </div>
            </React.Fragment>
        );
    }
}

export default NewMeal;