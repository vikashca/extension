import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
class Header extends Component {
    state = {  }
    render() {
        return (
            <React.Fragment>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Meals Manager</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <NavLink to='/meals' class="nav-link">Meals <span class="sr-only">(current)</span></NavLink>
                        </li>
                        {/* <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> */}
                        </ul>
                        <div class="form-inline my-2 my-lg-0">
                            <NavLink to="/logout" class="btn btn-outline-success my-2 my-sm-0">Logout</NavLink>
                        </div>
                    </div>
                    </nav>
            </React.Fragment>
        );
    }
}

export default Header;