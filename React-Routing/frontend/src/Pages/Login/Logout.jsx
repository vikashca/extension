import React, { Component } from 'react';
import AUTH_OBJ from '../../webservices/AuthService';

class Logout extends Component {
    constructor(props) {
        super(props);
        this.state = { }
    }

   componentDidMount() {
    AUTH_OBJ.logout();
       this.props.history.push(`/login`);
   }
    render() { 
        return null;
    }
}

export default Logout;