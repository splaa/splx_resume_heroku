import React from 'react';
import ReactDOM from 'react-dom';
import Button from '@material-ui/core/Button';
import Header from "./header/Header";

function App() {
    return (<div>
            <Header />
        <Button variant="contained" color="primary">
            Hello World
        </Button>
        </div>
    );
}

ReactDOM.render(<App />, document.querySelector('#app-mui-splx'));
