import jwtDecode from 'jwt-decode';
import axios from 'axios';
import CONFIG from '../Config/config';
import { toaster } from 'evergreen-ui';
import _ from 'lodash';


export function login(userLogin) {
    try {
        axios.post(CONFIG.API_URL + `users/login`, userLogin).then((res) => {
            if (res.status === 200) {
                localStorage.setItem(CONFIG.tokenKey, res.data);
                localStorage.setItem(CONFIG.userLoggedInKey, true);
                toaster.success("Logged In Successfully!");
                window.location = "/meals";
            }
        }).catch((ex) => {
            if (ex.response && ex.response.status === 400) {
                toaster.danger(ex.response.data);
            }
        });
    } catch (ex) {

    }
}


export function register(userData) {
    try {
        axios.post(CONFIG.API_URL + `users/register`, userData).then((res) => {
            if (res.status === 200) {
                toaster.success("You have successfully registered!");
                window.location = "/login";
            }
        }).catch((ex) => {
            if (ex.response && ex.response.status === 400) {
                toaster.notify(ex.response.data);
            }
        });

    } catch (ex) {

    }
}

export function logout() {
    localStorage.removeItem(CONFIG.tokenKey);
    localStorage.removeItem(CONFIG.userLoggedInKey);
}

export function getCurrentUser() {
    try {
        let getToken = localStorage.getItem(CONFIG.tokenKey);
        let data = '';
        if (getToken != null) {
            data = jwtDecode(getToken);
        } else {
            data = jwtDecode(localStorage.getItem('userdata'));
        }
        return data;
    } catch (ex) {
        return null;
    }
}
var allowURL = ["login","register","meals","/meals/new"];
var loginchk = 1;
var loc =  window.location;
for (var i = 0; i < allowURL.length; i++) {
   if(loc.toString().indexOf(allowURL[i]) > 0){
       loginchk = 0;
       break;
   } 
}; 

export function redirectToLoginIfUerNotLoggedIn() {
    if(loginchk == 1){
        if (!this.getCurrentUser() && !localStorage.getItem('userLoggedInKey')) return window.location = '/login';
    } 
}


export default { login, register, logout, getCurrentUser, redirectToLoginIfUerNotLoggedIn }