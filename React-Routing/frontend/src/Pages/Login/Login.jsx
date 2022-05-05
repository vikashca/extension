import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
import AUTH_OBJ from '../../webservices/AuthService';
import * as constObj from '../../Config/config';
const { API_URL } = constObj.default;

class Login extends Component {
    constructor(props) {
        super(props);
        this.state = {   }
    }


    handleChange(event) {
        this.setState({ [event.target.name]: event.target.value });
    }

    //This fn is handle form submission data
    async handleLoginEvent(event) {
        let promise = new Promise((resolve, reject) => {
            const userLogin = { email: this.state.useremail, password: this.state.userpassword };
            const loginResponse = AUTH_OBJ.login(userLogin);
            resolve();
        });
        let result = await promise;
    }

    render() {
        return (
            <React.Fragment>
                <div className="container" style={{width:"500px",marginTop: "60px"}}>
                    <h3>Login Here</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="example@example.com" onChange={(e) => this.handleChange(e)} name="useremail" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Password"  onChange={(e) => this.handleChange(e)} name="userpassword" />
                    </div>
                    <button type="submit" class="btn btn-primary"  onClick={() => this.handleLoginEvent()}>Login</button>
                    <br/><br/>
                    <NavLink to='/register'>Back to register page</NavLink>
                </div>
            </React.Fragment>
        );
    }
}

export default Login;