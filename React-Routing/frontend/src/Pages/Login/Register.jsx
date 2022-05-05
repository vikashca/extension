import React, { Component } from 'react';
import AUTH_OBJ from '../../webservices/AuthService';
import * as constObj from '../../Config/config';
import { NavLink } from 'react-router-dom';
const { API_URL } = constObj.default;

class Register extends Component {
    constructor(props) {
        super(props);
        this.state = {   }
    }


    handleChange(event) {
        this.setState({ [event.target.name]: event.target.value });
    }

    //This fn is handle form submission data
    async handleRegisterEvent(event) {
        let promise = new Promise((resolve, reject) => {
            const userRegister = {fname: this.state.firstname,lname: this.state.lastname, email: this.state.email, password: this.state.password };
            const registerResponse = AUTH_OBJ.register(userRegister);
            resolve();
        });
        let result = await promise;
    }
    
    render() {
        return (
            <React.Fragment>
                <div className="container" style={{width:"500px",marginTop: "60px"}}>
                    <h3>Register Form</h3>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="email" class="form-control" id="firstname" aria-describedby="emailHelp"  placeholder="First Name" onChange={(e) => this.handleChange(e)} name="firstname" />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="email" class="form-control" id="lastname" aria-describedby="emailHelp"  placeholder="Last Name" onChange={(e) => this.handleChange(e)} name="lastname" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="example@example.com" onChange={(e) => this.handleChange(e)} name="email" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  onChange={(e) => this.handleChange(e)} name="password" />
                    </div>
                    <button type="submit" class="btn btn-primary" onClick={() => this.handleRegisterEvent()}>Register</button>
                    <br/><br/>
                    <NavLink to='/login'>Back to login page</NavLink>
                </div>
            </React.Fragment>
        );
    }
}

export default Register;