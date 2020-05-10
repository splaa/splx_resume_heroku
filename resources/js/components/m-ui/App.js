import React from 'react';
import ReactDOM from 'react-dom';
import Button from '@material-ui/core/Button';

function App() {
    return (<div style={{padding:100}}>
        <Button variant="contained" color="primary">
            Hello World
        </Button>
        </div>
    );
}

ReactDOM.render(<App />, document.querySelector('#app-mui-splx'));
