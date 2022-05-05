import './App.css';
import { BrowserRouter } from 'react-router-dom';
import Routes from './Routes';
// import AUTH_OBJ from './webServices/AuthService';

// AUTH_OBJ.redirectToLoginIfUerNotLoggedIn();
function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes />
      </BrowserRouter>
    </div>
  );
}

export default App;
